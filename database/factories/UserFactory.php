<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = User::class;

  /**
   * Define the model's default state.
   */
  public function definition(): array
  {
    return [
      'firstName' => $this->faker->firstName,
      'lastName' => $this->faker->lastName,
      'email' => $this->faker->safeEmail(),
      'password' => password_hash('123', PASSWORD_DEFAULT),
      'created_at' => $this->faker->dateTime(),
      'updated_at' => $this->faker->dateTime(),
    ];
  }
}
