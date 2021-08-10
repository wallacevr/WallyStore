<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;
Use Carbon\Carbon;
class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'users';

    public static function listar(int $limite){
        $sql= self::select([
            "id",
            "name",
            "email",
            "password",
            "created_at",
            "loja",
            "lucro",
            "tipo"
        ])
        ->limite($limite);
        dd($sql->toSql());
    }

    public static function cadastrar(Request $request){
        DB::enableQueryLog();
        $sql =  self::insert([
            "name" =>$request->input('txtnome'),
            "email" =>$request->input('txtemail'),
            "password" => Hash::make($request->input('txtsenha')),
            "created_at" =>new Carbon(),
            "loja" =>$request->input('txtloja'),
            "tipo" =>$request->input('inputGroupSelect01'),
            "lucro" =>$request->input('txtlucro')
        ]);
       // dd($sql->toSql(),$request->all());
    }



}