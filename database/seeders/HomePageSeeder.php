<?php

namespace Database\Seeders;
use App\Models\Client;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Exhibition;
use App\Models\MediaExhibition
;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Slider::create([
            'title_ar' => 'crazy VR',
            'title_en' => 'crazy VR',
            'desc_ar' => 'مرحبا بك',
            'desc_en' => 'welcome',
            'media' => '1.jpg',
            
        ]);
        Slider::create([
            'title_ar' => 'crazy VR',
            'title_en' => 'crazy VR',
            'desc_ar' => 'مرحبا بك',
            'desc_en' => 'welcome',
            'media' => '27.jpg',
            
        ]);
        Event::create([
            'name_ar' => 'ابداع',
            'name_en' => 'creativity',
            'desc_ar' => ' شركة حلول الفعاليات للتنظيم والمؤتمرات',
            'desc_en' => 'events solutions company for organizing and conferences',
            'media' => '16.jpg',
            'date'=>'2023-03-17'
        ]);
        Event::create([
            'name_ar' => 'حلول',
            'name_en' => 'solutions',
            'desc_ar' => ' شركة حلول الفعاليات للتنظيم والمؤتمرات',
            'desc_en' => 'events solutions company for organizing and conferences',
            'media' => '44.jpg',
            'date'=>'2023-03-17'
        ]);
        Event::create([
            'name_ar' => 'ابداع',
            'name_en' => 'creativity',
            'desc_ar' => ' شركة حلول الفعاليات للتنظيم والمؤتمرات',
            'desc_en' => 'events solutions company for organizing and conferences',
            'media' => '27.jpg',
            'date'=>'2023-03-17'
        ]);
        Event::create([
            'name_ar' => 'حلول',
            'name_en' => 'solutions',
            'desc_ar' => ' شركة حلول الفعاليات للتنظيم والمؤتمرات',
            'desc_en' => 'events solutions company for organizing and conferences',
            'media' => '32.jpg',
            'date'=>'2023-03-17'
        ]);
        Event::create([
            'name_ar' => 'ابداع',
            'name_en' => 'creativity',
            'desc_ar' => ' شركة حلول الفعاليات للتنظيم والمؤتمرات',
            'desc_en' => 'events solutions company for organizing and conferences',
            'media' => '17.jpg',
            'date'=>'2023-03-17'
        ]);
        Service::create([
            'title_ar' => ' خدماتنا التقتيه',
            'title_en' => 'Our technical services',
            'desc_ar' => '<div><strong>1</strong>- أحدث التقنيات <br> 
            <strong>2</strong> - أحدث الألعاب</div><div><strong>3</strong>-&nbsp; الأحداث الالعاب</div>',
            
            'desc_en' => '<div><strong>1</strong>- 
            The latest technology <br><strong>2</strong> 
            - The latest games <br><strong>3</strong> - The latest events</div>',
            'content_ar' => 'يتوفر عندنا احدث التقنيات',
            'content_en' => 'We have the latest technology',
            'media' => '17.jpg',
            
        ]);
        Service::create([
            'title_ar' => ' خدماتنا التقتيه',
            'title_en' => 'Our technical services',
            'desc_ar' => '<div><strong>1</strong>- أحدث التقنيات <br> 
            <strong>2</strong> - أحدث الألعاب</div><div><strong>3</strong>-&nbsp; الأحداث الالعاب</div>',
            
            'desc_en' => '<div><strong>1</strong>- 
            The latest technology <br><strong>2</strong> 
            - The latest games <br><strong>3</strong> - The latest events</div>',
            'content_ar' => 'يتوفر عندنا احدث التقنيات',
            'content_en' => 'We have the latest technology',
            'media' => '14.jpg',
        ]);
        Service::create([
            'title_ar' => 'الخدمات الترفيهية',
            'title_en' => 'Entertainment services',
            'desc_ar' => '<div><strong>1</strong>- أحدث التقنيات <br> 
            <strong>2</strong> - أحدث الألعاب</div><div><strong>3</strong>-&nbsp; الأحداث الالعاب</div>',
            
            'desc_en' => '<div><strong>1</strong>- 
            The latest technology <br><strong>2</strong> 
            - The latest games <br><strong>3</strong> - The latest events</div>',
            'content_ar' => 'يتوفر عندنا احدث الالعاب الترفهية بتقنية الواقع الافتراضي',
            'content_en' => 'Entertainment services with virtual reality technology',
            'media' => '50.jpg',
        ]);
        Client::create([
            'title_ar' => 'محمد',
            'title_en' => 'mohamed',
            'desc_ar' => ' يتوفر هنا احدث الالعاب بتقنية رائعه وهي تقنية الواقع الافتراضي ',
            'desc_en' => 'The latest games are available here with a wonderful technology, which is virtual reality technology',
            'media' => '9.jpg',
        ]);
        Client::create([
            'title_ar' => 'هاله',
            'title_en' => 'hala',
            'desc_ar' => ' يتوفر هنا احدث الالعاب بتقنية رائعه وهي تقنية الواقع الافتراضي ',
            'desc_en' => 'The latest games are available here with a wonderful technology, which is virtual reality technology',
            'media' => '16.jpg',
        ]);
        Partner::create([
            'title_ar' => 'فيس بوك',
            'title_en' => 'facebook',
            'link' => 'https://www.facebook.com/',
            'media' => '99.png',
        ]);
        Partner::create([
            'title_ar' => 'انستجرام',
            'title_en' => 'instagram',
            'link' => 'https://www.instagram.com/',
            'media' => '88.png',
        ]);
        Partner::create([
            'title_ar' => 'فيس بوك',
            'title_en' => 'facebook',
            'link' => 'https://www.facebook.com/',
            'media' => '99.png',
        ]);
        Partner::create([
            'title_ar' => 'انستجرام',
            'title_en' => 'instagram',
            'link' => 'https://www.instagram.com/',
            'media' => '88.png',
        ]);
        Exhibition::create([
            'name_ar' => ' انا سعودي',
            'name_en' => 'i am Saudi',
            'desc_ar' => ' هذا المعرض احد افضل المعارض في السعودية',
            'desc_en' => 'This exhibition is one of the best exhibitions in Saudi Arabia',
            'media' => '37.jpg',
        ]);
        Exhibition::create([
            'name_ar' => 'معرض اندلسي',
            'name_en' => 'Andalusian exhibition',
            'desc_ar' => ' هذا المعرض احد افضل المعارض في السعودية',
            'desc_en' => 'This exhibition is one of the best exhibitions in Saudi Arabia',
            'media' => '44.jpg',
        ]);
        MediaExhibition::create([
            'exhibition_id' => 1 ,
            'media' => '27.jpg',
        ]);
        MediaExhibition::create([
            'exhibition_id' => 1 ,
            'media' => '2.png',
        ]);
        MediaExhibition::create([
            'exhibition_id' => 1 ,
            'media' => '51.jpg',
        ]);
        MediaExhibition::create([
            'exhibition_id' => 2 ,
            'media' => '13.jpg',
        ]);
        MediaExhibition::create([
            'exhibition_id' => 2 ,
            'media' => '50.jpg',
        ]);
        MediaExhibition::create([
            'exhibition_id' => 2 ,
            'media' => '5.jpg',
        ]);
    }
    
}
