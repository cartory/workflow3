<?php

use Illuminate\Database\Seeder;
use App\Form;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'user_id' => '21',
            'name' => 'Proceso_1',
            'visibility' => 'PUBLIC',
            'allows_edit' => '0',
            'identifier' => '21-LH729B38A9FHAG6FL96A',
            'form_builder_json' => '[{"type":"header","subtype":"h1","label":"Proceso 1"},{"type":"text","label":"Nombre","placeholder":"Ej. Elian Mauricio","className":"form-control","name":"text-1576262246631","subtype":"text"}]'
        ]);
        Form::create([
            'user_id' => '21',
            'name' => 'Vacaciones',
            'visibility' => 'PUBLIC',
            'allows_edit' => '0',
            'identifier' => '21-1G482DK1E7K77LG587B',
            'form_builder_json' => '[{"type":"header","subtype":"h1","label":"Proceso 1"},{"type":"text","label":"Nombre","placeholder":"Ej. Elian Mauricio","className":"form-control","name":"text-1576262246631","subtype":"text"}]'
        ]);
        Form::create([
            'user_id' => '21',
            'name' => 'Proceso_1',
            'visibility' => 'PUBLIC',
            'allows_edit' => '0',
            'identifier' => '21-JMGGC1G9D98J3155L12',
            'form_builder_json' => '[{"type":"header","subtype":"h1","label":"Proceso 1"},{"type":"text","label":"Nombre","placeholder":"Ej. Elian Mauricio","className":"form-control","name":"text-1576262246631","subtype":"text"}]'
        ]);
    }
}
