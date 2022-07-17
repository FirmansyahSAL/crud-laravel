<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "aksa",
        "email" => "syah.firman55@gmail.com",
        "image" => "sma.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Mia San Mia",
            "slug" => "Bayern-Munchen-FC",
            "author" => "FSLaksana",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam tempore sit reiciendis suscipit fuga non, cum culpa totam. Illo quisquam dolorem perferendis! Voluptatibus ex tempora aut accusantium odio placeat reprehenderit perferendis, illum veritatis labore magni consequuntur aperiam nisi voluptatum ad laudantium nam itaque nihil animi aliquam, sint excepturi sunt eveniet. Veniam pariatur vero vel? A reprehenderit quas ipsa inventore dolores libero id ad ut saepe, atque animi, delectus illum similique deserunt fuga quibusdam velit, pariatur voluptates culpa aut omnis eum?"
        ],
        [
            "title" => "You Never Walk Alone",
            "slug" => "Liverpool-FC",
            "author" => "aksana",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam tempore sit reiciendis suscipit fuga non, cum culpa totam. Illo quisquam dolorem perferendis! Voluptatibus ex tempora aut accusantium odio placeat reprehenderit perferendis, illum veritatis labore magni consequuntur aperiam nisi voluptatum ad laudantium nam itaque nihil animi aliquam, sint excepturi sunt eveniet. Veniam pariatur vero vel? A reprehenderit quas ipsa inventore dolores libero id ad ut saepe, atque animi, delectus illum similique deserunt fuga quibusdam velit, pariatur voluptates culpa aut omnis eum?"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});



// halaman single posts
Route::get('posts/{slug}', function ($slug) {
   

 
    return view('post', [
        "title" => " Single Posts",
        "post" => Post::find($slug)
    ]);
});

