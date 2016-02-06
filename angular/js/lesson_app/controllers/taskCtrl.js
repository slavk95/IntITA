/**
 * Created by Wizlight on 10.12.2015.
 */
angular
    .module('lessonApp')
    .controller('taskCtrl',taskCtrl);

function taskCtrl($http, $scope, openDialogsService, pagesUpdateService, userAnswerTaskService, ipCookie) {
    $scope.sendTaskAnswer=function(jobid, idTask, taskLang, url,e,user){
        $scope.userId=user;
        $scope.taskId=idTask;
        var button=angular.element(document.querySelector(".taskSubmit"));
        angular.element(document.querySelector("#ajaxLoad")).css('margin-top', e.currentTarget.offsetTop-20+'px');
        button.attr('disabled', true);
        var answer = $('[name=code]').val();

        if($.trim(answer) == '')
        {
            angular.element(document.querySelector("#flashMsg")).addClass('emptyFlash');
            button.removeAttr('disabled');
        } else {
            userAnswerTaskService.sendAnswerJson(url, taskLang, idTask, $scope.userCode, ipCookie("PHPSESSID"), jobid).then(function (response) {
                if(response=='OK'){
                    getTaskResult(idTask,user);
                }else if(response=='error'){
                    bootbox.alert("На сервері виникли проблеми. Онови сторінку та спробуй ще раз, або зв'яжися з адміністратором.");
                }
                $('#ajaxLoad').hide();
                button.removeAttr('disabled');
            });
        }

        function getTaskResult(task,user) {
            return userAnswerTaskService.getResultJson(url, taskLang, idTask, $scope.userCode, ipCookie("PHPSESSID"), jobid)
                .then(function(serverResponse) {
                    switch (serverResponse.status) {
                        case 'in proccess':
                            getTaskResult();
                            break;
                        case 'done':
                            $scope.setMark($scope.taskId, serverResponse.status, serverResponse.date, serverResponse.result, serverResponse.warning,$scope.userId)
                                .then(function(setMarkResponse) {
                                    pagesUpdateService.pagesDataUpdate();
                                    openDialogsService.openTrueDialog();
                                });
                            break;
                        case 'error':
                            bootbox.alert("На сервері виникли проблеми. Онови сторінку та спробуй ще раз, або зв'яжися з адміністратором.");
                            break;
                        default:
                            $scope.setMark(task, serverResponse.status, serverResponse.date, serverResponse.result, serverResponse.warning);
                            openDialogsService.openFalseDialog();
                    }
                })
        }
    };

//sent post to intita server to write result
    $scope.setMark=function(task, status, date, result, warning,user){
        var promise = $http({
            url: basePath + "/task/setMark",
            method: "POST",
            data: $.param({
                user: user,
                task: task,
                status: status,
                date : date,
                result: result,
                warning: warning
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'},
            cache: false
        }).then(function successCallback(response) {
            return  response.statusText;
        }, function errorCallback() {
            console.log('error setMark');
        });
        return promise;
    };
}