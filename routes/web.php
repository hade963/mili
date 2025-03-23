<?php

use App\Http\Controllers\ProfileController;
use App\Models\Page;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('profile/{id}', function ($id) {
    $page = Page::find($id);
    return view('welcome', ['page' => $page]);
});
Route::post('/', function (Request $request) {
    $validated = $request->validate([
        'phone_number' => 'required|min:10|max:15',
    ]);
    $person = new Person();
    $person->phone_number = $validated['phone_number'];
    $person->ip_address = $request->getClientIp();
    $person->save();
    return view("welcome");
});

Route::get('/dashboard', function () {
    $poeple = Person::orderBy('created_at', 'desc')->get();
    return view('dashboard', ['people' => $poeple]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pages', function () {
    $pages = Page::get();
    return view('pages', ['pages' => $pages]);
})->middleware(['auth', 'verified'])->name('pages');

Route::get('pages/create', function() { 
    return view('createpage');  
})->name("pages.create");
Route::post('pages/create', function(Request $request) {
    $validated = $request->validate([
        'page_name' =>'required',
        'page_image' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
    ]);
    $page = new Page();
    $page->page_name = $validated["page_name"];
    if($request->file('page_image')!= null  && $request->file('page_image')->isValid()) { 
        $file = $request->file('page_image');
        $path = $file->store('uploads', 'public');
        $page->page_image = $path;
    }
    $page->save();
    return redirect()->route('pages');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
