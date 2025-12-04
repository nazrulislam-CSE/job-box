<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name'  => 'site_name',
                'value' => '',
            ],
            [
                'name'  => 'site_logo',
                'value' => '',
            ],
            [
                'name'  => 'site_favicon',
                'value' => '',
            ],
            [
                'name'  => 'site_footer_logo',
                'value' => '',
            ],
            [
                'name'  => 'site_contact_logo',
                'value' => '',
            ],
            [
                'name'  => 'site_company_logo',
                'value' => '',
            ],
            [
                'name'  => 'phone',
                'value' => '017',
            ],
            [
                'name'  => 'email',
                'value' => 'test@gmail.com',
            ],
            [
                'name'  => 'business_address',
                'value' => '',
            ],
            [
                'name'  => 'business_hours',
                'value' => '',
            ],
            [
                'name'  => 'copy_right',
                'value' => '',
            ],
            [
                'name'  => 'developed_by',
                'value' => '',
            ],
            [
                'name'  => 'developer_link',
                'value' => '',
            ],
            [
                'name'  => 'about',
                'value' => '',
            ],
            [
                'name' => 'facebook_url',
                'value' => 'https://www.facebook.com/',
            ],
            [
                'name'  => 'messenger_url',
                'value' => 'https://www.messenger.com/',
            ],
            [
                'name'  => 'twitter_url',
                'value' => 'https://www.twitter.com/',
            ],
            [
                'name'  => 'linkedin_url',
                'value' => 'https://www.linkedin.com/',
            ],
            [
                'name' => 'youtube_url',
                'value' => 'https://www.youtube.com/',
            ],
            [
                'name'  => 'instagram_url',
                'value' => 'https://www.instagram.com/',
            ],
            [
                'name'  => 'pinterest_url',
                'value' => 'https://www.pinterest.com/',
            ],
            [
                'name'  => 'whatsapp_url',
                'value' => 'https://www.whatsapp.com/',
            ],
            [
                'name'  => 'meta_title',
                'value' => '',
            ],
            [
                'name'  => 'meta_keyword',
                'value' => '',
            ],
            [
                'name'  => 'meta_description',
                'value' => '',
            ],
            // ... add entries for other types
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['name' => $setting['name']], $setting);
        }
    }
}