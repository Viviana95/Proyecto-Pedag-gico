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
     public function test_index()
    {
      $means = Mean::factory()->count(5)->create();      
      
      $response = $this->get('/means');
      
      $response ->assertStatus(200);
      
    }
    
    public function test_create()
    {
      $response = $this->get('means/create');
      $response  //->assertStatus(200)
               ->assertViewIs('mean.create');
    }
    
    
    /* $mean=[
      'title' => "title",
      'language'=> "language",
      'format' => "format",
      'file'=> "file",
      'image'=>"image"
    ];*/
    
    
    
}
