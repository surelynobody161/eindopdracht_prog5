
use App\Http\Controllers\ArtsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::delete('/dashboard/art/{id}', [AdminController::class, 'deleteArt'])->name('admin.art.delete');
});

Route::get('/arts', [ArtsController::class, 'index'])->name('arts.index');
Route::post('/logout', function () {
Auth::logout();
return redirect()->route('arts.index');
})->name('logout');



// Route for viewing details of a specific art, restricted to authenticated users
Route::middleware('auth')->group(function () {
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::post('/user/profile/update', [UserController::class, 'updateProfile'])->name('user.profile.update');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::resource('/categories', CategoryController::class);
Route::get('/arts/{id}', [ArtsController::class, 'show'])->name('arts.show');
Route::middleware(['auth'])->group(function () {


Route::get('/', function () {
return view('welcome');
});

// About page route
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Require authentication routes
require __DIR__.'/auth.php';

