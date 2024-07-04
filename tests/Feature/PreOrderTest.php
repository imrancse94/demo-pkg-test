<?php


use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PreOrderTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test the pre-order creation.
     *
     * @return void
     */
    public function test_pre_order_creation()
    {

        // Prepare the input data
        $inputData = [
            'name' => 'Imran',
            'email' => 'imrancse94@gmail.com',
            'phone'=>'1212121212',
            'product_id' => '1',
            // Add all necessary fields
        ];

        // Make a POST request to the store route
        $response = $this->postJson('/grocery/preorder/create', $inputData);

        // Assert the response status
        $response->assertStatus(200);

        // Assert the response JSON structure
        $response->assertJson([
            'message' => 'Pre-order created successfully'
        ]);

        // Assert the pre-order is stored in the database
        $this->assertDatabaseHas('pre_orders', $inputData);


    }
}
