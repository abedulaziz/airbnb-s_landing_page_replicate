<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // grabing some image URLs to let the faker pick randomly form
        $someImages = array(
            "https://a0.muscache.com/im/pictures/df74ace2-839b-403f-abe3-0d48214b256b.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/1238ae1e-760b-45e1-b059-ba47a2399d27.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/715086be-2b72-474c-81fa-425a4d9bbf83.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/09c7773c-3a92-40d0-bdf6-169b2cde4825.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/2d973fa8-45be-42a6-b81f-7b3e9dd77aa0.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/77398ad3-1595-486e-bf78-7448434a5220.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/06eb20ac-c327-4634-bb0e-81d4e5f63108.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/98d24918-b530-4a4c-8f32-947263c28084.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/b72f7cf1-50de-4293-a9e7-bb956b3d20ff.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/c6ca350e-dbb7-4f30-a7f4-3c6a953a876a.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/0e2f6674-0227-4d71-a575-8f4d2f2365d5.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/941f00c8-902e-45d5-bfa0-a298aaad15d2.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/00ab4e4e-502a-4874-bf65-eb463310ee4f.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/2d43a119-9ec6-47ae-a992-05440ce27edf.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/04286100-f28b-4e71-825f-aa1a55f178b4.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/fab6ff39-03ce-476e-b26d-be4d5b968dd4.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/887b3d72-d092-46ed-982f-5dd95fb90dac.jpg?im_w=720",
            "https://a0.muscache.com/im/pictures/71dc38d0-1355-4323-b289-b927021768b1.jpg?im_w=720"
        );

        return [
            "stay_id" => fake()->numberBetween(1, 20),
            "image1" => fake()->randomElement($someImages),
            "image2" => fake()->randomElement($someImages),
            "image3" => fake()->randomElement($someImages),
            "image4" => fake()->randomElement($someImages),
            "image5" => fake()->randomElement($someImages),
            "image6" => fake()->randomElement($someImages),
            "image7" => fake()->randomElement($someImages),
            "image8" => fake()->randomElement($someImages),
            "image9" => fake()->randomElement($someImages),
            "image10" => fake()->randomElement($someImages),
        ];
        $counter++;
    }
}
