<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('local')->deleteDirectory('noticias');
        Noticia::truncate();

        $post = new Noticia();
        $post->title = "PACIENTES CON DIABETES DE TIPO 2 TIENEN ANOMALÍAS IMPORTANTES EN EL ELECTROCARDIOGRAMA";
        $post->url = str::slug("PACIENTES CON DIABETES DE TIPO 2 TIENEN ANOMALÍAS IMPORTANTES EN EL ELECTROCARDIOGRAMA", '-');
        $post->excerpt = "En un estudio, se observaron anomalías importantes en el electrocardiograma de 13% de más de 8.000 pacientes no seleccionados con diabetes de tipo 2, incluida prevalencia de 9% en el subgrupo de estos pacientes sin enfermedad cardiovascular identificada. Las anomalías electrocardiográficas menores fueron incluso más frecuentes";
        $post->body = "<p>En un estudio, se observaron anomalías importantes en el electrocardiograma de 13% de más de 8.000 pacientes no seleccionados con diabetes de tipo 2, incluida prevalencia de 9% en el subgrupo de estos pacientes sin enfermedad cardiovascular identificada. Las anomalías electrocardiográficas menores fueron incluso más frecuentes.</p>
        <p>Estas tasas de prevalencia fueron congruentes con hallazgos previos en pacientes con diabetes de tipo 2, pero el presente estudio es notable porque proporciona la descripción más exhaustiva de la prevalencia de anomalías en el electrocardiograma en personas con diabetes de tipo 2 y se utilizó una población no seleccionada y grande con mediciones exhaustivas, incluyendo muchas sin antecedentes de enfermedad cardiovascular.</p>        
        <p>En el análisis también se identificaron varios parámetros que significativamente se vincularon con la presentación de una anomalía importante en el electrocardiograma, como hipertensión, sexo masculino, edad avanzada y niveles más altos de hemoglobina glucosilada.</p>
        <p>Las anomalías en el electrocardiograma en reposo podrían ser una herramienta útil para la detección sistemática de enfermedad cardiovascular en personas con diabetes de tipo 2, concluyeron los investigadores.</p>
        <p>Los pacientes con diabetes tienen prevalencia más alta de anomalías en el electrocardiograma debido a su mayor probabilidad de presentar hipertensión y otros factores de riesgo de enfermedad cardiovascular, y potencialmente tener enfermedad cardiovascular asintomática, por lo que estos hallazgos no son inesperados. Cuantos más factores de riesgo tenga un paciente para cardiopatía estructural, fibrilación auricular o ictus por fibrilación auricular, tanto más debe tener en cuenta un médico si es apropiado un electrocardiograma inicial y su seguimiento futuro.</p>
        <p>Pero los investigadores advierten, no considerar estos hallazgos como justificación para realizar sistemáticamente un examen de electrocardiograma en reposo en todo adulto con diabetes. Los pacientes con diabetes son muy heterogéneos, lo cual dificulta implementar una recomendación uniforme para la evaluación electrocardiográfica de pacientes con diabetes.</p>
        </p>La falta actual de recomendaciones a nivel general es aceptable, pues permite a pacientes y médicos discutir los problemas y decidir respecto a la utilidad de un electrocardiograma en su situación específica, señalan los investigadores. Pero también señalaron: Cuantos más factores de riesgo tenga un paciente con diabetes para cardiopatía estructural, fibrilación auricular o ictus por fibrilación auricular más debe considerar un médico si es adecuado un electrocardiograma inicial y el seguimiento futuro.</p>";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id = 1;
        $post->save();

        $post = new Noticia();
        $post->title = "AVANZA PLAN NACIONAL DE VACUNACIÓN EN CÓRDOBA";
        $post->url = str::slug("AVANZA PLAN NACIONAL DE VACUNACIÓN EN CÓRDOBA", '-');
        $post->excerpt = "Avanza en un alto porcentaje el Plan Nacional de Vacunación en el departamento de Córdoba, en donde las Empresas Sociales del Estado se han destacado por su comprometido trabajo en el cumplimiento de los objetivos las estrategias implementadas para llevar la vacuna contra el Covid – 19 a la población más necesitada.";
        $post->body = "<p>Avanza en un alto porcentaje el Plan Nacional de Vacunación en el departamento de Córdoba, en donde las Empresas Sociales del Estado se han destacado por su comprometido trabajo en el cumplimiento de los objetivos las estrategias implementadas para llevar la vacuna contra el Covid – 19 a la población más necesitada.</p>
        <p>Las diferentes  ESEs asociadas a Coodescor han demostrado su capacidad logística y compromiso con la Salud al implementar diferentes campañas que permiten dar a conocer a la población los cronogramas de vacunación para adultos mayores, adecuando sus instalaciones para la administración de esta y disponiendo de personal capacitado para realizar diferentes jornadas tanto en zonas urbanas  como rurales, descentralizando este proceso de inmunización para brindar una mayor cobertura y facilitar el acceso a la comunidad objeto.</p>
        <p>Coodescor resalta el importante trabajo de las ESEs asociadas para lograr el cumplimiento del Plan de Vacunación con el que se brinda a comunidades de alto riesgo la protección necesaria ante este virus que ha cobrado múltiples vidas en todo el mundo.</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 3;
        $post->save();

        $post = new Noticia();
        $post->title = "CONMEMORAMOS A LAS MUJERES DE LAS ESES ASOCIADAS EN SU DÍA";
        $post->url = str::slug("CONMEMORAMOS A LAS MUJERES DE LAS ESES ASOCIADAS EN SU DÍA", '-');
        $post->excerpt = "En un acto de reconocimiento y conmemoración la Cooperativa de Entidades de Salud de Córdoba obsequió a las mujeres de las ESEs asociadas activas, tortas para compartir y detalles para rifar en el Día Internacional de la Mujer, realizado todos los años en el mes de marzo.";
        $post->body = "<p>En un acto de reconocimiento y conmemoración la Cooperativa de Entidades de Salud de Córdoba obsequió a las mujeres de las ESEs asociadas activas, tortas para compartir y detalles para rifar en el Día Internacional de la Mujer, realizado todos los años en el mes de marzo.</p>
        <p>Estos detalles fueron enviados a cada una de las ESEs gracias a los recursos del Fondo de Recreación y Deportes con el cual Coodescor apoya la celebración de fechas especiales y la participación de funcionarios de las entidades asociadas en eventos o torneos deportivos, talleres de lúdica y actividades culturales que promuevan estilos de vida saludables.</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->save();
    }
}
