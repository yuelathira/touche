 <?php

Route::get('/', function () {
  return redirect('/home');
});
Route::get('/home', 'UserController@home')->name('home');
Route::get('/article', 'UserController@article')->name('article');
Route::get('/article/{slug}', 'UserController@show_article')->name('article.show');
Route::get('/services', 'UserController@services')->name('services');
Route::get('/contact', 'UserController@contact')->name('contact');

Route::prefix('admin')->group(function () {

  Route::get('/', function () {
    return view('auth/login');
  });

  // handle route register
  Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
  })->name("register");

  Auth::routes();

  // // Route Dashboard
  // Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

  // // route categories
  // Route::get('/categories/{category}/restore', 'CategoryController@restore')->name('categories.restore');
  // Route::delete('/categories/{category}/delete-permanent', 'CategoryController@deletePermanent')->name('categories.delete-permanent');
  // Route::get('/ajax/categories/search', 'CategoryController@ajaxSearch');
  // Route::resource('categories', 'CategoryController')->middleware('auth');

  // route article
  Route::post('/articles/upload', 'ArticleController@upload')->name('articles.upload')->middleware('auth');
  Route::resource('/articles', 'ArticleController')->middleware('auth');

  // route destination
  //Route::post('/destinations/upload', 'DestinationController@upload')->name('destinations.upload')->middleware('auth');
  //Route::resource('/destinations', 'DestinationController')->middleware('auth');

  // Route about
  Route::get('/abouts', 'AboutController@index')->name('abouts.index')->middleware('auth');
  Route::get('/abouts/{about}/edit', 'AboutController@edit')->name('abouts.edit')->middleware('auth');
  Route::put('/abouts/{about}', 'AboutController@update')->name('abouts.update')->middleware('auth');
  // Route::resource('abouts', 'AboutController')->middleware('auth');

  // route gallery
  Route::post('/galleries/upload', 'GalleryController@upload')->name('galleries.upload')->middleware('auth');
  Route::resource('/galleries', 'GalleryController')->middleware('auth');
});
