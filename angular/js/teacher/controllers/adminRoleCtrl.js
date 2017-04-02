angular
    .module('teacherApp')
    .controller('adminRoleCtrl', adminRoleCtrl);

function adminRoleCtrl ($scope, roleService){
    $scope.changePageHeader('Призначити роль');

    $scope.onSelectUser = function ($item) {
        $scope.selectedUser = $item;
    };
    $scope.reloadUser = function(){
        $scope.selectedUser=null;
    };
    $scope.clearInputs=function () {
        $scope.userSelected=null;
        $scope.selectedUser=null;
    };

    $scope.assignLocalRole = function (user, role) {
        if (!user) {
            bootbox.alert('Виберіть користувача.');
        } else {
            roleService
                .assignLocalRole({
                    'userId': user,
                    'role': role,
                })
                .$promise
                .then(function successCallback(response) {
                    $scope.addUIHandlers(response.data);
                    $scope.clearInputs();
                }, function errorCallback(response) {
                    console.log(response);
                    bootbox.alert("Операцію не вдалося виконати");
                });
        }
    }
}