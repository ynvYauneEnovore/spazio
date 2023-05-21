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
        for ($i = 0; $i < 14; $i++) {
            $photos[] = 'clases-' . rand(1, 15) . '.jpeg';
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
            [ 'name' => 'Sauna Individual', 'category' => 'Saunas' ],
            [ 'name' => 'Sauna Familiar', 'category' => 'Saunas' ],
            [ 'name' => 'Sauna de Vapor', 'category' => 'Saunas' ],
            [ 'name' => 'Máquina de Pesas', 'category' => 'Gimnasios' ],
            [ 'name' => 'Cinta de Correr', 'category' => 'Gimnasios' ],
            [ 'name' => 'Bicicleta Estática', 'category' => 'Gimnasios' ],
            [ 'name' => 'Pelota de Ejercicio', 'category' => 'Gimnasios' ],
            [ 'name' => 'Reloj Inteligente', 'category' => 'Accesorios' ],
            [ 'name' => 'Toalla Deportiva', 'category' => 'Accesorios' ],
            [ 'name' => 'Botella de Agua', 'category' => 'Accesorios' ]
        ]);


        return $products->shuffle();
    }

    public function fakeNews()
    {
        $news = collect([
            [
                'title' => 'Clases de ejercicio en el gimnasio',
                'super_short_content' => substr('Mantenerse activo y hacer ejercicio regularmente es esencial para mantener una buena salud física y mental. El gimnasio ofrece una amplia gama de opciones de entrenamiento, desde levantamiento de pesas y cardio hasta clases grupales y entrenamientos personalizados.', 0, 30),
                'short_content' => substr('Mantenerse activo y hacer ejercicio regularmente es esencial para mantener una buena salud física y mental. El gimnasio ofrece una amplia gama de opciones de entrenamiento, desde levantamiento de pesas y cardio hasta clases grupales y entrenamientos personalizados. Además, podrás relajarte y rejuvenecer en nuestra sauna y disfrutar de otros servicios como masajes y terapias de relajación.', 0, 150),
                'content' => 'Mantenerse activo y hacer ejercicio regularmente es esencial para mantener una buena salud física y mental. El gimnasio ofrece una amplia gama de opciones de entrenamiento, desde levantamiento de pesas y cardio hasta clases grupales y entrenamientos personalizados. Además, podrás relajarte y rejuvenecer en nuestra sauna y disfrutar de otros servicios como masajes y terapias de relajación. Nuestro objetivo es brindarte un espacio donde puedas alcanzar tus metas de fitness, mejorar tu bienestar general y disfrutar de un ambiente acogedor y motivador.'
            ],
            [
                'title' => 'Sauna para tu salud',
                'super_short_content' => substr('La sauna no solo es una experiencia relajante, sino que también ofrece beneficios para tu salud. Ayuda a eliminar toxinas del cuerpo, mejora la circulación sanguínea, alivia el estrés y promueve la relajación muscular. Además, pasar tiempo en la sauna puede contribuir a la pérdida de peso y mejorar la salud de la piel.', 0, 30),
                'short_content' => substr('La sauna no solo es una experiencia relajante, sino que también ofrece beneficios para tu salud. Ayuda a eliminar toxinas del cuerpo, mejora la circulación sanguínea, alivia el estrés y promueve la relajación muscular. Además, pasar tiempo en la sauna puede contribuir a la pérdida de peso y mejorar la salud de la piel. En nuestro gimnasio, ofrecemos una sauna moderna y confortable donde puedes disfrutar de todos estos beneficios y experimentar una sensación de bienestar total.', 0, 150),
                'content' => 'La sauna no solo es una experiencia relajante, sino que también ofrece beneficios para tu salud. Ayuda a eliminar toxinas del cuerpo, mejora la circulación sanguínea, alivia el estrés y promueve la relajación muscular. Además, pasar tiempo en la sauna puede contribuir a la pérdida de peso y mejorar la salud de la piel. En nuestro gimnasio, ofrecemos una sauna moderna y confortable donde puedes disfrutar de todos estos beneficios y experimentar una sensación de bienestar total. Nuestro equipo profesional está disponible para brindarte asesoramiento y recomendaciones sobre cómo aprovechar al máximo tu experiencia en la sauna.'
            ],
            [
                'title' => 'Clases grupales y entrenamientos',
                'super_short_content' => substr('En nuestro gimnasio, te ofrecemos una variedad de clases grupales y entrenamientos personalizados para ayudarte a alcanzar tus objetivos de fitness de manera efectiva y divertida. Nuestros instructores altamente capacitados te guiarán a través de rutinas de ejercicios dinámicas y motivadoras, adaptadas a tus necesidades y preferencias.', 0, 30),
                'short_content' => substr('En nuestro gimnasio, te ofrecemos una variedad de clases grupales y entrenamientos personalizados para ayudarte a alcanzar tus objetivos de fitness de manera efectiva y divertida. Nuestros instructores altamente capacitados te guiarán a través de rutinas de ejercicios dinámicas y motivadoras, adaptadas a tus necesidades y preferencias. Ya sea que estés interesado en clases de baile, yoga, pilates o entrenamiento de fuerza, tenemos algo para todos. Además, también ofrecemos servicios de entrenamiento personalizado, donde nuestros entrenadores diseñarán un programa específico para ti, brindándote el apoyo y la motivación necesarios para alcanzar tus metas.', 0, 150),
                'content' => 'En nuestro gimnasio, te ofrecemos una variedad de clases grupales y entrenamientos personalizados para ayudarte a alcanzar tus objetivos de fitness de manera efectiva y divertida. Nuestros instructores altamente capacitados te guiarán a través de rutinas de ejercicios dinámicas y motivadoras, adaptadas a tus necesidades y preferencias. Ya sea que estés interesado en clases de baile, yoga, pilates o entrenamiento de fuerza, tenemos algo para todos. Además, también ofrecemos servicios de entrenamiento personalizado, donde nuestros entrenadores diseñarán un programa específico para ti, brindándote el apoyo y la motivación necesarios para alcanzar tus metas. En nuestro gimnasio, nos esforzamos por crear un ambiente inclusivo y amigable, donde todos se sientan bienvenidos y motivados para alcanzar su máximo potencial.'
            ],
            [
                'title' => 'Servicios para tu bienestar',
                'super_short_content' => substr('Además de nuestro gimnasio y sauna, ofrecemos una variedad de servicios adicionales para mejorar tu bienestar. Nuestro equipo de masajistas profesionales te brindará tratamientos relajantes y terapias de recuperación muscular. También contamos con especialistas en nutrición que pueden ayudarte a desarrollar una dieta saludable y equilibrada. Estamos comprometidos con tu bienestar integral y nos aseguramos de ofrecerte los servicios necesarios para que te sientas bien contigo mismo.', 0, 50),
                'short_content' => substr('Además de nuestro gimnasio y sauna, ofrecemos una variedad de servicios adicionales para mejorar tu bienestar. Nuestro equipo de masajistas profesionales te brindará tratamientos relajantes y terapias de recuperación muscular. También contamos con especialistas en nutrición que pueden ayudarte a desarrollar una dieta saludable y equilibrada. Estamos comprometidos con tu bienestar integral y nos aseguramos de ofrecerte los servicios necesarios para que te sientas bien contigo mismo. Ven y descubre cómo nuestro gimnasio puede ayudarte a alcanzar un estilo de vida saludable y equilibrado.', 0, 150),
                'content' => 'Además de nuestro gimnasio y sauna, ofrecemos una variedad de servicios adicionales para mejorar tu bienestar. Nuestro equipo de masajistas profesionales te brindará tratamientos relajantes y terapias de recuperación muscular. También contamos con especialistas en nutrición que pueden ayudarte a desarrollar una dieta saludable y equilibrada. Estamos comprometidos con tu bienestar integral y nos aseguramos de ofrecerte los servicios necesarios para que te sientas bien contigo mismo. Ven y descubre cómo nuestro gimnasio puede ayudarte a alcanzar un estilo de vida saludable y equilibrado. Nuestro objetivo es brindarte un lugar donde puedas cuidar tu cuerpo y mente, y encontrar el equilibrio perfecto entre el ejercicio físico, la relajación y la alimentación adecuada.'
            ],
        ]);

        return $news->shuffle();
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
                'jobs' => $this->fakeJobs(),
                'notification_count' => $this->fakeNotificationCount(),
                'foods' => $this->fakeFoods()
            ];
        }

        $view->with('fakers', $fakerData);
    }
}
