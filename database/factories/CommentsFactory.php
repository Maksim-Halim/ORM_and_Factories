<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comments;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comments::class;
    public function definition()
    {
        return array(
            'comment_content' => $this->faker->paragraph,
            'post_id' => $this->faker->numberBetween(1, 2),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()

        );
    }
}
