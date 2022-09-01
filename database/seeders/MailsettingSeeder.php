<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mailsetting;

class MailsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mailsetting::create([
        //     'mail_transport'            =>'smtp',
        //     'mail_host'                 =>'smtp.mailtrap.io',
        //     'mail_port'                 =>'2525',
        //     'mail_username'             =>'03d8r71371e12en324',
        //     'mail_password'             =>'331asjd2d11dds1dsd',
        //     'mail_encryption'           =>'tls',
        //     'mail_from'                 => 'adnan.jabbar@example.com',
        // ]);

        Mailsetting::create([
            'mail_transport'            => env('MAIL_MAILER'),
            'mail_host'                 => env('MAIL_HOST'),
            'mail_port'                 => env('MAIL_PORT'),
            'mail_username'             => env('MAIL_USERNAME'),
            'mail_password'             => env('MAIL_PASSWORD'),
            'mail_encryption'           => env('MAIL_ENCRYPTION'),
            'mail_from'                 => env('MAIL_FROM_ADDRESS')
        ]);
    }
}
