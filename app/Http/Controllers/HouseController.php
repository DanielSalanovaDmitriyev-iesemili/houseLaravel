<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Location;
use App\Models\Comment;
use App\Models\UserPage;


class HouseController extends Controller
{
    //Se deberia repartir funciones en distintos controladores!
    public function index (){    //ni caso
        //$data = $this->data();
        return view('myhouse');
    }

    public function data (){ //ni caso
        $houses = House::all();      //Normal
        //$houses = House::paginate(); //con paginate en vez de all(), hariamos lo de paginación. y usando  {{$houses->links()}} en el documento blade
        return view('data', compact('houses'));
    }

    public function tuto (){ //nos traemos todas las casas de comprar ya que es el que hay por defecto
        $houses = House::where("hou_venta", "=", "comprar")->Paginate(2); /* Para paginaciones personalizadas 'php artisan vendor:publish --tag=laravel-pagination' 
        y seleccionamos donde pone {{ $house->links(...)}} wl nombre del archivo que queramos!*/
        return view('home', compact('houses'));
    }
    public function tuto_alquilar(){
        $houses = House::where("hou_venta", "=", "alquilar")->Paginate(2);
        return view('home', compact('houses'));
    }
    public function show ($id){ //enseñamos una casa en particular
        $house = House::where('hou_id','=',$id)->get();
        $location = Location::where('loc_id', '=', $house[0]->hou_loc_id)->get();
        $loc_description = $location[0]->loc_desc;
        $comments = $this->getCommentsByHouse($id);
        /*$houseExpandida = array( $house[0]->hou_title = 'dsda', $house[0]->hou_description = 'dsda');
        return $houseExpandida;*/
        return view('cursos.show', compact('house', 'loc_description', 'comments'));
    }

    public function getCommentsByHouse($id){ //traemos todos los comentarios de nuestra casa
        $comments = Comment::where('com_hou_id', '=', $id)->orderBy('com_date', 'desc')->get();
        return $comments;
    }

    public function login (){ //mostramos el login
        return view('cursos.login');
    }
    public function createUser(Request $request){ //creamos un usuario
        $user = new UserPage();
        $user->usr_name = $request->usr_r;
        $user->usr_pass = $request->pass_r;
        $user->save();
        return redirect()->route('login');
    }
    public function loginUser(Request $request){//comprobamos que el usuario logueado existe
        $name = $request->usr_l;
        $pass = $request->pass_l;
        $user = UserPage::where('usr_name', '=', $name)->where('usr_pass', '=', $pass)->get();
        if(strlen($user) > 4 ){
            session_start();
            $_SESSION['user'] = $user;
            //return $_SESSION['user'];
        }else{
            return "Usuario o contraseña no correctas";
        }
        //return redirect()->route('login', compact('user'));
        return redirect()->route('tuto');
    }

    public function logOut(){ //cerramos sesion
        session_start();
        unset($_SESSION['user']);
        return redirect()->route('tuto');

    }
    public function comment(Request $request, $id){ //comentamos y guardamos
        session_start();
        $hoy = getdate();
        $fecha = $hoy['year'] . "/" . $hoy['mon'] . "/" . $hoy['mday'];
        $comment = new Comment();
        $comment->com_hou_id = $id;
        $comment->com_desc = $request->com_desc;
        $comment->com_author = $_SESSION['user'][0]->usr_name;
        $comment->com_date = $fecha;
        $comment->save();
        return redirect()->back();
    }

    public function filter(Request $request){ // Faltaria de dinero y tiempo ya que precio tiene varchar y no int o double
        $houses = House::where('hou_viv', '=', $request->hou_viv)
        ->where('hou_inm' ,'=' , $request->hou_inm)->paginate(2);
        return view('home', compact('houses'));
       // return redirect()->route('tuto', compact('houses'));
    }

}
