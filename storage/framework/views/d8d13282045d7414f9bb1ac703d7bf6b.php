<h1>FFFFFFFFFFFFF</h1>
<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
Route::get('/laravel-version', function () {
    return response()->json([
        'version' => Application::VERSION,
    ]);
});
?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/home.blade.php ENDPATH**/ ?>