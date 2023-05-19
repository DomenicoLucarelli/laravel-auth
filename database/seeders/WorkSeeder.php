<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myWorks =[
            [
                'title'=>'Boolflix',
                'description'=>'Sito copia Netflix',
                'date'=> '2023-04-04',
                'git_url'=>'https://github.com/DomenicoLucarelli/vite-boolflix',
                'slug'=> '',

            ],
            [
                'title'=>'Boolzapp',
                'description'=>'Sito copia Whatsapp',
                'date'=> '2023-03-20',
                'git_url'=>'https://github.com/DomenicoLucarelli/vue-boolzapp',
                'slug'=> '',

            ]
        ];

        

        foreach($myWorks as $myWork){

            $myWork['slug']= Str::slug($myWork['title'], '-');

            $work = new Work();

            $work->title = $myWork['title'];
            $work->description = $myWork['description'];
            $work->date = $myWork['date'];
            $work->git_url = $myWork['git_url'];
            $work->slug = $myWork['slug'];

            $work->save();

        }
    }
}
