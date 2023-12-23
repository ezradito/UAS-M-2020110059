<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FallbackController;

Route::resource('books', BooksController::class);
Route::resource('/transactions', TransactionController::class);


Route::get('/contact-us', [ContactController::class, 'index']);

Route::get('/', LandingController::class);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/', function () {
    return view('landing');
});

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/home', function () {
    return "<h1>Ini Home!</h1>";
});

Route::get('/about', function () {
    echo "<h1 style='text-align: center'><u>Tentang saya</u></h1>";
    echo "<p>Ini website aku. <i>Never stop learning</i>. <strong>Jangan lupa tidur</strong>.</p>";
});

Route::get('/salam/{nama}', function ($nama) {
    echo "<h2>Good day, $nama!</h2>";
});

Route::get('/produk/{nama?}/{qty?}', function ($nama = "N/A", $qty = 0) {
    echo "<p>Jual <strong>$nama</strong>. Stok saat ini: $qty</p>";
});

Route::get('users/{id?}', function ($id = -1) {
    return "Displaying user with ID: $id";
})->where('id', '[0-9]+');

Route::get('/hubungi-kami', function () {
     return view('contact') ;
 });

Route::get('/book', function () {
    return view('book') ;
});


Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Administrasi Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Administrasi Dosen</h1>";
    });
    Route::get('/staf', function () {
        echo "<h1>Administrasi Staf Kampus</h1>";
    });
});

Route::fallback([FallbackController::class, 'fallback'])->name('fallback');


Route::get('/about', function () {
    $title = 'About Us';
    $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
    $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';
    

    $sponsors = [
        [
            "name" => "Google",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png",
            "link" => "https://www.google.com"
        ],
        [
            "name" => "STMIK LIKMI",
            "image" => "https://likmi.ac.id/wp-content/uploads/2018/09/Logo200.png",
            "link" => "https://likmi.ac.id"
        ],
        [
            "name" => "KFC",
            "image" => "https://assets.stickpng.com/images/58429977a6515b1e0ad75ade.png",
            "link" => "https://kfcku.com/"
        ],
        [
            "name" => "Coca Cola",
            "image" => "https://companieslogo.com/img/orig/KO-b23a2a5e.png?t=1684129869",
            "link" => "https://www.coca-cola.com/"
        ],
        [
            "name" => "Youtube",
            "image" => "https://img.freepik.com/premium-vector/red-youtube-logo-social-media-logo_197792-1803.jpg?w=2000",
            "link" => "https://about.youtube//"
        ],
        [
            "name" => "Pepsi",
            "image" => "https://seeklogo.com/images/P/pepsi-logo-94D7DEF922-seeklogo.com.png",
            "link" => "https://www.pepsi.com/"
        ]
    ];
    return view('about', compact('title', 'description', 'button', 'sponsors'));

});



Route::get('/signup', [RegisterController::class, 'showRegistrationForm']);
Route::post('/login', [RegisterController::class, 'register']);

//Route::post('/signup', [AuthController::class, 'signup']);
//Route::post('/login', [AuthController::class, 'login']);
