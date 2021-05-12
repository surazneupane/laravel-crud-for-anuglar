var commentApp = angular.module('commentApp', ['main_ctrl', 'comment_service'],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
}); 