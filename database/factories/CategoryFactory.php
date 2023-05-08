<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->word(20);

        return [
            'image' => 'categories/' . $this->faker->image('public/storage/categories', 640, 480, null, false), 
        ];
    }
}
