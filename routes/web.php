<?php

use Illuminate\Support\Facades\Auth;
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
//http://cms.test/
//Route::get('/', function () {
//     return view('welcome');
//
//
//});

//route::get('/Content',function (){
//   return "به صفحه تماس با ما";
//});
//
//route::get('/about',function (){
//   return "به صحفه درباره ما خوش امدید";
//});
//
//route::get('post/{id}/{name?}', function ($id,$name=null){
//    return 'شماره برابر است با' . " " .$id . "$name";
//
//});
//
////route::get('admin/posts/example',function (){
////    $url = route('admin');
////    return 'این ادرس برابر است با url و صفحه مدیرت' . $url;
////})->name('admin');
////
////route::get('admin/login',function (){
////    return"صفحه مدیریت";
////});
////route::redirect('admin/login','/admin/posts/example',301);
//
//route::prefix('user')->group(function (){
//    route::get('posts/example',function (){
//        return "گروه بندی ادمین";
//
//    });
//
//        route::get('login',function (){
//           return "صفحه لاگین";
//        });
//
//});


//Route::resource('/posts','PostsController');
//Route::get('/contact','PostsController@contact');
// Route::get('/posts/{id?}','PostsController@index');
// route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
//
//Route::get('/insert','PostsController@insert');
//Route::get('/select','PostsController@select');
//Route::get('/delete','PostsController@deletedPost');
//Route::get('/update','PostsController@updatePost');

//Route::get('/posts','PostsController@getAllPosts');
//Route::get('/save-post','PostsController@savePost');
//Route::get('/update-post','PostsController@newupdatePost');
//Route::get('/delete-post','PostsController@newdDeletePost');
//Route::get('/data-trash','PostsController@wrokWithTrash');
//Route::get('/restore-post','PostsController@restorePost');
//Route::get('/fore-delete-post','PostsController@forceDelete');

//eloquent relation ship

//one to one
//Route::get('user/{id}/post',function (){
//    $user_post = \App\User::find(1)->post->content;
//    return $user_post;
//});
//
//Route::get('post/{id}/user',function ($id){
//   $post_user = \App\Post::find($id)->user;
//   return $post_user;
//});

//one to many

//Route::get('user/{id}/posts',function ($id){
//    $user_post=  \App\User::find($id)->posts;
//    foreach ($user_post as $post){
//       echo $post->title;
//        echo "<br>";
//    }
//});

//many to many relationShip
//Route::get('user/{id}/roles',function ($id){
//   $user = \App\User::find($id);
//
//    foreach ($user->roles as $role) {
//        echo $role->name;
//        echo "<br/>";
//   }
//});
//
//Route::get('user/pivot', function (){
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role) {
//        echo $role->pivot->created_at;
//        echo "<br/>";
//    }
//});


// has Many Through
//Route::get('user/country',function (){
//    $country = \App\country::find(1);
//    foreach ($country->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});

// polymorphic RelashenShip

//Route::get('user/photo' ,function (){
//   $user = \App\User::find(1);
//   foreach ($user->photos as $photo){
//       echo $photo->path;
//       echo  "</br>";
//   }
//});
//
//Route::get('post/photo' ,function (){
//    $post = \App\Post::find(9);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//        echo  "</br>";
//    }
//});
//
//Route::get('photo/{id}/post',function ($id){
//    $photo = \App\Photo::find($id);
//    return $photo->imageable;
//
//});
//
//Route::get('post/tags',function (){
//    $post= \App\Post::find(9);
//    foreach ($post->tags as $tag){
//          echo $tag->name;
//          echo "</br>";
//    }
//});
//
//Route::get('video/tags',function (){
//    $video= \App\Video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//
//Route::get('tag/{id}/post',function ($id){
//    $tag= \App\Tag::find($id);
//
//    foreach ($tag->posts as $post) {
//        echo $post->title;
//        echo "</br>";
//    }
//});

// CRUD ->ralationShip one to many
    //create
//Route::get('/create', function (){
//   $user = \App\User::find(2);
//   $post= new \App\Post();
//   $post->title = 'post new title2';
//   $post->content = 'post new contete2';
//   $user-> posts()->save($post);
//});
//
//    //read
//Route::get('/read',function (){
//   $user = \App\User::find(1);
//    foreach ($user->posts as $post) {
//        echo $post->title;
//        echo "<br/>";
//   }
//
//
//});
//
//Route::get('/update',function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(10)->update(['title'=>"Update post new title2",'content'=>"Update post new Content2" ]);
//});
//
//Route::get('/del',function (){
//    $user = \App\User::find(1);
//    $user->posts()->whereId(10)->delete();
//});

// CRUD ->ralationShip Many to many

//Route::get('create',function (){
//   $user= \App\User::find(1);
//   $role = new \App\Role();
//   $role->name = "نویسنده";
//   $user->roles()->save($role);
//});
//
//Route::get('read',function (){
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role) {
//        echo $role->name;
//        echo "<br/>";
//    }
//});
//
//Route::get('update',function (){
//   $user=\App\User::find(1);
//   if ($user->has('roles')){
//       foreach ($user->roles   as $role) {
//           if ( $role->name =='نویسنده'){
//               $role->name='Auther';
//               $role->save();
//           }
//       }
//   }
//});
//
//Route::get('delete',function (){
//   $user = \App\User::find(1);
//    foreach ($user->roles as $role) {
//        if ($role->name == 'Auther'){ $role->delete();}
//   }
//});
//
//Route::get('detach',function (){
//    $user = \App\User::find(1);
//    $user ->roles()->detach();
//
//});
//
//Route::get('attach',function (){
//    $user = \App\User::find(1);
//    $user ->roles()->attach(1);
//
//});
//
//Route::get('sync',function (){
//    $user = \App\User::find(1);
//    $user ->roles()->sync([1,2,3]);
//
//});

//Crud Polymorphic RelationShip
//Route::get('create',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->create(['name'=>'new tag video']);
//});
//
//Route::get('read' , function (){
//   $video = \App\Video::find(1);
//    foreach ($video->tags as $item) {
//        echo $item->name;
//        echo '<br/>';
//   }
//});
//
//Route::get('update',function (){
//   $video=\App\Video::find(1);
////   if ($video->has('tags')){
////       foreach ($video->tags   as $tag) {
////           if ( $tag->name ='لاروال'){
////               $tag->name='laravel';
////               $tag->save();
////           }
////       }
////   }

//    $tag = $video->tags;
//    $newtag= $tag->where('id',1)->first();
//
//    $newtag->name ='لاراول';
//    $newtag->save();
//
//});
//Route::get('delete',function (){
//   $video = \App\Video::find(1);
//   $tag = $video->tags;
//   $deleteTag = $tag->where('id',1)->first();
//   $deleteTag->delete();
//
//
//});
//
//Route::get('detach',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->detach();
//});
//Route::get('attach',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->attach(2);
//});
//
//Route::get('sync',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->sync([3]);
//});

//
//Auth::routes();
//
 Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);
//Route::get('/home',['middleware'=>['auth','verified']],'HomwController@index')->name('home');
 //Route::get('/home','HomeController@index')->middleware('auth','verified')->name('home');

 Route::middleware(['auth','verified'])->group(function (){
     Route::get('/home','HomeController@index')->name('home');
     Route::resource('/posts','PostsController');
 });
Route::get('/');
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/',function (){
////    $user = Auth::user();
////    $id = Auth::id();
////
////    if (Auth::check()){
////        echo "Hello : " . $user->name;
////        echo "<br/>";
////        echo "ID : " . $id;
////    }else{
////        return redirect()->to('/home');
////    }
//
//    //Attempt
//    $email = "reza@gmail.com";
//    $pass = "123456789";
//    $auth = Auth::attempt(['email'=>$email , 'password'=>$pass]);
//    dd($auth);
//})  ;

//Route::get('/admin',function (){
//
//    echo "holo to admin page";
//
//})->middleware('isAdmin:مدیر');
