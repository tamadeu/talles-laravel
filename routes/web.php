<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TechsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/new', [IndexController::class, 'new'])->name('new');

    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend');
Route::post('/frontend', [FrontendController::class, 'update'])->name('frontend.update');


Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::delete('/skills/{id}', [SkillsController::class, 'destroy'])->name('skills.destroy');
Route::get('/skills/create', [SkillsController::class, 'create'])->name('skills.create');
Route::post('/skills', [SkillsController::class, 'store'])->name('skills.store');


Route::get('/techs', [TechsController::class, 'index'])->name('techs');
Route::delete('/techs/{id}', [TechsController::class, 'destroy'])->name('techs.destroy');
Route::get('/techs/create', [TechsController::class, 'create'])->name('techs.create');
Route::post('/techs', [TechsController::class, 'store'])->name('techs.store');


Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::delete('/projects/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}', [ProjectsController::class, 'update'])->name('projects.update');

/*
Route::get('/insert', function() {
DB::table('projects')->insert([
    'name' => 'Project Name',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, aliquid! Itaque corrupti magnam fugiat mollitia labore magni saepe veritatis voluptatum alias fugit. Explicabo ducimus',
    'live_link' => '#',
    'code_link' => '#',
    'image' => '#',
]);
});
*/


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/lang/{language}', function ($language) {
    session(['locale' => $language]);
    return redirect()->back();
})->name('language.change');

require __DIR__.'/auth.php';
