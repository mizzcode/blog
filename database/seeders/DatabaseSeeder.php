<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Mizz',
        //     'email' => 'mizz@gmail.com',
        //     'password' => password_hash('Mizz', PASSWORD_BCRYPT),
        // ]);
        // User::create([
        //     'name' => 'Jani',
        //     'email' => 'jani@gmail.com',
        //     'password' => password_hash('Jani', PASSWORD_BCRYPT),
        // ]);
        // User::create([
        //     'name' => 'Naura',
        //     'email' => 'naura@gmail.com',
        //     'password' => password_hash('Naura', PASSWORD_BCRYPT),
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem eos, ipsum placeat labore recusandae, eligendi omnis non aspernatur temporibus veniam rem similique dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem eos, ipsum placeat labore recusandae, eligendi omnis non aspernatur temporibus veniam rem similique dignissimos exercitationem sit hic inventore incidunt ullam quis. Perspiciatis cumque natus optio pariatur quae accusamus vero vel nesciunt, voluptate fugit maxime, reiciendis, aperiam ipsam sint? Temporibus, nemo qui. lorem 20</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatem provident fuga dolorum beatae soluta numquam, iste at pariatur doloribus consectetur autem similique accusamus aperiam recusandae velit earum, sit veniam est temporibus totam illo, nulla quisquam? Quia soluta sit nisi! Aspernatur, dignissimos suscipit ut repellat eveniet exercitationem sed fugit iure quam, aliquam voluptate, rerum veritatis. Hic perspiciatis aliquam itaque incidunt voluptatem, officiis tempora accusantium repellat quo eum, ex animi eveniet minus nesciunt magnam nihil velit! Cumque voluptas tempore blanditiis cum aliquid. Neque odio, nam iusto excepturi iure hic inventore delectus nesciunt libero veritatis laudantium in doloribus quis incidunt sint. Consectetur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex pariatur omnis praesentium aut modi quas illo repudiandae in quibusdam maiores reprehenderit dolorem expedita ab ipsum est harum cumque, officiis necessitatibus, eos dignissimos veniam beatae quo. Repellat aliquid voluptate cumque molestias deserunt, ut doloremque eveniet repudiandae, neque suscipit quis, sint laborum odit. Corrupti rem labore ipsum amet commodi. Molestiae, error ad architecto dicta, nostrum atque aperiam fuga saepe, nulla maiores unde repellat minus nobis reprehenderit veritatis excepturi accusantium libero facilis sequi! Temporibus natus dolorum ducimus laboriosam quis aliquid veniam inventore alias obcaecati facere qui, illo sed blanditiis possimus! Alias, pariatur nam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem eos, ipsum placeat labore recusandae, eligendi omnis non aspernatur temporibus veniam rem similique dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem eos, ipsum placeat labore recusandae, eligendi omnis non aspernatur temporibus veniam rem similique dignissimos exercitationem sit hic inventore incidunt ullam quis. Perspiciatis cumque natus optio pariatur quae accusamus vero vel nesciunt, voluptate fugit maxime, reiciendis, aperiam ipsam sint? Temporibus, nemo qui. lorem 20</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatem provident fuga dolorum beatae soluta numquam, iste at pariatur doloribus consectetur autem similique accusamus aperiam recusandae velit earum, sit veniam est temporibus totam illo, nulla quisquam? Quia soluta sit nisi! Aspernatur, dignissimos suscipit ut repellat eveniet exercitationem sed fugit iure quam, aliquam voluptate, rerum veritatis. Hic perspiciatis aliquam itaque incidunt voluptatem, officiis tempora accusantium repellat quo eum, ex animi eveniet minus nesciunt magnam nihil velit! Cumque voluptas tempore blanditiis cum aliquid. Neque odio, nam iusto excepturi iure hic inventore delectus nesciunt libero veritatis laudantium in doloribus quis incidunt sint. Consectetur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex pariatur omnis praesentium aut modi quas illo repudiandae in quibusdam maiores reprehenderit dolorem expedita ab ipsum est harum cumque, officiis necessitatibus, eos dignissimos veniam beatae quo. Repellat aliquid voluptate cumque molestias deserunt, ut doloremque eveniet repudiandae, neque suscipit quis, sint laborum odit. Corrupti rem labore ipsum amet commodi. Molestiae, error ad architecto dicta, nostrum atque aperiam fuga saepe, nulla maiores unde repellat minus nobis reprehenderit veritatis excepturi accusantium libero facilis sequi! Temporibus natus dolorum ducimus laboriosam quis aliquid veniam inventore alias obcaecati facere qui, illo sed blanditiis possimus! Alias, pariatur nam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem eos, ipsum placeat labore recusandae, eligendi omnis non aspernatur temporibus veniam rem similique dignissimos',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem eos, ipsum placeat labore recusandae, eligendi omnis non aspernatur temporibus veniam rem similique dignissimos exercitationem sit hic inventore incidunt ullam quis. Perspiciatis cumque natus optio pariatur quae accusamus vero vel nesciunt, voluptate fugit maxime, reiciendis, aperiam ipsam sint? Temporibus, nemo qui. lorem 20</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatem provident fuga dolorum beatae soluta numquam, iste at pariatur doloribus consectetur autem similique accusamus aperiam recusandae velit earum, sit veniam est temporibus totam illo, nulla quisquam? Quia soluta sit nisi! Aspernatur, dignissimos suscipit ut repellat eveniet exercitationem sed fugit iure quam, aliquam voluptate, rerum veritatis. Hic perspiciatis aliquam itaque incidunt voluptatem, officiis tempora accusantium repellat quo eum, ex animi eveniet minus nesciunt magnam nihil velit! Cumque voluptas tempore blanditiis cum aliquid. Neque odio, nam iusto excepturi iure hic inventore delectus nesciunt libero veritatis laudantium in doloribus quis incidunt sint. Consectetur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex pariatur omnis praesentium aut modi quas illo repudiandae in quibusdam maiores reprehenderit dolorem expedita ab ipsum est harum cumque, officiis necessitatibus, eos dignissimos veniam beatae quo. Repellat aliquid voluptate cumque molestias deserunt, ut doloremque eveniet repudiandae, neque suscipit quis, sint laborum odit. Corrupti rem labore ipsum amet commodi. Molestiae, error ad architecto dicta, nostrum atque aperiam fuga saepe, nulla maiores unde repellat minus nobis reprehenderit veritatis excepturi accusantium libero facilis sequi! Temporibus natus dolorum ducimus laboriosam quis aliquid veniam inventore alias obcaecati facere qui, illo sed blanditiis possimus! Alias, pariatur nam.</p>',
        //     'category_id' => 3,
        //     'user_id' => 3,
        // ]);
        // User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(25)->create();
    }
}
