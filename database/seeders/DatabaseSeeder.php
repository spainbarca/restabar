<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Table;
use App\Models\MenuEntry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Paul',
            'email' => 'paul@example.com',
            'password' => bcrypt(123456),
            'role' => Role::Frontline,
        ]);

        User::factory()->create([
            'name' => 'Rudolf',
            'email' => 'rudolf@example.com',
            'password' => bcrypt(123456),
            'role' => Role::Kitchen,
        ]);

        Table::factory()->count(5)
            ->state(new Sequence(
                ['id' => '1', 'name' => 'Mesa 1'],
                ['id' => '2', 'name' => 'Mesa 2'],
                ['id' => '3', 'name' => 'Mesa 3'],
                ['id' => '4', 'name' => 'Mesa 4'],
                ['id' => '5', 'name' => 'Mesa 5'],
            ))
            ->create();

        MenuEntry::factory()->count(10)
            ->state(new Sequence(
                ['id' => '1', 'name' => 'Hamburguesa clásica', 'description' => '200g de carne, queso cheddar, lechuga, tomate, cebolla y salsa especial', 'price' => 550],
                ['id' => '2', 'name' => 'Hamburguesa BBQ', 'description' => '200g de carne, queso cheddar, cebolla caramelizada, tocino, y salsa BBQ', 'price' => 600],
                ['id' => '3', 'name' => 'Hamburguesa doble carne', 'description' => '400g de carne (doble medallón), queso cheddar doble, lechuga y tomate', 'price' => 700],
                ['id' => '4', 'name' => 'Hamburguesa vegetariana', 'description' => 'Hamburguesa de garbanzo, lechuga, tomate, cebolla, queso y guacamole', 'price' => 500],
                ['id' => '5', 'name' => 'Hamburguesa mexicana', 'description' => '200g de carne, jalapeños, queso cheddar, guacamole y pico de gallo', 'price' => 620],
                ['id' => '6', 'name' => 'Hamburguesa de pollo crispy', 'description' => 'Pechuga de pollo empanizada, lechuga, tomate, mayonesa y queso suizo', 'price' => 580],
                ['id' => '7', 'name' => 'Hamburguesa italiana', 'description' => '200g de carne, queso mozzarella, albahaca fresca, tomate asado y salsa pesto', 'price' => 650],
                ['id' => '8', 'name' => 'Hamburguesa hawaiana', 'description' => '200g de carne, queso cheddar, tocino, piña asada y salsa teriyaki', 'price' => 620],
                ['id' => '9', 'name' => 'Hamburguesa de pescado', 'description' => 'Filete de pescado empanizado, lechuga, tomate, cebolla y salsa tártara', 'price' => 600],
                ['id' => '10', 'name' => 'Hamburguesa picante', 'description' => '200g de carne, queso pepper jack, jalapeños, cebolla caramelizada y salsa chipotle', 'price' => 650],
            ))
            ->create();
    }
}
