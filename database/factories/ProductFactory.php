<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str ;

class ProductFactory extends Factory
{
    /**
     * the name of the corresponding model
     * 
     * @var string
     */
    protected $model = \App\Models\Product::class ;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_customer' => $this->id_customer(),
            'Quantity' => $this->Quantity(),
            'product_name' => $this->product_name(),
            'price' => $this->price(),
            'type' => $this->type(),
            
        ];
    }
}
