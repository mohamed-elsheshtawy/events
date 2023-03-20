<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title_ar' => 'رؤيتنا',
            'title_en' => 'our vision',
            'desc_ar' => 'مؤسسه عالمية رائده في مجال صناعة الفاعليات الملهمة والمبتكرة',
            'desc_en' => 'A leading global organization in the field of inspiring and innovative events',
            'media' => '37.jpg',
            'type' => 'our vision',
        ]);
        Setting::create([
            'title_ar' => 'رسالتنا',
            'title_en' => 'our message',
            'desc_ar' => 'ابهار العالم بفعاليات ومؤتمرات وتصاميم مبتكره تثري حياة المجتمع وتجمع مابين المعرفة والترفية والتفاعل',
            'desc_en' => 'Impress the world with innovative events, conferences and designs that enrich the life of society and combine knowledge, entertainment and interaction.',
            'media' => '14.jpg',
            'type' => 'our message',
        ]);

        Section::create([
            'key' => 'desc',
            'value' => 'Impress the world with innovative events, conferences and designs that enrich the life of society and combine knowledge, entertainment and interaction.',
        ]);

        Section::create([
            'key' => 'title',
        'value' => 'of our business',
        ]);
        Section::create([
           
        'key' => 'address',
        'value' => 'cairo',
        ]);
        Section::create([
           'key' => 'phone',
        'value' => '012155555',
            ]);
            Section::create([
                'key' => 'email',
                'value' => 'mohamed@gmail.com',
                 ]);
                 Section::create([
                    'key' => 'website',
                    'value' => 'www.admin.com',
                     ]);
               
        
                     Section::create([
                        'key' => 'facebook',
                      'value' => 'https://www.facebook.com/',
                         ]);
                   
                         Section::create([
                            'key' => 'instagram',
                            'value' => 'https://www.instagram.com/',
                             ]);
                             Section::create([
                                'key' => 'twitter',
                                'value' => 'https://twitter.com/',
                                 ]);
                                 Section::create([
                                    'key' => 'linkedin',
                                    'value' => 'https://linkedin.com/',
                                     ]);
                                                   
                           
       
    }
}
