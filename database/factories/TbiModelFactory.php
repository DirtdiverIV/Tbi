<?php

namespace Database\Factories;

use App\Models\tbiModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TbiModelFactory extends Factory
{
    protected $model = tbiModel::class;

    public function definition()
    {
        return [
            'nombre_real' => $this->faker->word,
            'descripcion_real' => $this->faker->paragraph,
            // Agrega otros campos según sea necesario...
        ];
    }
}
