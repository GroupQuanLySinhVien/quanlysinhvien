<?php 
	Route::get('liststudent','sinhvienController@liststudent');
	Route::get('addstudent','sinhvienController@addstudent');
	Route::post('addstudent','sinhvienController@poststudent');
	Route::get('editstudent/{id}','sinhvienController@geditstudent');
	Route::post('editstudent/{id}','sinhvienController@peditstudent');
	Route::post('deletesinhvien','sinhvienController@xoasinhvien');

 ?>