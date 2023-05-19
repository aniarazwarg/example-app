<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\funcionariosController;

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

//  quando chamar /teste abrir a função anonima, retorna o que foi escrito.
Route::get('/teste', function(){
    return "Teste 1  2  3 ...";
});

// devemos devolver uma view , entao:
Route::get('/home', function(){
    // será criada em resource>views com nome: home.blade.php;
    return view('home',['xuxu'=>'xuxa', 'idade'=>'83']);
     // apos a virgul : passar uma informação dentro da route, que vem de outra pagina : cria-se o array[ 'variavel'-> "informação", serão usadas no arquivo homepage.]
});
// qundo chamar a rota mostrar, rodar o funcionario controler e rodar a funçao mostrar dentro dele.
Route::get('/mostrar', [funcionariosController::class, 'mostrar']);

//nesse momento ao tentar usar nao se encontra a classe, pois é necessário importar, é feito acima com use.

Route::get('/inclusao', [funcionariosController::class, 'inclusao']);
Route::get('/detalhes', [funcionariosController::class, 'detalhes']);

