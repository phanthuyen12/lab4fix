<?php
// database/factories/OrderFactory.php
namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            'buy_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
            'user_id' => User::factory(),
        ];
    }
}
