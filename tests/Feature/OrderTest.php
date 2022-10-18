<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_will_store_order()
    {
        $response = $this->post('/order', [
            'image' => 'Example File',
            'tombstone_id' => 20,
            'name' => 'Mishuk Adhikari',
            'font_id' => 20,
            'text_color_id' => 30,
            'date_of_birth' => '10/11/1997',
            'death_date' => '10/15/2020',
            'icon_id' => '#fff',
            'price' => 200000,
        ]);

        $response->assertStatus(200);
    }
}
