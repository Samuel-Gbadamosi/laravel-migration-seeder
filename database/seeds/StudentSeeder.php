<?php

use Illuminate\Database\Seeder;
use  App\Student;
use  Carbon\Carbon;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
          [
            'name' => 'pippo',
             'data_nascita' => '08/08/2020',
             'citta' => 'rome'
          ],
          [
            'name' => 'sara',
             'data_nascita' => '08/04/2000',
             'citta' => 'londra'
          ],
          [
            'name' => 'josh',
             'data_nascita' => '08/09/2001',
             'citta' => 'dublin'
          ]

        ];

        foreach ($students as $student ) {
          $newStudent = new Student();
          $newStudent->name = $student['name'];
          $newStudent->data_nascita = Carbon::createFromFormat('d/m/Y',   $student['data_nascita']);
          $newStudent->citta = $student['citta'];

          $newStudent->save();
        }
    }
}
