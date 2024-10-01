<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tour::create([
            'title' => '🌍 Nairobi National Park Safari Adventure',
            'description' => 'Discover the heart of the Nairobi National Park with an unforgettable tour',
            'overview' => 'Our Nairobi National Park Safari Adventure is designed to give you an immersive experience of one of the most iconic wildlife destinations in the world. From the incredible annual migration to spotting the Big Five, this tour is a once-in-a-lifetime opportunity. 🦁🐘🦓',
            'highlights' => '["🚍 Full-day guided safari tour", "🦁 Witness the great migration and the Big Five", "🏕️ Accommodation in luxury safari camps", "🍽️ All meals included (traditional African cuisine)", "📸 Photography opportunities at every stop"]',
            'itinerary' => '["Day 1: Arrival at Nairobi National Park, evening game drive.", "Day 2: Full day game drive, visiting key wildlife areas.", "Day 3: Morning safari and return to base camp."]',
            'additional_information' => 'This tour is suitable for all ages, and families are welcome. Safari vehicles are equipped with comfortable seating, and there will be plenty of rest stops throughout the day. 🏞️ Please ensure to bring sunscreen, a hat, and a good camera. Binoculars are highly recommended for wildlife viewing. 🦒',
            'price' => '1000',
        ]);
    }
}
