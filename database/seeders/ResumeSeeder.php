<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume')->insert([
            'experiences' => '[{\"designation\":\"Frontend Developer\",\"company\":\"Creative-It Institute\",\"start_date\":\"2018-01-02 00:00:00\",\"end_date\":\"2018-01-02 23:59:59\"},{\"designation\":\"Frontend Developer\",\"company\":\"Ingenious-Hub Team\",\"start_date\":\"2019-04-08 00:00:00\",\"end_date\":\"2019-04-08 23:59:59\"},{\"designation\":\"Frontend Developer\",\"company\":\"Icon-Infotech Limited\",\"start_date\":\"2020-01-07 00:00:00\",\"end_date\":\"2020-01-07 23:59:59\"},{\"designation\":\"Frontend Developer\",\"company\":\"Xpeedstudio\",\"start_date\":\"2021-10-01 00:00:00\",\"end_date\":\"2021-10-01 23:59:59\"}]',
            'qualifications' => '[{\"certificate\":\"B.S.S Honourse At Economics\",\"institution\":\"Government Tolaram College, Narayanganj\",\"start_date\":\"2017-05-17 00:00:00\",\"end_date\":\"2017-05-17 23:59:59\"},{\"certificate\":\"Alim \\/ H.S.C - GPA :4.57\",\"institution\":\"Government Madrasha-E Alia, Dhaka\",\"start_date\":\"2018-06-05 00:00:00\",\"end_date\":\"2018-06-05 23:59:59\"},{\"certificate\":\"Dakhil \\/ S.S.C - GPA :450\",\"institution\":\"Islami Mission Kamil Madrasha\",\"start_date\":\"2020-11-10 00:00:00\",\"end_date\":\"2020-11-10 23:59:59\"},{\"certificate\":\"J.D.C \\/ J.S.C - GPA :467\",\"institution\":\"Badarpur Senior Alim Madrasha\",\"start_date\":\"2021-10-01 00:00:00\",\"end_date\":\"2021-10-01 23:59:59\"}]',
            'technologies' => '[{\"name\":\"Html\",\"avatar\":\"uploads\\/html.png\"},{\"name\":\"Css\",\"avatar\":\"uploads\\/css.png\"},{\"name\":\"Bootstrap\",\"avatar\":\"uploads\\/bootstrap.png\"},{\"name\":\"JavaScript\",\"avatar\":\"uploads\\/javascript.png\"},{\"name\":\"Github\",\"avatar\":\"uploads\\/github.png\"},{\"name\":\"VSCode\",\"avatar\":\"uploads\\/vscode.png\"}]',
        ]);
    }
}
