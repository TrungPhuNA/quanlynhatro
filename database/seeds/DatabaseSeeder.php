<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
        	['name'=>'Hải Châu','slug'=>'hai-chau'],
        	['name'=>'Thanh Khê','slug'=>'thanh-khe'],
        	['name'=>'Sơn Trà','slug'=>'son-tra'],
        	['name'=>'Ngũ Hành Sơn','slug'=>'ngu-hanh-son'],
        	['name'=>'Liên Chiểu','slug'=>'lien-chieu'],
        	['name'=>'Cẩm Lệ','slug'=>'cam-le']
        ]);
        $this->call(CategoriesSeeder::class);
    }
}
/**
* 
*/
class CategoriesSeeder extends Seeder
{
    public function run(){
        DB::table('categories')->insert([
            ['name'=>'Phòng trọ cho thuê','slug'=>'phong-tro-cho-thue'],
            ['name'=>'Ở ghép','slug'=>'o-ghep'],
            ['name'=>'Nhà nguyên căn','slug'=>'nha-nguyen-can'],
            ['name'=>'Chung cư','slug'=>'chung-cu']
        ]);

        DB::table('users')->insert([
           [
               'name'     => 'TrungPhuNA',
               'username' => 'trungphuna',
               'email'    => 'phupt.admin94@gmail.com',
               'password' => '$2y$10$5Q2ETzpM2Q0W3WcFaR1Fpef9dbtaIf9WCm2FSrTIlJS4qklJAW2bO',
               'phone'    => '0986420994',
               'right'    => 1,
           ]
        ]);
    }
}
