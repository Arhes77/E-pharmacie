<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConseilController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\MessagePersController;
use App\Http\Controllers\ReponsePersController;
use App\Http\Controllers\MessageForumController;
use App\Http\Controllers\ReponseForumController;
use App\Http\controllers\StripePaymentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FactureController;

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

/*Route::get('/', function () {
    return view('acceuil.acceuil');
})->name('acceuil');*/

Route::get('/', function () {
    return view('welcome');
})->name('acceuil');


Route::get('/connexion', function(){
    return view('auth.connexion');
})->name('connexion');

Route::get('/compte', function(){
    return view('auth.register');
})->name('registration');

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/register',[RegisteredUserController::class, 'store'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//routes pour le personnel
Route::get('/personnel/index',[PersonnelController::class,'index'])->name("personnel.index");
Route::get('/personnel/change/{personnel}',[PersonnelController::class,'change'])->name("personnel.change");
Route::post('/personnel/update/{personnel}',[PersonnelController::class,'update'])->name("personnel.update");
Route::get('/personnel/show/{personnel}',[PersonnelController::class,'show'])->name("personnel.show");
Route::get('/personnel/edit/{personnel}',[PersonnelController::class,'edit'])->name("personnel.edit");
Route::delete('/personnel/destroy/{personnel}',[PersonnelController::class,'destroy'])->name('personnel.delete');

//routes pour les clients
Route::get('/client/index',[ClientController::class,'index'])->name("client.index");
Route::get('/client/create/{user}',[ClientController::class,'create'])->name("client.create");
Route::post('/client/update/{user}',[ClientController::class,'update'])->name("client.update");
Route::get('/client/show/{user}',[ClientController::class,'show'])->name("client.show");
Route::get('/client/edit/{user}',[ClientController::class,'edit'])->name("pclient.edit");
Route::delete('/client/destroy/{user}',[ClientController::class,'destroy'])->name('client.delete');

// route pour la moddification des users
Route::post('/user/store/{user}', [UserController::class, 'store'])->name('user.store');

//pour la fimille de produit
Route::get('/famille/index',[FamilleController::class,'create'])->name('famille.index');
Route::post('/famille/store',[FamilleController::class,'store'])->name('famille.store');
Route::get('/famille/show',[FamilleController::class,'index'])->name('famille.show');

//pour le categorie de produit
Route::get('/categorie/produits/{id}',[CategorieController::class,'show'])->name('categorie.show');
Route::get('/categorie/{id}',[CategorieController::class,'create'])->name('categorie.create');
Route::post('/categorie/store/{id_famille}',[CategorieController::class,'store'])->name('categorie.store');

// pour les produit
Route::get('/produit/create',[ProduitController::class,'create'])->name('produit.create');
Route::post('/produit/store',[ProduitController::class,'store'])->name('produit.store');
Route::get('/produit/index/{famille}',[ProduitController::class,'index'])->name('produit.index');
Route::get('/produit/details/{nom}',[ProduitController::class,'details'])->name('produit.details');

Route::post('/produit/update/{produit}',[ProduitController::class,'update'])->name('produit.update');
Route::get('/produit/edit/{produit}',[ProduitController::class,'edit'])->name('produit.edit');
Route::delete('/produit/delete/{produit}',[ProduitController::class,'destroy'])->name('produit.destroy');
Route::get('/produit/showsearch/{produit}',[ProduitController::class,'showresult'])->name('produit.showresult');


//routes pour les conseils
Route::get('/conseil/index',[ConseilController::class,'index'])->name('conseil.index');
Route::post('/conseil/store',[ConseilController::class,'store'])->name('conseil.store');
Route::get('/conseil/create',[ConseilController::class,'create'])->name('conseil.create');
Route::get('/conseil/show',[ConseilController::class,'show'])->name('conseil.show');
Route::delete('/conseil/destroy/{conseil}',[ConseilController::class,'destroy'])->name('conseil.delete');
Route::get('/conseil/edit/{conseil}',[ConseilController::class,'edit'])->name('conseil.edit');
Route::post('/conseil/update/{conseil}',[ConseilController::class,'update'])->name('conseil.update');

//routes pour messages forum
Route::get('/forum/index',[MessageForumController::class,'index'])->name('forum.index');
Route::post('/forum/store',[MessageForumController::class,'store'])->name('forum.store');
Route::get('/forum/show/{mesforum}',[MessageForumController::class,'show'])->name('forum.show');
Route::delete('/forum/delete/{mesforum}',[MessageForumController::class,'destroy'])->name('forum.delete');

//routes pour messages prive
Route::get('/message/index',[MessagePersController::class,'index'])->name('message.index');
Route::post('/message/store',[MessagePersController::class,'store'])->name('message.store');
Route::get('/message/show/{mespers}',[MessagePersController::class,'show'])->name('message.show');
Route::delete('/message/delete/{mespers}',[MessagePersController::class,'destroy'])->name('message.delete');

//route pour les reponses prive
Route::get('/reponsepers/create/{mespers}',[ReponsePersController::class,'create'])->name('reponsepers.create');
Route::post('/reponsepers/store/{mespers}',[ReponsePersController::class,'store'])->name('reponsepers.store');
Route::delete('/reponsepers/delete/{reppers}',[ReponsePersController::class,'destroy'])->name('reponsepers.delete');

//route pour les reponses du forum
Route::get('/reponseforum/create/{mesforum}',[ReponseForumController::class,'create'])->name('reponseforum.create');
Route::post('/reponseforum/store/{mesforum}',[ReponseForumController::class,'store'])->name('reponseforum.store');
Route::delete('/reponseforum/delete/{repforum}',[ReponseForumController::class,'destroy'])->name('reponseforum.delete');

// route pour les commentaires
Route::get('/commentaire/create', [CommentaireController::class, 'create'])->name('commentaire.create');
Route::get('/commentaire/index', [CommentaireController::class, 'index'])->name('commentaire.index');
Route::post('/commentaire/store', [CommentaireController::class, 'store'])->name('commentaire.store');
Route::delete('/commentaire/delete/{comments}', [CommentaireController::class, 'destroy'])->name('commentaire.delete');

//route pour la localisation
Route::get('/localisation', function () {
    return view('localisation.localisation');
});

//route pour la commande
Route::post('/commande/formullaire',[CommandeController::class,'index'])->name('commande.index');
    //afficher le formullaire de paiement
Route::post('/commande/show',[CommandeController::class,'show'])->name('commande.show');

//route pour le paiement
Route::controller(StripePaymentController::class)->group(function(){
    Route::post('stripe/test', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

//route pour la generation de la facture
Route::post('/facture', [FactureController::class, '__invoke'])->name('facture');

//route pour le chat dans le forum
Route::middleware('auth')->group(function () {
    Route::get('/chatForum', function () {
        return view('chat.forum');
    })->name('chatforum');
});

require __DIR__.'/auth.php';
