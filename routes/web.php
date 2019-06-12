<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('/blog', 'BlogController@index')->name('blog.home');
Route::get('/blog/{slug}', 'BlogController@showPost')->name('blog.detail');

Route::get('/search', 'SearchController@index')->name('search');
Route::get('/tags/{tag}', 'PostController@showTaggedPosts');

// 文章管理路由
Route::get('/admin', function () {
    return redirect('/admin/post');
})->name('admin');
Route::middleware('auth')->namespace('Admin')->group(function () {
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);
    Route::get('admin/upload', 'UploadController@index');
    Route::post('admin/upload/file', 'UploadController@uploadFile');
    Route::delete('admin/upload/file', 'UploadController@deleteFile');
    Route::post('admin/upload/folder', 'UploadController@createFolder');
    Route::delete('admin/upload/folder', 'UploadController@deleteFolder');
});

Route::get('/notification', 'NotificationController@index')->name('notification');

// 个人设置
Route::get('/setting', 'User\SettingController@index')->name('setting');

// 登录退出注册
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@index')->name('register');

Route::get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');

//RSS
Route::get('rss', 'BlogController@rss');

// 
// Route::get('sitemap.xml', 'BlogController@siteMap');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


