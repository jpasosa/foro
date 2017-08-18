<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;




class ExampleTest extends FeatureTestCase
{
    
    
    

    function test_basic_example()
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
