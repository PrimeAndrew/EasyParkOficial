<?php

use Illuminate\Database\Seeder;
use App\Agenda;
class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0;$i<5;$i++) {
            $loc = new Agenda();
            $loc->date_mod_agenda = '2018-07-15 10:00';
            $loc->state_agenda = 'Libre';
            $loc->id_schedules_fk = $i+1;
            $loc->save();
        }

        for ($i=0;$i<5;$i++) {
            $loc = new Agenda();
            $loc->state_agenda = 'Ocupado';
            $loc->date_mod_agenda = '2018-07-15 15:00';
            $loc->id_schedules_fk = $i+1;
            $loc->save();
        }

        for ($i=0;$i<5;$i++) {
            $loc = new Agenda();
            $loc->state_agenda = 'Reservado';
            $loc->date_mod_agenda = '2018-07-15 17:15';
            $loc->id_schedules_fk = $i+1;
            $loc->save();
        }

        for ($i=0;$i<5;$i++) {
            $loc = new Agenda();
            $loc->state_agenda = 'Cancelado';
            $loc->date_mod_agenda = '2018-07-15 18:10';
            $loc->id_schedules_fk = $i+1;
            $loc->save();
        }
    }
}
