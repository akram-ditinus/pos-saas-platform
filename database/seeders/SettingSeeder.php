<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Setting::insert([
            [
                'field_key'=>'site_title',
                'field_value'=>'POS System::Easy Restaurant Management',
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:s')
            ],
            [
                'field_key'=>'support_email',
                'field_value'=>'pos@ditinus.com',
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:s')
            ],
            [
                'field_key'=>'footer_info',
                'field_value'=>'All rights are reserved.',
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:s')
            ],
            [
                'field_key'=>'default_payment_gateway',
                'field_value'=>'Stripe',
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:s')
            ],
            [
                'field_key'=>'stripe_merchent_id',
                'field_value'=>'testing-merchent-id',
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:s')
            ],
            [
                'field_key'=>'stripe_secret',
                'field_value'=>'testing-secret-key',
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
