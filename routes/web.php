<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('posts', PostsController::class);

//Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('/post/{id}/{name}/{city}', [PostsController::class, 'show_post']);

// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::get('/about', function () {
//     return "About page";
// });

// Route::get('/contact', function () {
//     return "Contact page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number ". $id . " " . $name;
// });

// Route::get('/admin/posts/example', array('as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "this url is " .$url;
// }));

/*
|--------------------------------------------------------------------------
| RAW SQL
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, body) values(?,?)', ['PHP with Laravel', 'Laravel is the best thing which have happened.']);
// });

// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id=?', [1]);

//     foreach($results as $post){
//         return $post;
//     }
// });

// Route::get('/update', function(){
//     $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//     return $updated;
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){
//     $posts = Post::all();
//     foreach ($posts as $post){
//         return $post->title;
//     }
// });

// Route::get('/find', function(){
//     $post = Post::find(2);
//     return $post->title;
// });

// Route::get('/findwhere', function(){
//     $posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore', function(){
    // $posts = Post::findOrFail(1);
    // return $posts;

//     $posts = Post::where('users_count','<',50)->firstOrFail();
// });

// Route::get('/basicinsert', function(){
//     $post = new Post();
//     $post->title = "New ORM title";
//     $post->body = "ORM";
//     $post->save();
// });

// Route::get('/basicinsert', function(){
//     $post = Post::find(4);
//     $post->title = "New ORM title";
//     $post->body = "Cool ORM body";
//     $post->save();
// });

// Route::get('/create', function(){
//     Post::create(['title'=>'The create method 1','body'=>'Im learning 1']);
// });

// Route::get('/update', function(){
//     Post::where('id',2)->where('is_admin',0)->update(['title'=>'New title','body'=>'New body']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(8);
//     $post->delete();
// });

// Route::get('/delete', function(){
//     Post::destroy([4,5]);
//     Post::where('is_admin', true)->delete();
// });

// Route::get('/softdelete', function(){
//     Post::find(7)->delete();
// });

// Route::get('/readsoftdelete', function(){
    // $post = Post::withTrashed()->where('id',6)->get();
    // return $post;

//     $post = Post::onlyTrashed()->where('is_admin',0)->get();
//     return $post;
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('is_admin',0)->restore();
// });

// Route::get('/forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin',0)->forcedelete();
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIPS
|--------------------------------------------------------------------------
*/

// // 1-to-1 relationship
// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post->content;
// });

// // Inverse 1-to-1
// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

// // 1-to-Many relationship
// Route::get('/posts', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post ){
//         echo $post->title . ' <br>';
//     }
// });

// // Many-to-Many
// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id)->roles()->orderBy('id','desc')->get();
//     return $user
//     // foreach ($user->roles as $role){
//     //     echo $role->name;        
//     // }
// });

// Accessing intermediate pivot table
Route::get('/user/pivot', function(){
    $user = User::find(1);
    foreach ($user->roles as $role){
        return $role->pivot->created_at;
    }
});