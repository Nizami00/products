<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_and_store_products()
    {
        $this->followingRedirects();
        $response = $this->post(route('products.store'), [
            'name' => 'Example unicorn',
            'price' => 255 / 100, // as it is store in cents
            'description' => 'this is is buitiful unicorn',
            'size' => 'M'
        ]);


        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'Example unicorn',
            'price' => '255',
            'description' => 'this is is buitiful unicorn',
            'size' => 'M'
        ]);
    }

    public function test_update_product(): void
    {


        $product = Product::factory()->create([
            'name' => 'Example unicorn',
            'price' => 255 / 100,
            'description' => 'this is is buitiful unicorn',
            'size' => 'M'
        ]);

        $this->followingRedirects();

        $response = $this->put(route('products.update', $product), [
            'name' => 'Example unicorn',
            'price' => 255 / 100,
            'description' => 'this is new new UPDATE is buitiful unicorn',
            'size' => 'M'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('products', [
            'name' => 'Example unicorn',
            'price' => '255',
            'description' => 'this is new new UPDATE is buitiful unicorn',
            'size' => 'M'
        ]);
    }

    public function test_delete_product()
    {

        $product = Product::factory()->create();

        $this->assertDatabaseHas('products', [
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->description,
            'size' => $product->size,
        ]);

        $this->followingRedirects();

        $response = $this->delete(route('product.delete', $product));

        $response->assertStatus(200);

        $this->assertDatabaseMissing('products', [
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->description,
            'size' => $product->size,
        ]);
    }
}


