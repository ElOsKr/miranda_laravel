<?php 

namespace App\Helpers;

class Amenities
{
    public static function getAmenitie(string $amenitie)
    {
        $roomAmenities = [
            "security" => "Smart Security",
            "team" => "Expert Team", 
            "support" => "24/7 online support",
            "key" => "Strong locker",
            "towels" => "Towels",
            "bed" => "Single Bed",
            "shower" => "Shower",
            "kitchen" => "Kitchen",
            "wifi" => "High Speed Wifi",
            "shop" => "Shop Near",
            "grocery" => "Grocery",
            "cleaning" => "Cleaning",
            "breakfast" => "Breakfast",
            "air" => "Air Conditioner",
        ];
        return $roomAmenities[$amenitie];
    }
}