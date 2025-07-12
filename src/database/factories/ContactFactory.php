<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->lastName . ' ' . $this->faker->firstName,
            'email' => $this->faker->safeEmail,
            'age' => $this->faker->numberBetween(18, 65),
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'interests' => [$this->faker->randomElement(['Webサイト制作', 'システム開発', 'WordPress運用', 'Laravel構築', 'SEO相談'])],
            'message' => $this->faker->realText(50),
        ];
    }
}
