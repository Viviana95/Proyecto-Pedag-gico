<?php

namespace Tests\Feature;

use App\Models\Mean;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MeanTest extends TestCase
{
    use RefreshDatabase;
 
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** 
     * @test
     * @testdox  description
     */
       
     public function test_index()
    {
      $means = Mean::factory()->count(5)->create();      
      
      $response = $this->get('/means', ['means'=>$means]);
      
      $response ->assertStatus(200)
                ->assertViewIs('home');
      
    }
    
    public function test_create()
    {
      $response = $this->get('means/create');
      $response  //->assertStatus(200)
               ->assertViewIs('mean.create');
    }
    
    
    /* $mean=[
      'title' => "title",
      'lenguage'=> "lenguage",
      'format' => "format",
      'file'=> "file",
      'image'=>"image"
    ];*/
    
    
    
}
