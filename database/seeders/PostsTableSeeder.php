<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();
        Category::truncate();
        User::truncate();

        $user = new User();
        $user->name = "Carlos Sibaja";
        $user->email = "contabilidad@coodescor.org.co";
        $user->email_verified_at = now();
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token = Str::random(10);
        $user->save();

        $category = new Category();
        $category->name = "Asociados";
        $category->save();

        $category = new Category();
        $category->name = "Comunidad";
        $category->save();

        $category = new Category();
        $category->name = "Salud";
        $category->save();

        $tag = new Tag();
        $tag->name = "Covid19";
        $tag->save();

        $tag = new Tag();
        $tag->name = "Vacunación";
        $tag->save();

        $tag = new Tag();
        $tag->name = "Coodescor";
        $tag->save();

        $tag = new Tag();
        $tag->name = "Sociedad";
        $tag->save();

        $post = new Post();
        $post->title = "COODESCOR REALIZÓ PRIMER ENCUENTRO DEL PROGRAMA LIDERANDO ANDO";
        $post->excerpt = "La Cooperativa de Entidades de Salud de Córdoba realizó el primer encuentro del año con los líderes del Programa Institucional Liderando Ando, con el que se busca asegurar una comunicación efectiva";
        $post->body = "<p>La Cooperativa de Entidades de Salud de Córdoba realizó el primer encuentro del año con los líderes del Programa Institucional Liderando Ando, con el que se busca asegurar una comunicación efectiva, constante y coordinada entre Coodescor y las entidades asociadas, a través de un funcionario Líder que facilite el flujo de información entre ambas partes.</p>
        <p>Durante el encuentro la gerente de la Cooperativa, doctora Mónica Montes, socializó con los participantes el informe de gestión social del año 2020, en donde se dieron a conocer las diferentes gestiones adelantadas gracias a los recursos de los fondos de Educación, Recreación y Deportes, Solidaridad y de programas institucionales como el de Seguimiento Farmacoterapéutico.</p>        
        <p>Posteriormente los Líderes del programa participaron en un espacio de formación sobre Liderazgo, Administración y Organización, dirigida por la Médico Bioenergética Zamira López, quien brindó herramientas y técnicas para desarrollar cada uno de los aspectos de manera eficaz en los diferentes escenarios de vida.</p>        
        <p>Finalmente, la Gerente de Coodescor, agradeció a cada uno de los Líderes por su disposición y apoyo en la consecución de los objetivos de la gestión social, adelantada por la Cooperativa para el beneficio de sus Entidades Asociadas.</p>";
        $post->published_at = Carbon::now()->addDays(1);
        $post->category_id = 1;
        $post->save();

        $post = new Post();
        $post->title = "ACESI SE PRONUNCIA ANTE CRISIS DE HOSPITALES EN COLOMBIA";
        $post->excerpt = "Por medio de un comunicado de prensa la Directora General de la Asociación Colombiana de Empresas Sociales del Estado y Hospitales Públicos ACESI, doctora Olga Lucia Zuluaga";
        $post->body = "<p>Por medio de un comunicado de prensa la Directora General de la Asociación Colombiana de Empresas Sociales del Estado y Hospitales Públicos ACESI, doctora Olga Lucia Zuluaga, manifestó la difícil situación que afrontan los hospitales del país ante el tercer pico de pandemia por Covid – 19, al cual se enfrentan sin los recursos necesarios<p/>.
        <p>La Directora Ejecutiva de ACESI denunció que “Ya no se trata solo de la enorme deuda multimillonaria que tienen las EPS, la cual supera los 6.5 billones de pesos y cada día crece más, ahora los hospitales públicos están contra las cuerdas, por cuenta de la tercera ola de contagio de Covid-19 y por el no giro de recursos para la mayoría de hospitales por conceptos de toma de muestras COVID, ni del anticipo para iniciar la vacunación”</p>
        <p>De igual manera expresó que “los dineros para la vacunación, que se supone iban a ser girados el 50% de forma anticipada, no se han recibido y hay serias dificultades para la facturación por este concepto, situación que retrasará aún más la llegada de recursos a pesar de tener personal contratado adicional para el proceso de vacunación, como fue el requerimiento del Ministerio de Salud y Protección Social.” </p>
        <p>Ante esta situación la doctora Olga Lucia Zuluaga hace un llamado urgente al gobierno nacional para agilizar la normatividad correspondiente para la pronta realización de los pagos por concepto de vacunación, así mismo resaltó la importancia de dar celeridad al acuerdo de punto final, para que los prestadores logren “alivianar sus carteras y con esto responder en forma oportuna a los grandes retos que exige la pandemia y la atención de las otras patologías”</p>";
        $post->published_at = Carbon::now()->addDays(2);
        $post->category_id = 3;
        $post->save();

        $post = new Post();
        $post->title = "CONCLUYÓ SATISFACTORIAMENTE JORNADA DE CAPACITACIÓN SOBRE FACTURACIÓN ELECTRÓNICA";
        $post->excerpt = "Con una activa participación se desarrollaron las jornadas de capacitación sobre Nómina Electrónica en el marco de la resolución 013 del 11 de febrero de 2021";
        $post->body = "<p>Con una activa participación se desarrollaron las jornadas de capacitación sobre Nómina Electrónica en el marco de la resolución 013 del 11 de febrero de 2021, y Nueva Normatividad para la Facturación en el Sector Salud en el marco de la Resolución 084 del 28 de enero de 2021 emitida por el Ministerio de Salud, realizadas los días 7 y 8 de marzo, respectivamente.</p>
        <p>Las capacitaciones fueron dirigidas por el ingeniero José Valbuena Benavides, Ingeniero de Sistemas, con más de 15 de años de experiencia al servicio de la DIAN, destacándose como gerente de Facturación Electrónica en la entidad, quien abordó los aspectos jurídicos, técnicos, operativos y la agenda de implementación de cada una de las resoluciones mencionadas en el ámbito de la nómina facturación electrónica.</p>
        <p>Coodescor continuará brindando las diferentes acciones de formación bajo la modalidad virtual, con el fin de prevenir los contagios de Covid 19 y cuidar la salud de los funcionarios de las ESEs asociadas, para contribuir al crecimiento y fortalecimiento de las mismas.</p>";
        $post->published_at = Carbon::now()->addDays(3);
        $post->category_id = 2;
        $post->save();

    }
}
