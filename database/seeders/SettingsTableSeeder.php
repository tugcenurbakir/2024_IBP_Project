<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2023-2024'],
            ['type' => 'system_title', 'description' => 'Karabuk University'],
            ['type' => 'system_name', 'description' => 'Karabuk University'],
            ['type' => 'term_ends', 'description' => 'TBD'],
            ['type' => 'term_begins', 'description' => 'TBD'],
            ['type' => 'phone', 'description' => 'TBD'],
            ['type' => 'address', 'description' => 'Karabuk, Turkey'],
            ['type' => 'system_email', 'description' => 'TBD'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => 'TBD'],
            ['type' => 'next_term_fees_pn', 'description' => 'TBD'],
            ['type' => 'next_term_fees_p', 'description' => 'TBD'],
            ['type' => 'next_term_fees_n', 'description' => 'TBD'],
            ['type' => 'next_term_fees_s', 'description' => 'TBD'],
            ['type' => 'next_term_fees_c', 'description' => 'TBD'],
        ];
        
        DB::table('settings')->insert($data);
        

    }
}
