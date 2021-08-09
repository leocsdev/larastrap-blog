<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $users = [
            [
                'name' => 'Asdf',
                'email' => 'asdf@asdf.com',
                'password' => 'asdfasdf'
            ],
            [
                'name' => 'Qwer',
                'email' => 'qwer@qwer.com',
                'password' => 'qwerqwer'
            ]
        ];

        foreach($users as $user) {
            $new_user = new User();

            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->password = Hash::make($user['password']);

            $new_user->save();
        }

        $posts = [
            [
                'title' => "Lorem ipsum dolor sit amet",
                'body' => "Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim diam vulputate ut pharetra. Odio euismod lacinia at quis risus. Habitasse platea dictumst vestibulum rhoncus est. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. In cursus turpis massa tincidunt dui ut ornare lectus sit. Morbi non arcu risus quis varius quam quisque id. Tortor id aliquet lectus proin. Turpis massa tincidunt dui ut. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Aliquet nibh praesent tristique magna sit amet purus. Leo urna molestie at elementum eu facilisis sed. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Sed nisi lacus sed viverra tellus in hac habitasse. Pretium quam vulputate dignissim suspendisse in est ante in nibh. Aliquam etiam erat velit scelerisque in dictum.",
                'cover_image' => "https://images.pexels.com/photos/1194713/pexels-photo-1194713.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 1
            ],
            [
                'title' => "Sit amet aliquam id diam maecenas",
                'body' => "Lacus luctus accumsan tortor posuere. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Ipsum nunc aliquet bibendum enim facilisis. Arcu cursus euismod quis viverra nibh. Netus et malesuada fames ac turpis egestas maecenas. Nunc congue nisi vitae suscipit tellus. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Aenean pharetra magna ac placerat. Vitae congue eu consequat ac felis donec et odio pellentesque. Tellus at urna condimentum mattis pellentesque id. Porttitor lacus luctus accumsan tortor posuere. Sed viverra ipsum nunc aliquet bibendum enim facilisis. Risus quis varius quam quisque id diam vel quam. Diam ut venenatis tellus in metus vulputate. Sollicitudin aliquam ultrices sagittis orci.",
                'cover_image' => "https://images.pexels.com/photos/115655/pexels-photo-115655.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 2
            ],
            [
                'title' => "Elementum eu facilisis sed odio",
                'body' => "Nisl purus in mollis nunc sed id. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Elit at imperdiet dui accumsan sit amet nulla facilisi morbi. Et egestas quis ipsum suspendisse ultrices. Egestas pretium aenean pharetra magna ac. Orci ac auctor augue mauris augue neque gravida. Donec enim diam vulputate ut pharetra sit amet. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Ac placerat vestibulum lectus mauris ultrices eros. Eget sit amet tellus cras. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Penatibus et magnis dis parturient. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Aliquam etiam erat velit scelerisque. Mi bibendum neque egestas congue. Interdum varius sit amet mattis vulputate. Nisi porta lorem mollis aliquam ut porttitor leo. Sit amet venenatis urna cursus eget nunc scelerisque viverra mauris. Ornare massa eget egestas purus viverra accumsan in.",
                'cover_image' => "https://images.pexels.com/photos/3861972/pexels-photo-3861972.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 1
            ],
            [
                'title' => "Pretium vulputate sapien",
                'body' => "Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Cras fermentum odio eu feugiat pretium nibh. Ac turpis egestas sed tempus urna et. Dolor sit amet consectetur adipiscing. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Pellentesque elit eget gravida cum sociis. Eget mi proin sed libero enim. Semper quis lectus nulla at volutpat diam ut venenatis tellus. Nisi porta lorem mollis aliquam ut. Proin nibh nisl condimentum id venenatis a condimentum. At tempor commodo ullamcorper a lacus vestibulum sed arcu non. Consectetur lorem donec massa sapien faucibus et. Vitae suscipit tellus mauris a. Lectus arcu bibendum at varius vel pharetra vel turpis. Eget magna fermentum iaculis eu non. Augue ut lectus arcu bibendum at varius vel pharetra vel. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus. Aliquet nec ullamcorper sit amet risus nullam. Volutpat odio facilisis mauris sit amet massa.",
                'cover_image' => "https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 2
            ],
            [
                'title' => "Scelerisque purus semper eget duis",
                'body' => "Scelerisque purus semper eget duis. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Sagittis orci a scelerisque purus semper eget duis. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Ut eu sem integer vitae justo eget magna fermentum iaculis. Egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam. Urna porttitor rhoncus dolor purus non. Convallis tellus id interdum velit. Turpis in eu mi bibendum neque egestas congue quisque egestas. Ullamcorper sit amet risus nullam eget felis eget. Fames ac turpis egestas sed tempus urna et pharetra pharetra. Phasellus egestas tellus rutrum tellus. At risus viverra adipiscing at in. Mollis nunc sed id semper risus in. Quisque sagittis purus sit amet. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus.",
                'cover_image' => "https://images.pexels.com/photos/265125/pexels-photo-265125.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 1
            ],
            [
                'title' => "Aenean et tortor at risus viverra",
                'body' => "Aenean et tortor at risus viverra. Dignissim sodales ut eu sem integer. Elementum integer enim neque volutpat ac tincidunt vitae. Vitae ultricies leo integer malesuada nunc vel risus. Et tortor at risus viverra adipiscing at. Tortor aliquam nulla facilisi cras fermentum odio. Scelerisque fermentum dui faucibus in ornare quam viverra. In hac habitasse platea dictumst vestibulum rhoncus. Risus nullam eget felis eget nunc lobortis. Et pharetra pharetra massa massa. Sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Amet mauris commodo quis imperdiet massa tincidunt. Id semper risus in hendrerit.",
                'cover_image' => "https://images.pexels.com/photos/3183186/pexels-photo-3183186.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 2
            ],
            [
                'title' => "Convallis tellus id interdum velit laoreet",
                'body' => "Convallis tellus id interdum velit laoreet. Tristique senectus et netus et malesuada fames ac turpis egestas. Ut porttitor leo a diam sollicitudin tempor. Urna porttitor rhoncus dolor purus non enim praesent elementum. Elementum integer enim neque volutpat ac tincidunt vitae. Amet luctus venenatis lectus magna. Suscipit tellus mauris a diam maecenas. Amet mauris commodo quis imperdiet massa. Sagittis nisl rhoncus mattis rhoncus urna neque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Massa ultricies mi quis hendrerit. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Mauris a diam maecenas sed enim ut sem viverra aliquet. Odio euismod lacinia at quis risus. Venenatis urna cursus eget nunc scelerisque viverra mauris. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare.",
                'cover_image' => "https://images.pexels.com/photos/256219/pexels-photo-256219.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 1
            ],
            [
                'title' => "Phasellus vestibulum lorem sed risus",
                'body' => "Phasellus vestibulum lorem sed risus. Nec ultrices dui sapien eget mi proin sed. Tristique et egestas quis ipsum suspendisse ultrices. Egestas maecenas pharetra convallis posuere morbi leo urna. Enim diam vulputate ut pharetra sit amet aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada. Tristique risus nec feugiat in fermentum posuere urna nec tincidunt. Consectetur adipiscing elit duis tristique sollicitudin nibh. Adipiscing elit ut aliquam purus sit amet luctus venenatis lectus. Diam quam nulla porttitor massa id neque aliquam vestibulum. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Facilisis mauris sit amet massa vitae. Sed risus ultricies tristique nulla. Egestas purus viverra accumsan in nisl nisi scelerisque eu ultrices. Rhoncus dolor purus non enim praesent elementum. Posuere morbi leo urna molestie at. Urna duis convallis convallis tellus.",
                'cover_image' => "https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'user_id' => 2
            ]
        ];

        foreach($posts as $post) {
            $new_post = new Post();

            $new_post->title = $post['title'];
            $new_post->body = $post['body'];
            $new_post->cover_image = $post['cover_image'];
            $new_post->user_id = $post['user_id'];

            $new_post->save();
        }
    }
}
