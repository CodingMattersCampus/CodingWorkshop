<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;
use App\User;
use App\Customer;
use App\Room;
use App\RoomType;

final class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        // $this->call(UsersTableSeeder::class);

        $user = factory(User::class)->create();
        $room_type = factory(RoomType::class)->create();
        $room = factory(Room::class)->create(["room_type_id" => $room_type->id]);
        $customer = factory(Customer::class)->create();
    }
}
