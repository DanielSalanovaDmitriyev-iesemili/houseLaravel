<?php

namespace App\Models;
// En caso de crearlo así, php artisan make:model House
//Este modelo House => houses (tabla)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = "houses"; 
}




//Como sacar todos los datos de nuestra tabla
/*
    php artisan make:model House
    php artisan tinker
    use App\Models\House
    $house = House::all();  <= Todos los datos de la tabla houses!!
*/
//Que queremos filtrar 
/*
    php artisan tinker
    use App\Models\House
    $house = House::where('hou_viv','chalet')->get();                              <= Todos con viv=chalet !!
    $house = House::where('hou_viv','chalet')->orderBy('hou_viv','desc')->get();   <= ordenado descendentemente!!
    $house = House::select('hou_id', 'hou_title')->get();                          <= Elegimos columnas
    $house = House::select('hou_id as id','hou_title')->take(2)->get();            <= Cambiado hou_id por id y cogemos solo 2
    $house = House::where('hou_id','>','2')->get();                                <= Pasa todos aquellos datos con id mayor a 2

    Todos los metodos son usables en una misma llamada, es decir se puede hacer una select con un where y un orderBy, siempre separados por ->
*/