<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{


    public function run()
    {
        // teleoperadores

        \DB::table('users')->insert(array(
            'name' => 'Fabian Gonzales',
            'email' => 'Fabian.gonzalez@gmail.com',
            'perfil' => '2',
            'estado' => 'Activo',
            'password' => \Hash::make('123456'),
            'campana' => '1',
            'turno'  =>'AM',
            'fecha_ingreso'  =>  '07-01-2016',
            'fecha_termino'  =>  '00-00-0000'

        ));
        \DB::table('users')->insert(array(
            'name' => 'Julissa Luna',
            'email' => 'Julissa@gmail.com',
            'perfil' => '2',
            'estado' => 'Activo',
            'password' => \Hash::make('123456'),
            'campana'  =>  '2',
            'turno'  =>  'AM',
            'fecha_ingreso' => '12-03-2017',
            'fecha_termino'  =>  '00-00-0000'
            

        ));
        \DB::table('users')->insert(array(
            'name' => 'Jessarela Montaner',
            'email' => 'Jessarela.Montaner@gmail.com',
            'perfil' => '2',
            'estado' => 'Activo',
            'password' => \Hash::make('123456'),
            'campana'  => '3',
            'turno'  =>  'AM',
            'fecha_ingreso'  =>  '02-03-2017',
            'fecha_termino'  =>  '00-00-0000'

        ));
        \DB::table('users')->insert(array(
            'name' => 'Macarena Valenzuela',
            'email' => 'Macarena.Valenzuela@gmail.com',
            'perfil' => '2',
            'estado' => 'Activo',
            'password' => \Hash::make('123456'),
            'campana' => '4',
            'turno'  =>  'AM',
            'fecha_ingreso'  =>  '01-02-2017',
            'fecha_termino'  =>  '00-00-0000'

        ));
        \DB::table('users')->insert(array(
            'name' => 'Patricio Manaut',
            'email' => 'Patricio.Manaut@gmail.com',
            'perfil' => '2',
            'estado' => 'Desvimculado',
            'password' => \Hash::make('123456'),
            'campana'  => '5',
            'turno'  =>  'PM',
            'fecha_ingreso'  =>  '15-02-2017',
            'fecha_termino'  =>  '25-05-2017'
        ));

        //supervisor
        \DB::table('users')->insert(array(
            'name' => 'Maria Fernanda',
            'email' => 'Maria.Fernanda@gmail.com',
            'perfil' => '3',
            'estado' => 'Activo',
            'password' => \Hash::make('123456'),
            'campana'  => '5',
            'turno'  =>  'PM',
            'fecha_ingreso'  =>  '10-02-2017',
            'fecha_termino'  =>  '22-04-2017'

        ));
    }
}