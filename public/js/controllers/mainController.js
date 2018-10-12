admin.controller('mainController', ['$scope', function($scope, $http){

   






	// ON-CHANGE DATA MASTER
      $scope.hitungMaster = function(){
         
         var durasi = 0;
         durasi = (($scope.length/1000) * $scope.quantity / $scope.calspeed / 60);
         durasi = durasi + $scope.allowance;
         // durasi = durasi.toFixed(2);

         console.log(durasi);

         // NEED COM LAYER 1
         $scope.needcom11 = Number(($scope.needhourcom11 * durasi).toFixed(2));
         $scope.needcom21 = Number(($scope.needhourcom21 * durasi).toFixed(2));
         $scope.needcom31 = Number(($scope.needhourcom31 * durasi).toFixed(2));
         $scope.needcom41 = Number(($scope.needhourcom41 * durasi).toFixed(2));
         $scope.needcom51 = Number(($scope.needhourcom51 * durasi).toFixed(2));
         $scope.needcom61 = Number(($scope.needhourcom61 * durasi).toFixed(2));

         // NEED COM LAYER 2
         $scope.needcom12 = Number(($scope.needhourcom12 * durasi).toFixed(2));
         $scope.needcom22 = Number(($scope.needhourcom22 * durasi).toFixed(2));
         $scope.needcom32 = Number(($scope.needhourcom32 * durasi).toFixed(2));
         $scope.needcom42 = Number(($scope.needhourcom42 * durasi).toFixed(2));
         $scope.needcom52 = Number(($scope.needhourcom52 * durasi).toFixed(2));
         $scope.needcom62 = Number(($scope.needhourcom62 * durasi).toFixed(2));

         // NEED COM LAYER 3
         $scope.needcom13 = Number(($scope.needhourcom13 * durasi).toFixed(2));
         $scope.needcom23 = Number(($scope.needhourcom23 * durasi).toFixed(2));
         $scope.needcom33 = Number(($scope.needhourcom33 * durasi).toFixed(2));
         $scope.needcom43 = Number(($scope.needhourcom43 * durasi).toFixed(2));
         $scope.needcom53 = Number(($scope.needhourcom53 * durasi).toFixed(2));
         $scope.needcom63 = Number(($scope.needhourcom63 * durasi).toFixed(2));

         // NEED COM LAYER 4
         $scope.needcom14 = Number(($scope.needhourcom14 * durasi).toFixed(2));
         $scope.needcom24 = Number(($scope.needhourcom24 * durasi).toFixed(2));
         $scope.needcom34 = Number(($scope.needhourcom34 * durasi).toFixed(2));
         $scope.needcom44 = Number(($scope.needhourcom44 * durasi).toFixed(2));
         $scope.needcom54 = Number(($scope.needhourcom54 * durasi).toFixed(2));
         $scope.needcom64 = Number(($scope.needhourcom64 * durasi).toFixed(2));

         // $scope.needcom11 = $scope.needcom11.toFixed(2);
      };

      // ON CHANGE LAYER 1
      $scope.hitungLayer1 = function(){

         var durasi = 0;         
         durasi = (($scope.length/1000) * $scope.quantity / $scope.calspeed / 60);
         durasi = durasi + $scope.allowance;         
         console.log(durasi);

         var gearpump1 = 176;
         var gearpump2 = 46.3;
         var gearpump3 = 25.6;
         var gearpump4 = 25.6;
         
         var output = 0;
         if($scope.nomesin1==1){
            output = gearpump1 * $scope.meltpump1 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin1==2){
            output = gearpump2 * $scope.meltpump1 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin1==3){
            output = gearpump3 * $scope.meltpump1 * 1.19 * 60 /1000;
         }
         else if($scope.nomesin1==4){
            output = gearpump4 * $scope.meltpump1 * 1.19 * 60 /1000;
         }
         console.log(output);

         $scope.needhourcom11 = Number(($scope.percom11 / 100 * output).toFixed(2));
         $scope.needhourcom21 = Number(($scope.percom21 / 100 * output).toFixed(2));
         $scope.needhourcom31 = Number(($scope.percom31 / 100 * output).toFixed(2));
         $scope.needhourcom41 = Number(($scope.percom41 / 100 * output).toFixed(2));
         $scope.needhourcom51 = Number(($scope.percom51 / 100 * output).toFixed(2));
         $scope.needhourcom61 = Number(($scope.percom61 / 100 * output).toFixed(2));

         $scope.needcom11 = Number(($scope.needhourcom11 * durasi).toFixed(2));
         $scope.needcom21 = Number(($scope.needhourcom21 * durasi).toFixed(2));
         $scope.needcom31 = Number(($scope.needhourcom31 * durasi).toFixed(2));
         $scope.needcom41 = Number(($scope.needhourcom41 * durasi).toFixed(2));
         $scope.needcom51 = Number(($scope.needhourcom51 * durasi).toFixed(2));
         $scope.needcom61 = Number(($scope.needhourcom61 * durasi).toFixed(2));
      };

      // ON CHANGE LAYER 2
      $scope.hitungLayer2 = function(){

         var durasi = 0;         
         durasi = (($scope.length/1000) * $scope.quantity / $scope.calspeed / 60);
         durasi = durasi + $scope.allowance;         
         console.log(durasi);

         var gearpump1 = 176;
         var gearpump2 = 46.3;
         var gearpump3 = 25.6;
         var gearpump4 = 25.6;
         
         var output = 0;
         if($scope.nomesin2==1){
            output = gearpump1 * $scope.meltpump2 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin2==2){
            output = gearpump2 * $scope.meltpump2 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin2==3){
            output = gearpump3 * $scope.meltpump2 * 1.19 * 60 /1000;
         }
         else if($scope.nomesin2==4){
            output = gearpump4 * $scope.meltpump2 * 1.19 * 60 /1000;
         }
         console.log(output);

         $scope.needhourcom12 = Number(($scope.percom12 / 100 * output).toFixed(2));
         $scope.needhourcom22 = Number(($scope.percom22 / 100 * output).toFixed(2));
         $scope.needhourcom32 = Number(($scope.percom32 / 100 * output).toFixed(2));
         $scope.needhourcom42 = Number(($scope.percom42 / 100 * output).toFixed(2));
         $scope.needhourcom52 = Number(($scope.percom52 / 100 * output).toFixed(2));
         $scope.needhourcom62 = Number(($scope.percom62 / 100 * output).toFixed(2));

         $scope.needcom12 = Number(($scope.needhourcom12 * durasi).toFixed(2));
         $scope.needcom22 = Number(($scope.needhourcom22 * durasi).toFixed(2));
         $scope.needcom32 = Number(($scope.needhourcom32 * durasi).toFixed(2));
         $scope.needcom42 = Number(($scope.needhourcom42 * durasi).toFixed(2));
         $scope.needcom52 = Number(($scope.needhourcom52 * durasi).toFixed(2));
         $scope.needcom62 = Number(($scope.needhourcom62 * durasi).toFixed(2));
      };

      // ON CHANGE LAYER 3
      $scope.hitungLayer3 = function(){

         var durasi = 0;         
         durasi = (($scope.length/1000) * $scope.quantity / $scope.calspeed / 60);
         durasi = durasi + $scope.allowance;         
         console.log(durasi);

         var gearpump1 = 176;
         var gearpump2 = 46.3;
         var gearpump3 = 25.6;
         var gearpump4 = 25.6;
         
         var output = 0;
         if($scope.nomesin3==1){
            output = gearpump1 * $scope.meltpump3 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin3==2){
            output = gearpump2 * $scope.meltpump3 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin3==3){
            output = gearpump3 * $scope.meltpump3 * 1.19 * 60 /1000;
         }
         else if($scope.nomesin3==4){
            output = gearpump4 * $scope.meltpump3 * 1.19 * 60 /1000;
         }
         console.log(output);

         $scope.needhourcom13 = Number(($scope.percom13 / 100 * output).toFixed(2));
         $scope.needhourcom23 = Number(($scope.percom23 / 100 * output).toFixed(2));
         $scope.needhourcom33 = Number(($scope.percom33 / 100 * output).toFixed(2));
         $scope.needhourcom43 = Number(($scope.percom43 / 100 * output).toFixed(2));
         $scope.needhourcom53 = Number(($scope.percom53 / 100 * output).toFixed(2));
         $scope.needhourcom63 = Number(($scope.percom63 / 100 * output).toFixed(2));

         $scope.needcom13 = Number(($scope.needhourcom13 * durasi).toFixed(2));
         $scope.needcom23 = Number(($scope.needhourcom23 * durasi).toFixed(2));
         $scope.needcom33 = Number(($scope.needhourcom33 * durasi).toFixed(2));
         $scope.needcom43 = Number(($scope.needhourcom43 * durasi).toFixed(2));
         $scope.needcom53 = Number(($scope.needhourcom53 * durasi).toFixed(2));
         $scope.needcom63 = Number(($scope.needhourcom63 * durasi).toFixed(2));
      };

      // ON CHANGE LAYER 4
      $scope.hitungLayer4 = function(){

         var durasi = 0;      
         durasi = (($scope.length/1000) * $scope.quantity / $scope.calspeed / 60);
         durasi = durasi + $scope.allowance;         
         console.log(durasi);

         var gearpump1 = 176;
         var gearpump2 = 46.3;
         var gearpump3 = 25.6;
         var gearpump4 = 25.6;
         
         var output = 0;
         if($scope.nomesin4==1){
            output = gearpump1 * $scope.meltpump4 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin4==2){
            output = gearpump2 * $scope.meltpump4 * 1.11 * 60 /1000;
         }
         else if($scope.nomesin4==3){
            output = gearpump3 * $scope.meltpump4 * 1.19 * 60 /1000;
         }
         else if($scope.nomesin4==4){
            output = gearpump4 * $scope.meltpump4 * 1.19 * 60 /1000;
         }
         console.log(output);

         $scope.needhourcom14 = Number(($scope.percom14 / 100 * output).toFixed(2));
         $scope.needhourcom24 = Number(($scope.percom24 / 100 * output).toFixed(2));
         $scope.needhourcom34 = Number(($scope.percom34 / 100 * output).toFixed(2));
         $scope.needhourcom44 = Number(($scope.percom44 / 100 * output).toFixed(2));
         $scope.needhourcom54 = Number(($scope.percom54 / 100 * output).toFixed(2));
         $scope.needhourcom64 = Number(($scope.percom64 / 100 * output).toFixed(2));

         $scope.needcom14 = Number(($scope.needhourcom14 * durasi).toFixed(2));
         $scope.needcom24 = Number(($scope.needhourcom24 * durasi).toFixed(2));
         $scope.needcom34 = Number(($scope.needhourcom34 * durasi).toFixed(2));
         $scope.needcom44 = Number(($scope.needhourcom44 * durasi).toFixed(2));
         $scope.needcom54 = Number(($scope.needhourcom54 * durasi).toFixed(2));
         $scope.needcom64 = Number(($scope.needhourcom64 * durasi).toFixed(2));
      };

}]);




	// $scope.hitung = function(){
	// 	if($scope.data.detail[0].no_mesin == 4){
	// 		output = 176 * data.detail[0].melt_pump * 1.11 * 60 /1000
	// 	}
	// 	else if($scope.data.detail[0].no_mesin == 4){
	// 		output = 176 * data.detail[0].melt_pump * 1.11 * 60 /1000
	// 	}
	// 	else if($scope.data.detail[0].no_mesin == 4){
	// 		output = 176 * data.detail[0].melt_pump * 1.11 * 60 /1000
	// 	}
	// 	else if($scope.data.detail[0].no_mesin == 4){
	// 		output = 176 * data.detail[0].melt_pump * 1.11 * 60 /1000
	// 	}
	// 	else{
	// 		alert ("gagal");
	// 	}
		
	// 	console.log(output);
	// };


	// $scope.needs = function{
	// 	return $scope.val1 + $scope.val2
	// };
	// $scope.title='Belajar AngularJs';
	// $scope.book={
	// 	title : 'Belajar AngularJs Bersama Hersana',
	// 	author : 'Hersana',
	// 	price : 9700500,
	// 	pubdate : new Date('2018','7','12')
	// };
	
// contoh array untuk directive : ng-repeat
	// $scope.books=[
	// {
	// 	title : 'Belajar Angular',
	// 	author : 'Hersana',
	// 	price : 90000,
	// 	pubdate : new Date('2017','09','09'),
	// 	likes : 0
	// },
	// {
	// 	title : 'Belajar VueJs',
	// 	author : 'abdul',
	// 	price : 78000,
	// 	pubdate : new Date('2018','04','09'),
	// 	likes : 0
	// },
	// {
	// 	title : 'Belajar Contoh',
	// 	author : 'hanif',
	// 	price : 50000,
	// 	pubdate : new Date('2008','09','23'),
	// 	likes : 0
	// }
	// ];

// Directive :  ng-click
	// $scope.logToConsole=function(index){
	// 	var book=$scope.books[index];
	// 	console.log(book);
	// };
	
	// // menambah likes ketika clik log
	// $scope.likes=function(index){
	// 	$scope.books[index].likes+=1;
	// };

//Directive : ng-model
	// admin.controller('MainController',['$scope', function($scope){
	// 	$scope.title=10;

	// 	$scope.log=function(){
	// 		console.log($scope.title);
	// 	};
	// }]);
