<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::create([
      'name' => 'argie',
      'email' => 'argiebalbon9@gmail.com',
      'password' => bcrypt('argie12345'),
      'usertype' => 'admin',
      'email_verified_at' => now(),
    ]);

    $this->call([
      ClientSeeder::class,
    ]);

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
