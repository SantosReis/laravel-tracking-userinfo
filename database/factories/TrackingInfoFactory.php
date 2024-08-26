<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrackingInfo>
 */
class TrackingInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'internal_client' => 'CLHUB',
        //     'client' =>	'DS',
        //     'module' =>	'mh017',
        //     'language' => $this->faker->languageCode(),
        //     'url' => 'http://localhost',
        //     'width' => '1920',
        //     'height' =>	'1080',
        //     'browser' => 'Firefox',
        //     'browser_version' => '104.0.2',
        //     'java' => $this->faker->boolean(),
        //     'mobile' =>	$this->faker->boolean(),
        //     'os' =>	'Windows',
        //     'osversion' => '10',
        //     'cookies' => $this->faker->boolean(),
        //     'track' => '434c4855423b44533b6d653030323b64653b687474703a2f2f6c6f63616c686f73743b3431343b3839363b5361666172693b31342e312e323b66616c73653b747275653b694f533b31342e382e313b74727565'
        // ];

        return [
            'internal_client' => 'CLHUB',
            'client' =>	'DS',
            'module' =>	'mh017',
            'language' => 'fr',
            'url' => 'http://localhost',
            'width' => '1920',
            'height' =>	'1080',
            'browser' => 'Firefox',
            'browser_version' => '104.0.2',
            'java' => false,
            'mobile' =>	false,
            'os' =>	'Windows',
            'osversion' => '10',
            'cookies' => true,
            'track' => '434c4855423b44533b6d653030323b64653b687474703a2f2f6c6f63616c686f73743b3431343b3839363b5361666172693b31342e312e323b66616c73653b747275653b694f533b31342e382e313b74727565'
        ];
    }
}
