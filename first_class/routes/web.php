<?php


Route::get('/', function () {
    return view('welcome');
    //echo "about";
});


Route::get('/about.newthinks', function () {
    return view('about');
})->name('about.notunkichu');

Route::get('/contact','AboutController@Contact');

//Route::get('/contact', function () {
//    return view('pages.contact');
//});

Route::get(md5('learhunter'), 'AboutController@Contactt')->name('laracast.learhunter');

/*Route::get('test/', function () {
    return view('test');
    //echo "about";
});


Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/greeting', function () {      //8.1
    return 'Hello World';
});
*/


