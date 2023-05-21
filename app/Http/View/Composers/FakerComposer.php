<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class FakerComposer
{
    public function fakeUsers()
    {
        $users = collect([
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
            [ 'name' => 'Yovan Yaune Enovore', 'gender' => 'male' ],
        ]);

        return $users->random(3)->map(function ($user) {
            return [
                'name' => $user['name'],
                'gender' => $user['gender'],
                'email' => strtolower(str_replace(' ', '', $user['name']) . '@left4code.com')
            ];
        });
    }

    public function FakeClientes()
    {
        $users = collect([
            [ 'name' => 'Johnny Depp', 'gender' => 'male' ],
            [ 'name' => 'Al Pacino', 'gender' => 'male' ],
            [ 'name' => 'Robert De Niro', 'gender' => 'male' ],
            [ 'name' => 'Kevin Spacey', 'gender' => 'male' ],
            [ 'name' => 'Denzel Washington', 'gender' => 'male' ],
            [ 'name' => 'Russell Crowe', 'gender' => 'male' ],
            [ 'name' => 'Brad Pitt', 'gender' => 'male' ],
            [ 'name' => 'Angelina Jolie', 'gender' => 'female' ],
            [ 'name' => 'Leonardo DiCaprio', 'gender' => 'male' ],
            [ 'name' => 'Tom Cruise', 'gender' => 'male' ],
            [ 'name' => 'John Travolta', 'gender' => 'male' ],
            [ 'name' => 'Arnold Schwarzenegger', 'gender' => 'male' ],
            [ 'name' => 'Sylvester Stallone', 'gender' => 'male' ],
            [ 'name' => 'Kate Winslet', 'gender' => 'female' ],
            [ 'name' => 'Christian Bale', 'gender' => 'male' ],
            [ 'name' => 'Morgan Freeman', 'gender' => 'male' ],
            [ 'name' => 'Keanu Reeves', 'gender' => 'male' ],
            [ 'name' => 'Nicolas Cage', 'gender' => 'male' ],
            [ 'name' => 'Hugh Jackman', 'gender' => 'male' ],
            [ 'name' => 'Edward Norton', 'gender' => 'male' ],
            [ 'name' => 'Bruce Willis', 'gender' => 'male' ],
            [ 'name' => 'Tom Hanks', 'gender' => 'male' ],
            [ 'name' => 'Charlize Theron', 'gender' => 'female' ],
            [ 'name' => 'Will Smith', 'gender' => 'male' ],
            [ 'name' => 'Sean Connery', 'gender' => 'male' ],
            [ 'name' => 'Keira Knightley', 'gender' => 'female' ],
            [ 'name' => 'Vin Diesel', 'gender' => 'male' ],
            [ 'name' => 'Matt Damon', 'gender' => 'male' ],
            [ 'name' => 'Richard Gere', 'gender' => 'male' ],
            [ 'name' => 'Catherine Zeta-Jones', 'gender' => 'female' ]
        ]);

        return $clientes->random(3)->map(function ($clientes) {
            return [
                'name' => $clientes['name'],
                'gender' => $clientes['gender'],
                'email' => strtolower(str_replace(' ', '', $clientes['name']) . '@left4code.com')
            ];
        });
    }

    public function fakePhotos()
    {
        $photos = [];
        for ($i = 0; $i < 15; $i++) {
            $photos[] = 'profile-' . rand(1, 15) . '.jpg';
        }
        return collect($photos)->random(10);
    }

    public function fakeImages()
    {
        $photos = [];
        for ($i = 0; $i < 15; $i++) {
            $photos[] = 'preview-' . rand(1, 15) . '.jpg';
        }
        return collect($photos)->random(10);
    }

    public function fakeDates()
    {
        $dates = [];
        for ($i = 0; $i < 5; $i++) {
            $dates[] = date("j F Y", mt_rand(1586584776897, 1672333200000) / 1000);
        }
        return collect($dates)->random(3);
    }

    public function fakeTimes()
    {
        $times = ['01:10 PM', '05:09 AM', '06:05 AM', '03:20 PM', '04:50 AM', '07:00 PM'];
        return collect($times)->random(3);
    }

    public function fakeFormattedTimes()
    {
        $times = collect([
            rand(10, 60) . ' seconds ago',
            rand(10, 60) . ' minutes ago',
            rand(10, 24) . ' hours ago',
            rand(10, 20) . ' days ago',
            rand(10, 12) . ' months ago'
        ]);

        return collect($times)->random(3);
    }

    public function fakeTotals()
    {
        return collect([
            rand(20, 220),
            rand(20, 120),
            rand(20, 50)
        ])->shuffle();
    }

    public function fakeTrueFalse()
    {
        return collect([0, 1, 1])->random(1);
    }

    public function fakeStocks()
    {
        return collect([
            rand(50, 220),
            rand(50, 120),
            rand(50, 50)
        ])->shuffle();
    }

    public function fakeProducts()
    {
        $products = collect([
            [ 'name' => 'Dell XPS 13', 'category' => 'PC & Laptop' ],
            [ 'name' => 'Apple MacBook Pro 13', 'category' => 'PC & Laptop' ],
            [ 'name' => 'Oppo Find X2 Pro', 'category' => 'Smartphone & Tablet' ],
            [ 'name' => 'Samsung Galaxy S20 Ultra', 'category' => 'Smartphone & Tablet' ],
            [ 'name' => 'Sony Master Series A9G', 'category' => 'Electronic' ],
            [ 'name' => 'Samsung Q90 QLED TV', 'category' => 'Electronic' ],
            [ 'name' => 'Nike Air Max 270', 'category' => 'Sport & Outdoor' ],
            [ 'name' => 'Nike Tanjun', 'category' => 'Sport & Outdoor' ],
            [ 'name' => 'Nikon Z6', 'category' => 'Photography' ],
            [ 'name' => 'Sony A7 III', 'category' => 'Photography' ]
        ]);

        return $products->shuffle();
    }

    public function fakeNews()
    {
        $news = collect([
            [
                'title' => 'Desktop publishing software like Aldus PageMaker',
                'super_short_content' => substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 30),
                'short_content' => substr('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 150),
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            [
                'title' => 'Dummy text of the printing and typesetting industry',
                'super_short_content' => substr('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, 30),
                'short_content' => substr('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, 150),
                'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
            ],
            [
                'title' => 'Popularised in the 1960s with the release of Letraset',
                'super_short_content' => substr('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 30),
                'short_content' => substr('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 150),
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'
            ],
            [
                'title' => '200 Latin words, combined with a handful of model sentences',
                'super_short_content' => substr('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 0, 50),
                'short_content' => substr('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 0, 150),
                'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'
            ]
        ]);

        return $news->shuffle();
    }

    public function fakeFiles()
    {
        $files = collect([
            [ 'file_name' => 'Celine Dion - Ashes.mp4', 'type' => 'MP4', 'size' => '20 MB' ],
            [ 'file_name' => 'Laravel 7', 'type' => 'Empty Folder', 'size' => '120 MB' ],
            [ 'file_name' => $this->fakeImages()->first(), 'type' => 'Image', 'size' => '1.2 MB' ],
            [ 'file_name' => 'Repository', 'type' => 'Folder', 'size' => '20 KB' ],
            [ 'file_name' => 'Resources.txt', 'type' => 'TXT', 'size' => '2.2 MB' ],
            [ 'file_name' => 'Routes.php', 'type' => 'PHP', 'size' => '1 KB' ],
            [ 'file_name' => 'Dota 2', 'type' => 'Folder', 'size' => '112 GB' ],
            [ 'file_name' => 'Documentation', 'type' => 'Empty Folder', 'size' => '4 MB' ],
            [ 'file_name' => $this->fakeImages()->first(), 'type' => 'Image', 'size' => '1.4 MB' ],
            [ 'file_name' => $this->fakeImages()->first(), 'type' => 'Image', 'size' => '1 MB' ]
        ]);

        return $files->shuffle();
    }

    public function fakeJobs()
    {
        $jobs = collect([
            'Software Engineer', 'Software Engineer', 'Software Engineer', 'Software Engineer'
        ]);

        return $jobs->shuffle();
    }

    public function fakeNotificationCount()
    {
        return rand(1, 7);
    }

    public function fakeFoods()
    {
        $foods = collect([
            [ 'name' => 'Producto 17', 'image' => 'gym-0.jpeg' ],
            [ 'name' => 'Producto 18', 'image' => 'gym-1.jpeg' ],
            [ 'name' => 'Producto 16', 'image' => 'gym-2.jpeg' ],
            [ 'name' => 'Producto 15', 'image' => 'gym-3.jpeg' ],
            [ 'name' => 'Producto 14', 'image' => 'gym-4.jpeg' ],
            [ 'name' => 'Producto13', 'image' => 'gym-5.jpeg' ],
            [ 'name' => 'Producto1', 'image' => 'gym-6.jpeg' ],
            [ 'name' => 'Producto 2', 'image' => 'gym-7.jpeg' ],
            [ 'name' => 'Producto 3', 'image' => 'gym-8.jpeg' ],
            [ 'name' => 'Producto 4', 'image' => 'gym-9.jpeg' ],
            [ 'name' => 'Producto 5', 'image' => 'gym-10.jpeg' ],
            [ 'name' => 'Producto 5', 'image' => 'gym-11.jpeg' ],
            [ 'name' => 'Producto 6', 'image' => 'gym-12.jpeg' ],
            [ 'name' => 'Producto 7', 'image' => 'gym-13.jpeg' ],
            [ 'name' => 'Producto 8', 'image' => 'gym-14.jpeg' ],
            [ 'name' => 'Producto 9', 'image' => 'gym-15.jpeg' ],
            [ 'name' => 'Producto 10', 'image' => 'gym-16.jpeg' ],
            [ 'name' => 'Producto 11', 'image' => 'gym-17.jpeg' ],
            [ 'name' => 'Producto 12', 'image' => 'gym-18.jpeg' ]
        ]);

        return $foods->shuffle();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $fakerData = [];
        for ($i = 0; $i < 20; $i++) {
            $fakerData[] = [
                'users' => $this->fakeUsers(),
                'photos' => $this->fakePhotos(),
                'images' => $this->fakeImages(),
                'dates' => $this->fakeDates(),
                'times' => $this->fakeTimes(),
                'formatted_times' => $this->fakeFormattedTimes(),
                'totals' => $this->fakeTotals(),
                'true_false' => $this->fakeTrueFalse(),
                'stocks' => $this->fakeStocks(),
                'products' => $this->fakeProducts(),
                'news' => $this->fakeNews(),
                'files' => $this->fakeFiles(),
                'jobs' => $this->fakeJobs(),
                'notification_count' => $this->fakeNotificationCount(),
                'foods' => $this->fakeFoods()
            ];
        }

        $view->with('fakers', $fakerData);
    }
}
