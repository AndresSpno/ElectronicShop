<?php

use Illuminate\Database\Seeder;
use Tienda\Product;
use Faker\Factory as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
    	
          \DB::table('products')->insert(array(
		           'name' => 'Forro Samsung J2 2015 / J5 2017 / J7 Neo S4 S5 A3 A5 A',
		           'short' => 'Bs.300',
		           'body' => '-Goma acanalada. -Bordes reforzados para caídas frontales. -Acrilicos duro de colores metálicos. Disponible para: -Samsung J1 -Samsung J2 -Samsung J3 -Samsung J5 -Samsung J7 -Samsung A3 -Samsung A5 -Samsung A7 -Samsung E3 -Samsung E5 -Samsung E7',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));

		    \DB::table('products')->insert(array(
		           'name' =>'Laptop Lenovo V110-15isk Intel I3-6006u',
		           'short' => 'Bs.177.538',
		           'body' => 'Procesador Modelo de procesador:Intel Core i3-6006U Núcleos del procesador: 2 Velocidad del procesador: hasta 2.0 GHz Pantalla Tamaño de pantalla: 15.6" Resolución de pantalla:1366x768 HD Tecnología de pantalla:LED Acabado pantalla Brillo Memoria Memoria RAM: 4GB Tecnología de memoria: DDR4 Almacenamiento Capacidad de almacenamiento: 500 GB Tipo de almacenamiento: HDD Lector de tarjetas: SD (4 en 1) Tarjeta gráfica Modelo de tarjeta gráfica: Intel® HD Graphics 520 Tipo de gráfica: Integrada',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));

		    \DB::table('products')->insert(array(
		           'name' =>'Samsung Galaxy J7 Prime',
		           'short' => 'Bs.53.650',
		           'body' => 'SAMSUNG GALAXY J7 PRIME 32gb memoria interna Modelo: SM-J727T Pantalla 5.5¨ Memoria interna: 32 GB Memoria RAM: 2 GB Cámara Trasera: 8MP Cámara Frontal: 5MP Batería: 3300 mAh Android Operativo 7.0 NOUGAT Procesador: OCTA-CORE 1.6 GHZ',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')

		       ));

		    \DB::table('products')->insert(array(
		           'name' =>'Motorola Moto E4',
		           'short' => '31.500',
		           'body' => 'PARA TODAS LAS OPERADORAS , PANTALLA DE 5 PULGADAS , 16GB DE MEMORIA INTERNA , 2GB DE RAM, CAMARA DE 8MPX Y 5 MPX FRONTAL, BATERIA DE 2800mAh ANDROID 7.1.1 SENSOR DE HUELLAS Y RESISTENCIA AL AGUA',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')

		       ));

		    \DB::table('products')->insert(array(
		           'name' =>'Telefono Celular Huawei - Honor 5x',
		           'short' => '96.260,50',
		           'body' => 'GSM 850 / 900 / 1800 / 1900 (SIM 1 & SIM 2) - HSDPA 850 / 1700 / 1900 / 2100 - LTE bandas 2 / 4 / 5 / 11 /17 Pantalla 5.5", 1080 x 1920 pixels Procesador Snapdragon 615 1.5GHz 2GB RAM 16GB/32GB, microSD Cámara: 13 MP Batería: 3000 mAh OS: Android 5.1 (actualizable a 6.0) Perfil: 8.2 mm Peso: 158 g',
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')

		       ));
    	
    
    }
}
