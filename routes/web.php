<?php

use App\Models\User;
use App\Models\Product;
use App\Models\Student;
use App\Models\LogActivity;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Database\Seeders\StudentSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use App\Models\Country;
use Illuminate\Http\Request as HttpRequest;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('give-permission-to-role', function() {
//     $role = Role::findOrFail(3); //author

//     $permission = Permission::findOrFail(1);
//     $permission1 = Permission::findOrFail(2);
//     $permission2 = Permission::findOrFail(3);

//     $role->givePermissionTo([$permission, $permission1, $permission2]);
// });

// Route::get('assign-role-user', function() {
//     $user = User::create([
//         'name' => 'user-jago',
//         'email' => 'userjago@gmail.com',
//         'password' => 'password'
//     ]);
//      $role = Role::findOrFail(1);
//      $role1 = Role::findOrFail(2);
//      $role2 = Role::findOrFail(3);

//      $user->assignRole([$role, $role1, $role2]);
// });

// Route::get('spatie', function() {
//     $user = User::findOrFail(1);
//     dd($user->getPermissionsViaRoles());
// }); 

// $user = User::findOrFail(3);
// Auth::login($user);
// // Auth::logout();

// Route::get('create-article', function() {
//     dd('fitur ini hanya bisa diakses oleh author atau moderator');
// })->middleware('role:author|moderator');

// Route::get('edit-article', function() {
//     dd('fitur ini hanya bisa diakses oleh editor atau moderator');
// })->middleware('role:editor|moderator');

// Route::get('delete-article', function() {
//     dd('fitur delete ini hanya bisa diakses oleh moderator');
// })->middleware('role:moderator');


// Route::get('add-product', function() {

//     try {
//         DB::beginTransaction();

//         Product::create([
//             'name' => 'Motor'
//         ]);
    
//         LogActivity::create([
//             'description' => 'mot diimport dari Jerman'
//         ]);

//         DB::commit(); 
//     } catch (\Throwable $e) {
//         throw $e;
//         DB::rollback();
//     }
// });

Route::get('/students', function() {
    $students = Student::all();
});

Route::get('/student-detail/{id}', function(Student $id) {
    dd($id);
});

Route::get('/student-edit/{id}', function(HttpRequest $request) {
    dd($request->id);
});

Route::get('/user', function() {
    $user = User::first();
    // dd(($user->name));
});

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/posts', [PostsController::class, 'index'])->name('user.post');
    Route::get('/post-detail/{id}', [PostsController::class, 'show']);
    // dd($users);

Route::get('/apa', function() {
    $students = Student::all();
    $fullName = $students->name;
    dd($students);
});

Route::get('/create-user', [UserController::class, 'store']);
Route::get('/videos', [VideoController::class, 'index']);
Route::get('/video-detail/{id}', [VideoController::class, 'show']);

Route::post('/video/import_excel', [VideoController::class, 'import_excel']);

Route::get('/country', function () {
    $country = Country::where('name', 'singapore')->first();

    // if ($country) {
    //     $country->update([
    //         'name' => 'Singapore',
    //         'capital_city' => 'Singapore',
    //         'currency' => 'Dollar SG'
    //     ]);
    // } else {
    //     Country::create([
    //         'name' => 'Singapore',
    //         'capital_city' => 'Singapore',
    //         'currency' => 'Dollar SG'
    //     ]);
    // }  
// ===========  METHOD UPSERTS ==============
        $country = Country::updateOrCreate(
            ['name' => 'Singapore'],
            [
                'name' => ' Japan',
                'capital_city' => 'Kyoto',
                'currency' => 'Yen'
            ]
        );
    
});

