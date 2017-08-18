<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    
    
    use DatabaseTransactions;
    

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {



        $name_user = 'Duilio Palacios';


        $user = factory(\App\User::class)->create([
            'name' => $name_user,
            'email' => 'palacios@gmail.com',
            ]);


        $this->actingAs( $user, 'api' );


        $this->visit('api/user')
             ->see($name_user);
    }
}
