<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida cum sociis natoque penatibus. Consequat id porta nibh venenatis cras sed felis. Sit amet mattis vulputate enim nulla aliquet porttitor. Viverra aliquet eget sit amet tellus cras adipiscing. Metus dictum at tempor commodo ullamcorper a lacus. Lacinia quis vel eros donec ac odio tempor orci dapibus. Placerat in egestas erat imperdiet sed euismod nisi. Etiam sit amet nisl purus in mollis. Eget magna fermentum iaculis eu non diam. In ornare quam viverra orci sagittis eu. Ultrices gravida dictum fusce ut placerat orci. Dui sapien eget mi proin sed libero. Quam nulla porttitor massa id neque aliquam vestibulum morbi. Sit amet nisl suscipit adipiscing bibendum est. Egestas pretium aenean pharetra magna ac placerat. Elementum sagittis vitae et leo duis ut.

Consequat nisl vel pretium lectus quam. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Neque viverra justo nec ultrices dui. Faucibus a pellentesque sit amet porttitor eget. Ut morbi tincidunt augue interdum velit. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Tortor posuere ac ut consequat semper. Etiam tempor orci eu lobortis elementum. Sed tempus urna et pharetra. Ut placerat orci nulla pellentesque dignissim. Et ligula ullamcorper malesuada proin libero. In fermentum et sollicitudin ac orci phasellus.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida cum sociis natoque penatibus. Consequat id porta nibh venenatis cras sed felis. Sit amet mattis vulputate enim nulla aliquet porttitor. Viverra aliquet eget sit amet tellus cras adipiscing. Metus dictum at tempor commodo ullamcorper a lacus. Lacinia quis vel eros donec ac odio tempor orci dapibus. Placerat in egestas erat imperdiet sed euismod nisi. Etiam sit amet nisl purus in mollis. Eget magna fermentum iaculis eu non diam. In ornare quam viverra orci sagittis eu. Ultrices gravida dictum fusce ut placerat orci. Dui sapien eget mi proin sed libero. Quam nulla porttitor massa id neque aliquam vestibulum morbi. Sit amet nisl suscipit adipiscing bibendum est. Egestas pretium aenean pharetra magna ac placerat. Elementum sagittis vitae et leo duis ut.

Consequat nisl vel pretium lectus quam. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Neque viverra justo nec ultrices dui. Faucibus a pellentesque sit amet porttitor eget. Ut morbi tincidunt augue interdum velit. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Tortor posuere ac ut consequat semper. Etiam tempor orci eu lobortis elementum. Sed tempus urna et pharetra. Ut placerat orci nulla pellentesque dignissim. Et ligula ullamcorper malesuada proin libero. In fermentum et sollicitudin ac orci phasellus.</p>'
        ]);
    }
}
