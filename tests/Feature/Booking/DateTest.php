<?php

namespace Tests\Feature\Booking;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Customer;
use App\RoomType;
use App\Room;

class DateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function canBookWhenStartDateIsNow()
    {
        $customer = factory(Customer::class)->create();
        $user = factory(User::class)->create();
        $room_type = factory(RoomType::class)->create();
        $room = factory(Room::class)->create(["room_type_id" => $room_type->id]);
        $payload = ["room_id" => $room->id, "customer_id" => $customer->id, "user_id" => $user->id, "start_date" => "2019-06-28", "end_date" = "2019-07-02"];
        /*$response = $this->actingAs($user)
                        ->post(route('book'), $payload);
    }
}
