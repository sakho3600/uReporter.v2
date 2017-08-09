<?php

use App\User;
use App\Report;
use App\Opinion;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    //use DatabaseTransactions;

    /* public function testBasicExample()
     {
         $this->visit('/')->see('Welcome')->dontSee('Rails');
         $this->visit('/')->click('About Us')->seePageIs('/about_us');
         $this->visit('/')->click('Log In')->seePageIs('/login');
         $this->visit('/')->click('Register')->seePageIs('/register');
     }
 
     public function testLogin()
     {
         $this->visit('/login')
             ->type('tarik.toha@gmail.com', 'email_address')
             ->type('123456', 'password')
             ->press('Log In')
             ->seePageIs('/home');            
     }

    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Taylor Otwell', 'full_name')
            ->type('01712990099', 'contact_number')
            ->type('taylor@laravel.com', 'email_address')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->type('19954798526190181', 'national_id_number')
            ->type('1995-09-15', 'date_of_birth')
            ->select('Student', 'occupation')
            ->press('Register')
            ->seePageIs('/home')
            ->seeInDatabase('users', ['email_address' => 'taylor@laravel.com']);
    }


    public function testReportCanBeSubmittedAnonymously()
    {
        $absolutePathToFile = 'C:\Users\TOHA\Downloads\Compressed\Phoenix_x86_1_0_32_beta_zip.zip';

        $this->visit('/report/create')
            ->select('Crime', 'report_type')
            //->select('Other Crimes', 'report_subtype')
            ->type('2015-12-12 12:33:00', 'date_and_time')
            ->type('Khulna, Bangladesh', 'incident_location')
            ->type('I needed a passport for going abroad for higher studies. Although I correctly filled the application form and submitted necessary documents, the officer/staff of the office claimed my national ID was fake and demanded a bribe of Taka 3000 to process my application. I had no option but to pay this amount. Then when a police officer came to verify my address, he was asking for more documents. I had to pay him Tk 1000 as a bribe to get my work done. I want a solution to this type of corruption.', 'short_description')
            ->attach($absolutePathToFile, 'evidences')
            ->press('Submit')
            ->see('Success')
            ->seeInDatabase('reports', ['incident_location' => 'Khulna, Bangladesh']);
    }

    public function testReportCanBeSubmitted()
    {
        $absolutePathToFile = 'C:\Users\TOHA\Downloads\Compressed\Phoenix_x86_1_0_32_beta_zip.zip';
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/report/create')
            ->select('Crime', 'report_type')
            //->select('Other Crimes', 'report_subtype')
            ->type('2015-12-12 12:33:00', 'date_and_time')
            ->type('Khulna, Bangladesh', 'incident_location')
            ->type('I needed a passport for going abroad for higher studies. Although I correctly filled the application form and submitted necessary documents, the officer/staff of the office claimed my national ID was fake and demanded a bribe of Taka 3000 to process my application. I had no option but to pay this amount. Then when a police officer came to verify my address, he was asking for more documents. I had to pay him Tk 1000 as a bribe to get my work done. I want a solution to this type of corruption.', 'short_description')
            ->attach($absolutePathToFile, 'evidences')
            ->press('Submit')
            ->see('Success')
            ->seeInDatabase('reports', ['incident_location' => 'Khulna, Bangladesh']);
    }


    public function testMakeUsers()
    {
        $users = factory(User::class, 30)->create();
    }

    public function testMakeReport()
    {
        $reports = factory(Report::class, 10)->create();
    }

    */public function testMakeOpinions()
    {
        $opinions = factory(Opinion::class, 10)->create();
    }
/*
    public function testIndividualOpinion()
    {
        //$this->withoutMiddleware();
        
        
        $absolutePathToFile = 'C:\Users\TOHA\Downloads\Compressed\Phoenix_x86_1_0_32_beta_zip.zip';
        //$user = factory(User::class)->create();

        $this->visit('/report/31')
            ->type('I want a solution to this type of corruption', 'my_opinion')
            ->attach($absolutePathToFile, 'evidences')
            ->press('Submit')
            ->seeInDatabase('opinions', ['public_opinion' => 'I want a solution to this type of corruption']);
    }*/

}
