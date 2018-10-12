/**
var admin=* FirstApp Modul;
*
* Description
*/
var admin =angular.module('FirstApp', []);


// merubah tag awal dan akhir angular menjadi <%-%> yang sebelumnya{{}}
var admin  = angular.module('FirstApp', [], function($interpolateProvider){

	$interpolateProvider.startSymbol('<%');

	$interpolateProvider.endSymbol('%>');

});


//membuat format Rp. xxxxx,oo untuk mata uang rupiah
// admin.filter('rupiah', function() {
// 	return function toRp(angka){
// 		var rev = parseInt(angka, 10).toString().split('').reverse().join('');
// 		var rev2 = '';
// 		for (var i = 0; i < rev.length; i++){
// 			rev2 += rev[i];
// 			if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
// 				rev2 += '.';
// 			}
// 		}
// 		return 'Rp. ' + rev2.split('').reverse().join('') + ',00';
// 	};	
// });

// var admin = angular.module("FirstApp", []);

// 	admin.factory("outputFactory", function(){
// 		var obj = {};
// 		// a = no_mesin
// 		// b = data.detail[0].melt_pump
		
// 		obj.outputLayer = function(a, b){
// 			return 
// 			if(a=="1"){
// 				176 * b * 1.11 * 60 / 1000;
// 			}
// 			else if (a=="2"){
// 				46.3 * b * 1.11 * 60 / 1000;
// 			}
// 			else if (a=="3"){
// 				25.6 * b * 1.11 * 60 / 1000;
// 			}
// 			else if (a=="4"){
// 				25.6 * b * 1.11 * 60 / 1000;
// 			}
// 			else{
// 				alert ("gagal hitung");
// 			}
// 		};

// 		return obj;
// 	})

// 	admin.controller("MainController", function($scope, outputFactory){		
// 		$scope.Layer = function(){
// 			$scope.result = outputFactory.outputLayer($scope.nomesin1, $scope.data.detail[0].melt_pump);
// 			$scope.needhour11 = $scope.Layer * $scope.percom11;
// 			$scope.apply();
// 		};
		
	// })
