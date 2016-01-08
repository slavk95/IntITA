/**
 * Created by Wizlight on 14.12.2015.
 */
angular
    .module('lessonApp')
    .run([
        '$rootScope', '$state', '$stateParams','$http','paramService','accessLectureService',
        function ($rootScope, $state, $stateParams, $http, paramService,accessLectureService) {
            paramService.getStartParam($rootScope, $state, $stateParams);
            accessLectureService.getAccessLectures();

            $rootScope.$on('$stateChangeStart',
                function (event, toState, toParams, fromState, fromParams) {
                    //перевіряємо при завантажені стейта чи є модель pageData, якщо нема - дістаєм з сервера\
                    if(toParams.page==undefined) toParams.page=lastAccessPage;//при завантажені по дефолту робимо останю доступну частину
                    if($rootScope.pageData==undefined){
                        return $http({
                            url: basePath + '/lesson/GetPageData',
                            method: "POST",
                            data: $.param({lecture: idLecture}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'}
                        }).then(function successCallback(response){
                            $rootScope.pageData = response.data;
                            $rootScope.pageCount = response.data.length;
                            if($rootScope.pageData[toParams.page-1].isDone==false){
                                event.preventDefault();
                                $state.go('error');
                            }
                        }, function errorCallback(response) {
                            alert('Error .run stateChangeStart ');
                        });
                    }
                    //перевіряємо чи доступна частина
                    if($rootScope.pageData[toParams.page-1].isDone==false){
                        event.preventDefault();
                    }else{
                        $rootScope.currentPage=toParams.page;
                    }
                }
            );
            $rootScope.$on('$stateChangeSuccess',
                function (event, toState, toParams, fromState, fromParams) {
                    $rootScope.currentPage=toParams.page;
                    setTimeout(function() {
                        MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
                    });
                });
        }
    ]);

angular
    .module('lessonApp')
    .config(['$locationProvider','$stateProvider', function($locationProvider,$stateProvider){
        $stateProvider
            .state('page', {
                url: "/page:page",
                views: {
                    "viewVideo": {
                        templateUrl: function (stateParams){
                            return basePath+'/lesson/loadVideoPage?page='+stateParams.page+'&lectureId='+idLecture;
                        }
                    },
                    "viewText": {
                        templateUrl: function (stateParams){
                            return basePath+'/lesson/loadTextPage?page='+stateParams.page+'&lectureId='+idLecture;
                        }
                    },
                    "viewQuiz": {
                        templateUrl: function (stateParams){
                            return basePath+'/lesson/loadQuizPage?page='+stateParams.page+'&lectureId='+idLecture;
                        }
                    }
                },
            })
            .state('error', {
                url: "/error",
                views: {
                    "viewVideo": {
                        template: 'Сторінка недоступна'
                    },
                    "viewText": {
                        template: 'Сторінка недоступна'
                    },
                    "viewQuiz": {
                        template: 'Сторінка недоступна'
                    }
                }
            })
            .state('default', {
                url: "",
                views: {
                    "viewVideo": {
                        templateUrl: function (){
                            return basePath+'/lesson/loadVideoPage?page='+lastAccessPage+'&lectureId='+idLecture;
                        }
                    },
                    "viewText": {
                        templateUrl: function (){
                            return basePath+'/lesson/loadTextPage?page='+lastAccessPage+'&lectureId='+idLecture;
                        }
                    },
                    "viewQuiz": {
                        templateUrl: function (){
                            return basePath+'/lesson/loadQuizPage?page='+lastAccessPage+'&lectureId='+idLecture;
                        }
                    }
                },
            });
    }]);