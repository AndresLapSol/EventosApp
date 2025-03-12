<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    protected $model = Evento::class;

    public function definition()
    {
        $tipos = ['reunión', 'conferencia', 'taller', 'presentación', 'concierto'];
        
        return [
            'nombreEvento'  => $this->faker->sentence(3),
            'fechaInicio'   => $this->faker->date(),
            'fechaFin'      => $this->faker->date(),
            'tipo'          => $this->faker->randomElement($tipos),
            'participantes' => $this->faker->numberBetween(1, 15),
            'descripcion'   => $this->faker->text(200),
        ];
    }
}
