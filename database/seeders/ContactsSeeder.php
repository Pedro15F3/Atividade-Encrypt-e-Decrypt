<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contacts')->insert([
            'name'=>Crypt::encryptString('Pedro Henrique'),
            'email'=>Crypt::encryptString('pedro@gmail.com'),
            'telefone'=>Crypt::encryptString('(42) 999195638'),
            'data_nascimento'=>Crypt::encryptString('2004/01/02')
        ]);

        DB::table('contacts')->insert([
            'name'=>Crypt::encryptString('Gabriel'),
            'email'=>Crypt::encryptString('Gabriel@gmail.com'),
            'telefone'=>Crypt::encryptString('(42) 999999999'),
            'data_nascimento'=>Crypt::encryptString('2005/05/12')
        ]);
    }
}
