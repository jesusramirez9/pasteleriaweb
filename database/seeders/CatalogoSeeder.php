<?php

namespace Database\Seeders;

use App\Models\Catalogue;

use Illuminate\Database\Seeder;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CATEGORIA POSTRES

        $catalogo = new Catalogue();
        $catalogo->titulo = "Enrollado de Chirimoya";
        $catalogo->categoria = "postres";
        $catalogo->descripcion = "Bizcochuelo de vainilla, relleno con tres capas, manjar, chantilly y pulpa de chirimoya, cubierto con fudge. Pídelo en su versión de 6 a 8 porciones.";
        $catalogo->imagen = "enrolladochirimoya.jpg";
        $catalogo->save();

        $catalogo1 = new Catalogue();
        $catalogo1->titulo = "Cheescake de zarzamoras";
        $catalogo1->categoria = "postres";
        $catalogo1->descripcion = "Una base de galleta rellena de una crema de queso y trozos de zarzamoras con el dulce clásico del cheescake, cubierto con mermelada y frutos.";
        $catalogo1->imagen = "cheescake.jpg";
        $catalogo1->save();

        $catalogo2 = new Catalogue();
        $catalogo2->titulo = "Crema Volteada";
        $catalogo2->categoria = "postres";
        $catalogo2->descripcion = "La más cremosa versión horneada con caramelo y un delicioso aroma a vainilla. Pídela desde 22cms";
        $catalogo2->imagen = "cremavolteada.jpg";
        $catalogo2->save();

        $catalogo3 = new Catalogue();
        $catalogo3->titulo = "Explosión de fresas";
        $catalogo3->categoria = "postres";
        $catalogo3->descripcion = "Bizcochuelo de vainilla embebido en un almíbar de fresas con licor, rellena con una capa de mermelada de fresas hecha en casa, una segunda capa de chantilly con fresas en trozos; cubierta en chantilly y decorada con fresas maceradas en jalea.";
        $catalogo3->imagen = "explosionfresa.jpg";
        $catalogo3->save();

        $catalogo4 = new Catalogue();
        $catalogo4->titulo = "Tarta de durazno";
        $catalogo4->categoria = "postres";
        $catalogo4->descripcion = "Una galleta horneada rellena con una crema pastelera de vainilla, cubierta con duraznos en jalea.";
        $catalogo4->imagen = "tartadurazno.jpg";
        $catalogo4->save();

        $catalogo5 = new Catalogue();
        $catalogo5->titulo = "Tartaleta de Fresas";
        $catalogo5->categoria = "postres";
        $catalogo5->descripcion = "Una galleta horneada rellena con una crema pastelera de vainilla, cubierta con fresas en jalea y decorada con copos de chantilly.";
        $catalogo5->imagen = "tartaletafresa.jpg";
        $catalogo5->save();

        $catalogo6 = new Catalogue();
        $catalogo6->titulo = "Torta húmeda de chocolate";
        $catalogo6->categoria = "postres";
        $catalogo6->descripcion = "Queque húmedo de chocolate embebido en un almíbar de chocolate, rellena con dos capas de fudge, cubierta con fudge. Pídela desde su versión mini (10 porciones).";
        $catalogo6->imagen = "tortahumeda.jpg";
        $catalogo6->save();

        $catalogo7 = new Catalogue();
        $catalogo7->titulo = "Tres Leches";
        $catalogo7->categoria = "postres";
        $catalogo7->descripcion = "Un suave bizcochuelo de vainilla o chocolate, embebido en nuestra deliciosa preparación de tres leches, rellena y cubierta de chantilly y envuelta en una deliciosa corona de chocolate bitter. Pídela desde su versión mini (10 porciones)";
        $catalogo7->imagen = "tresleches.jpg";
        $catalogo7->save();


        //BODAS


        $catalogo8 = new Catalogue();
        $catalogo8->titulo = "Naked";
        $catalogo8->categoria = "bodas";
        $catalogo8->descripcion = "Una torta en tendencia, pese a su sencillez luce super elegante, decorada con flores naturales o de tela.";
        $catalogo8->imagen = "naked.jpg";
        $catalogo8->save();

        $catalogo9 = new Catalogue();
        $catalogo9->titulo = "Azul";
        $catalogo9->categoria = "bodas";
        $catalogo9->descripcion = "Si deseas tematizar una torta y salir del blanco convencional he aquí la idea principal, una hermosa torta de bodas con azul metalizado.";
        $catalogo9->imagen = "azul.jpg";
        $catalogo9->save();

        
        $catalogo10 = new Catalogue();
        $catalogo10->titulo = "B&A";
        $catalogo10->categoria = "bodas";
        $catalogo10->descripcion = "Una torta ejecutada para la celebración de Bodas de Oro, aplicaciones de fondant.";
        $catalogo10->imagen = "bya.jpg";
        $catalogo10->save();

        $catalogo11 = new Catalogue();
        $catalogo11->titulo = "Love Gaby";
        $catalogo11->categoria = "bodas";
        $catalogo11->descripcion = "Una delicada versión que incluye acolchado, perlas y rosas, predominando el color perla";
        $catalogo11->imagen = "lovegaby.jpg";
        $catalogo11->save();

        
        $catalogo12 = new Catalogue();
        $catalogo12->titulo = "Love Volados";
        $catalogo12->categoria = "bodas";
        $catalogo12->descripcion = "Hermosa versión de bodas con flores y unos volados que envuelven todo el pastel para un efecto diferente. Aplicaciones en fondant";
        $catalogo12->imagen = "lovevolado.jpg";
        $catalogo12->save();

        $catalogo13 = new Catalogue();
        $catalogo13->titulo = "Siluetas";
        $catalogo13->categoria = "bodas";
        $catalogo13->descripcion = "Una idea para personalizar tu boda, usando siluetas de los novios en fotos reales, hará de ese recuerdo algo muy especial.";
        $catalogo13->imagen = "silueta.jpg";
        $catalogo13->save();

        
        $catalogo14 = new Catalogue();
        $catalogo14->titulo = "Mesa de Postres";
        $catalogo14->categoria = "bodas";
        $catalogo14->descripcion = "Una idea para complementar tu recepción una mesa completa de mini postres para el deleite de tus invitados.";
        $catalogo14->imagen = "mesapostre.jpg";
        $catalogo14->save();

        //INFANTILES

        $catalogo15 = new Catalogue();
        $catalogo15->titulo = "Mario Bross";
        $catalogo15->categoria = "infantiles";
        $catalogo15->descripcion = "El fontanero engreído de niños y adultos. Torta de 20 porciones";
        $catalogo15->imagen = "mariobross.jpg";
        $catalogo15->save();

        
        $catalogo16 = new Catalogue();
        $catalogo16->titulo = "Mickey";
        $catalogo16->categoria = "infantiles";
        $catalogo16->descripcion = "Aunque pasen los años este ratón seguirá robando el corazón de nuestros pequeños. Torta de 30 porciones (2 pisos) la cabecita de Mickey en chocolate forrado.";
        $catalogo16->imagen = "mickey.jpg";
        $catalogo16->save();

        $catalogo17 = new Catalogue();
        $catalogo17->titulo = "Spiderman";
        $catalogo17->categoria = "infantiles";
        $catalogo17->descripcion = "El super héroe favorito de muchos. Torta de 30 porciones";
        $catalogo17->imagen = "spiderman.jpg";
        $catalogo17->save();

        
        $catalogo18 = new Catalogue();
        $catalogo18->titulo = "Unicornio";
        $catalogo18->categoria = "infantiles";
        $catalogo18->descripcion = "Llevando a un mundo de sueños, color y fantasía. Torta de 20 porciones";
        $catalogo18->imagen = "unicornio.jpg";
        $catalogo18->save();

        $catalogo19 = new Catalogue();
        $catalogo19->titulo = "Hot Wheels";
        $catalogo19->categoria = "infantiles";
        $catalogo19->descripcion = "Para los amantes de la velocidad y por supuesto para los coleccionistas. Torta de 3 pisos (80 porciones)";
        $catalogo19->imagen = "hotwheels.jpg";
        $catalogo19->save();

        
        $catalogo20 = new Catalogue();
        $catalogo20->titulo = "Jasmine";
        $catalogo20->categoria = "infantiles";
        $catalogo20->descripcion = "Una princesa con el temperamento de su mascota. Torta de 2 pisos (50 porciones)";
        $catalogo20->imagen = "jasmine.jpg";
        $catalogo20->save();

        $catalogo21 = new Catalogue();
        $catalogo21->titulo = "Angry Birds";
        $catalogo21->categoria = "infantiles";
        $catalogo21->descripcion = "El clásico juego que conquistó a grandes y pequeños. Torta de 20 porciones";
        $catalogo21->imagen = "angrybirds.jpg";
        $catalogo21->save();

        
        $catalogo22 = new Catalogue();
        $catalogo22->titulo = "Blanca Nieves";
        $catalogo22->categoria = "infantiles";
        $catalogo22->descripcion = "No podría faltar nuestra primera princesa Disney. Temática blanca nieves, torta de 4 pisos (110 porciones) y dulces tematizados.";
        $catalogo22->imagen = "blancanieve.jpg";
        $catalogo22->save();


        // Bocaditos


        $catalogo23 = new Catalogue();
        $catalogo23->titulo = "Alfajores de Maicena";
        $catalogo23->categoria = "bocaditos";
        $catalogo23->descripcion = "Dos galletitas de maicena con una fina y delicada consistencia que se deshace en la boca rellenas con manjar de leche.";
        $catalogo23->imagen = "alfajore.jpg";
        $catalogo23->save();

        
        $catalogo24 = new Catalogue();
        $catalogo24->titulo = "Empanaditas de carne";
        $catalogo24->categoria = "bocaditos";
        $catalogo24->descripcion = "Una Deliciosa masa saladita rellena de un guiso con carne, pasas, ají amarillo, llevadas al horno. No podrás parar de comerlas.";
        $catalogo24->imagen = "empanada.jpg";
        $catalogo24->save();

        $catalogo25 = new Catalogue();
        $catalogo25->titulo = "Enrolladitos de hot dog";
        $catalogo25->categoria = "bocaditos";
        $catalogo25->descripcion = "Masa de hojaldre rellena de hot dog de ternera, llevada al horno, simplemente Yumi¡¡¡.";
        $catalogo25->imagen = "enrollado.jpg";
        $catalogo25->save();

        
        $catalogo26 = new Catalogue();
        $catalogo26->titulo = "Fresas Crocantes";
        $catalogo26->categoria = "bocaditos";
        $catalogo26->descripcion = "Dulces fresas cubiertas en chocolate bitter, la combinación de ambos ingredientes al paladar no tiene descripción.";
        $catalogo26->imagen = "fresacrocante.jpg";
        $catalogo26->save();

        $catalogo27 = new Catalogue();
        $catalogo27->titulo = "Mini pye de manzana";
        $catalogo27->categoria = "bocaditos";
        $catalogo27->descripcion = "Un clásico postre en un bocado, la deliciosa galletita se mezcla con el sabor de aquella manzana horneada con canela, azúcar y clavo.";
        $catalogo27->imagen = "minipye.jpg";
        $catalogo27->save();

        
        $catalogo28 = new Catalogue();
        $catalogo28->titulo = "Trufas de chocolate";
        $catalogo28->categoria = "bocaditos";
        $catalogo28->descripcion = "Pequeñas bolitas elaboradas con galletas, castañas y un toquecito de licor, cubiertas con una capita de chocolate bitter.";
        $catalogo28->imagen = "trufas.jpg";
        $catalogo28->save();

        $catalogo29 = new Catalogue();
        $catalogo29->titulo = "Rolatines de jamón y queso";
        $catalogo29->categoria = "bocaditos";
        $catalogo29->descripcion = "Pequeños piononos de pan pulman relleno de jamón y queso en rolatines.";
        $catalogo29->imagen = "rolatines.jpg";
        $catalogo29->save();

        
        $catalogo30 = new Catalogue();
        $catalogo30->titulo = "Petit pan con pollo";
        $catalogo30->categoria = "bocaditos";
        $catalogo30->descripcion = "Clásico sandwish y el favorito de muchos, un suave pancito de yema relleno de pollo deshilachado con apio y mayonesa de la casa.";
        $catalogo30->imagen = "petit.jpg";
        $catalogo30->save();


   

    }
}
