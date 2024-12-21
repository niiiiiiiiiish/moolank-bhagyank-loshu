<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoshuNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loshu_numbers')->insert([
            [
                'number' => 1,
                'data' => 'Career, Success, Business, Communication',
                'element' => 'Water',
                'planet' => 'Sun',
                'merit' => 'Career',
                'direction' => 'North'
            ],
            [
                'number' => 2,
                'data' => 'Marriage, Love, Sensitivity, Intuition',
                'element' => 'Earth',
                'planet' => 'Moon',
                'merit' => 'Marriage',
                'direction' => 'South-West'
            ],
            [
                'number' => 3,
                'data' => 'Health, Planning, Family, Wisdom',
                'element' => 'Hard Wood',
                'planet' => 'Jupiter',
                'merit' => 'Health, Family',
                'direction' => 'East'
            ],
            [
                'number' => 4,
                'data' => 'Luck, Money, Discipline, Self-Control',
                'element' => 'Soft Wood',
                'planet' => 'Rahu',
                'merit' => 'Wealth',
                'direction' => 'South-East'
            ],
            [
                'number' => 5,
                'data' => 'Balance, Stability, Fortune, Mental Strength',
                'element' => 'Earth',
                'planet' => 'Mercury',
                'merit' => 'Work Energy',
                'direction' => 'Center'
            ],
            [
                'number' => 6,
                'data' => 'Friends, Travelling, New Beginnings',
                'element' => 'Hard Metal',
                'planet' => 'Venus',
                'merit' => 'Friends',
                'direction' => 'North-West'
            ],
            [
                'number' => 7,
                'data' => 'Children, Creativity, Entertainment, Fun',
                'element' => 'Soft Metal',
                'planet' => 'Ketu',
                'merit' => 'Children',
                'direction' => 'West'
            ],
            [
                'number' => 8,
                'data' => 'Knowledge, Motivation, Organization, Spirituality',
                'element' => 'Earth',
                'planet' => 'Saturn',
                'merit' => 'Knowledge',
                'direction' => 'North-East'
            ],
            [
                'number' => 9,
                'data' => 'Prosperity, Humanity, Social Life, Fame',
                'element' => 'Fire',
                'planet' => 'Mars',
                'merit' => 'Fame',
                'direction' => 'South'
            ],
        ]);
    }
}
