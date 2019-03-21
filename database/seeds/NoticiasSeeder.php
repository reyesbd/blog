<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            'titulo'=>'Sistemas Linux pueden ser infectados sólo insertando unidad USB',
            'cuerpo'=>'El procedimiento, detectado por el experto en seguridad informática Graham Cluley, recuerda el modus operandi del gusano Stuxnet.',
            'autor'=>'anonimo',
            'fecha'=>'2019-03-12',
            'imagen'=>'memoria-usb-800px.jpg',
            'categoria'=>'1'
        ]);  // Cierra insert

        DB::table('noticias')->insert([
            'titulo'=>'Detienen a ingenieros por intentar minar criptomonedas con supercomputadora',
            'cuerpo'=>'Un número por ahora desconocido de ingenieros rusos han sido detenidos luego de ser sorprendidos intentando utilizar una supercomputadora estatal, altamente secreta, para minar criptomonedas.',
            'autor'=>'anonimo',
            'fecha'=>'2019-03-12',
            'imagen'=>'Bitcoin-screen.jpg',
            'categoria'=>'2'
        ]);  // Cierra insert      
    }  // Cierra public run
}  // Cierra Clase Noticiasseeder
