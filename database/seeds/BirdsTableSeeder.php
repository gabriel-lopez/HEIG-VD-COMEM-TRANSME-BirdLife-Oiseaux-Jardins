<?php

use App\BeakShape;
use App\Bird;
use App\Color;
use App\Family;
use App\Habitat;
use App\Order;
use App\Picture;
use App\Size;
use Illuminate\Database\Seeder;

class BirdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //<editor-fold desc="Colors">
        $beige = Color::create( [
            'hex'=>'#F5F5DC',
            'name_de'=>'Beige',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $blau = Color::create( [
            'hex'=>'#0000FF',
            'name_de'=>'Blau',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $braun = Color::create( [
            'hex'=>'#A52A2A',
            'name_de'=>'Braun',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gelb = Color::create( [
            'hex'=>'#FFFF00',
            'name_de'=>'Gelb',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $grau = Color::create( [
            'hex'=>'#808080',
            'name_de'=>'Grau',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gruen = Color::create( [
            'hex'=>'#008000',
            'name_de'=>'Gruen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $orange = Color::create( [
            'hex'=>'#FFA500',
            'name_de'=>'Orange',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $rosa = Color::create( [
            'hex'=>'#FFC0CB',
            'name_de'=>'Rosa',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $rot = Color::create( [
            'hex'=>'#FF0000',
            'name_de'=>'Rot',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $schwarz = Color::create( [
            'hex'=>'#000000',
            'name_de'=>'Schwarz',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $weiss = Color::create( [
            'hex'=>'#FFFFFF',
            'name_de'=>'Weiss',
            'name_fr'=>'',
            'name_it'=>'',
        ] );
        //</editor-fold>

        //<editor-fold desc="Habitats">
        $aecker_und_feldflur = Habitat::create( [
            'name_de'=>'Aecker und Feldflur',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gebirge = Habitat::create( [
            'name_de'=>'Gebirge',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gewaesser = Habitat::create( [
            'name_de'=>'Gewaesser',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $heidelandschaft = Habitat::create( [
            'name_de'=>'Heidelandschaft',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $meere_und_kuesten = Habitat::create( [
            'name_de'=>'Meere und Kuesten',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $siedlungsraum = Habitat::create( [
            'name_de'=>'Siedlungsraum',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $wald = Habitat::create( [
            'name_de'=>'Wald',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $wiesen_und_weiden = Habitat::create( [
            'name_de'=>'Wiesen und Weiden',
            'name_fr'=>'',
            'name_it'=>'',
        ] );
        //</editor-fold>

        //<editor-fold desc="Families">
        $cygnini = Family::create( [
            'name'=>'Cygnini',
            'name_de'=>'Schwäne',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $anserini = Family::create( [
            'name'=>'Anserini',
            'name_de'=>'Gänse',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $tadornini  = Family::create( [
            'name'=>'Tadornini',
            'name_de'=>'Halbgänse',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $anatini = Family::create( [
            'name'=>'Anatini',
            'name_de'=>'Schwimmenten',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $aythyini = Family::create( [
            'name'=>'Aythyini',
            'name_de'=>'Tauchenten',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $mergini = Family::create( [
            'name'=>'Mergini',
            'name_de'=>'Meerenten & Säger',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $tetraonidae = Family::create( [
            'name'=>'Tetraonidae',
            'name_de'=>'Raufusshühner',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $phasianidae = Family::create( [
            'name'=>'Phasianidae',
            'name_de'=>'Glattfusshühner',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gaviidae = Family::create( [
            'name'=>'Gaviidae',
            'name_de'=>'Seetaucher',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $podicipedidae = Family::create( [
            'name'=>'Podicipedidae',
            'name_de'=>'Lappentaucher',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $phalacrocoracidae = Family::create( [
            'name'=>'Phalacrocoracidae',
            'name_de'=>'Kormorane',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $ardeidae = Family::create( [
            'name'=>'Ardeidae',
            'name_de'=>'Reiher',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $ciconiidae = Family::create( [
            'name'=>'Ciconiidae',
            'name_de'=>'Störche',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $threskiornithidae = Family::create( [
            'name'=>'Threskiornithidae',
            'name_de'=>'Ibisse',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $accipitridae = Family::create( [
            'name'=>'Accipitridae',
            'name_de'=>'Habichtartige',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $pandionidae = Family::create( [
            'name'=>'Pandionidae',
            'name_de'=>'Fischadler',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $falconidae = Family::create( [
            'name'=>'Falconidae',
            'name_de'=>'Falkenartige',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $rallidae = Family::create( [
            'name'=>'Rallidae',
            'name_de'=>'Rallen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gruidae = Family::create( [
            'name'=>'Gruidae',
            'name_de'=>'Kraniche',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $charadriidae = Family::create( [
            'name'=>'Charadriidae',
            'name_de'=>'Regenpfeifer',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $scolopacidae = Family::create( [
            'name'=>'Scolopacidae',
            'name_de'=>'Schnepfenvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $laridae = Family::create( [
            'name'=>'Laridae',
            'name_de'=>'Möwen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $sternidae = Family::create( [
            'name'=>'Sternidae',
            'name_de'=>'Seeschwalben',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $columbidae = Family::create( [
            'name'=>'Columbidae',
            'name_de'=>'Tauben',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $cuculidae = Family::create( [
            'name'=>'Cuculidae',
            'name_de'=>'Kuckucke',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $strigidae = Family::create( [
            'name'=>'Strigidae',
            'name_de'=>'Echte Eulen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $tytonidae = Family::create( [
            'name'=>'Tytonidae',
            'name_de'=>'Schleiereulen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $caprimulgidae = Family::create( [
            'name'=>'Caprimulgidae',
            'name_de'=>'Nachtschwalben',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $apodidae = Family::create( [
            'name'=>'Apodidae',
            'name_de'=>'Segler',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $alcedinidae = Family::create( [
            'name'=>'Alcedinidae',
            'name_de'=>'Eisvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $meropidae = Family::create( [
            'name'=>'Meropidae',
            'name_de'=>'Spinte',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $upupidae = Family::create( [
            'name'=>'Upupidae',
            'name_de'=>'Wiedehopfe',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $picidae = Family::create( [
            'name'=>'Picidae',
            'name_de'=>'Spechte',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $alaudidae = Family::create( [
            'name'=>'Alaudidae',
            'name_de'=>'Lerchen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $hirundinidae = Family::create( [
            'name'=>'Hirundinidae',
            'name_de'=>'Schwalben',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $motacillidae = Family::create( [
            'name'=>'Motacillidae',
            'name_de'=>'Pieper & Stelzen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $cinclidae = Family::create( [
            'name'=>'Cinclidae',
            'name_de'=>'Wasseramseln',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $bombycillidae = Family::create( [
            'name'=>'Bombycillidae',
            'name_de'=>'Seidenschwänze',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $prunellidae = Family::create( [
            'name'=>'Prunellidae',
            'name_de'=>'Braunellen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $saxicolinae = Family::create( [
            'name'=>'Saxicolinae',
            'name_de'=>'Schmätzer',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $turdidae = Family::create( [
            'name'=>'Turdidae',
            'name_de'=>'Drosseln',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $sylviidae = Family::create( [
            'name'=>'Sylviidae',
            'name_de'=>'Zweigsänger',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $regulidae = Family::create( [
            'name'=>'Regulidae',
            'name_de'=>'Goldhähnchen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $troglodytidae = Family::create( [
            'name'=>'Troglodytidae',
            'name_de'=>'Zaunkönige',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $muscicapidae = Family::create( [
            'name'=>'Muscicapidae',
            'name_de'=>'Fliegenschnäpper',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $paridae = Family::create( [
            'name'=>'Paridae',
            'name_de'=>'Meisen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $aegithalidae = Family::create( [
            'name'=>'Aegithalidae',
            'name_de'=>'Schwanzmeisen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $panuridae = Family::create( [
            'name'=>'Panuridae',
            'name_de'=>'Bartmeisen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $remizidae = Family::create( [
            'name'=>'Remizidae',
            'name_de'=>'Beutelmeisen',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $sittidae = Family::create( [
            'name'=>'Sittidae',
            'name_de'=>'Kleiber',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $tichodromadinae = Family::create( [
            'name'=>'Tichodromadinae',
            'name_de'=>'Mauerläufer',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $certhiidae = Family::create( [
            'name'=>'Certhiidae',
            'name_de'=>'Baumläufer',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $laniidae = Family::create( [
            'name'=>'Laniidae',
            'name_de'=>'Würger',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $corvidae = Family::create( [
            'name'=>'Corvidae',
            'name_de'=>'Rabenvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $sturnidae = Family::create( [
            'name'=>'Sturnidae',
            'name_de'=>'Stare',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $oriolidae = Family::create( [
            'name'=>'Oriolidae',
            'name_de'=>'Pirole',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $passeridae = Family::create( [
            'name'=>'Passeridae',
            'name_de'=>'Sperlinge',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $fringillidae = Family::create( [
            'name'=>'Fringillidae',
            'name_de'=>'Finken',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $emberizidae = Family::create( [
            'name'=>'Emberizidae',
            'name_de'=>'Ammern',
            'name_fr'=>'',
            'name_it'=>'',
        ] );
        //</editor-fold>

        //<editor-fold desc="Orders">
        $bucerotiformes = Order::create( [
            'name' => 'Bucerotiformes',
            'name_de'=>'',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $strigiformes = Order::create( [
            'name' => 'Strigiformes',
            'name_de'=>'Eulenvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $anseriformes = Order::create( [
            'name' => 'Anseriformes',
            'name_de'=>'Gänsevögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $falconiformes = Order::create( [
            'name' => 'Falconiformes',
            'name_de'=>'Greifvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $galliformes = Order::create( [
            'name' => 'Galliformes',
            'name_de'=>'Hühnervögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $gruiformes = Order::create( [
            'name' => 'Gruiformes',
            'name_de'=>'Kranichvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $cuculiformes = Order::create( [
            'name' => 'Cuculiformes',
            'name_de'=>'Kuckucksvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $podicipediformes = Order::create( [
            'name' => 'Podicipediformes',
            'name_de'=>'Lappentaucher',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $coraciiformes = Order::create( [
            'name' => 'Coraciiformes',
            'name_de'=>'Rackenvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $pelecaniformes = Order::create( [
            'name' => 'Pelecaniformes',
            'name_de'=>'Ruderfüsser',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $ciconiiformes = Order::create( [
            'name' => 'Ciconiiformes',
            'name_de'=>'Schreitvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $caprimulgiformes = Order::create( [
            'name' => 'Caprimulgiformes',
            'name_de'=>'Schwalmartige',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $apodiformes = Order::create( [
            'name' => 'Apodiformes',
            'name_de'=>'Seglervögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $passeri = Order::create( [
            'name' => 'Passeri',
            'name_de'=>'Singvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $piciformes = Order::create( [
            'name' => 'Piciformes',
            'name_de'=>'Spechtvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $columbiformes = Order::create( [
            'name' => 'Columbiformes',
            'name_de'=>'Taubenvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $charadriiformes = Order::create( [
            'name' => 'Charadriiformes',
            'name_de'=>'Wat-, Möwen- und Alkenvögel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );
        //</editor-fold>

        //<editor-fold desc="Beak Shapes">
        $entenschnabel = BeakShape::create( [
            'name_de'=>'Entenschnabel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $kurz_dick = BeakShape::create( [
            'name_de'=>'Kurz Dick',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $kurz_duenn = BeakShape::create( [
            'name_de'=>'Kurz Duenn',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $kurz_hakenfoermig = BeakShape::create( [
            'name_de'=>'Kurz Hakenfoermig',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $lang_dolchfoermig = BeakShape::create( [
            'name_de'=>'Lang Dolchfoermig',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $lang_duenn = BeakShape::create( [
            'name_de'=>'Lang Duenn',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $lang_hakenfoermig = BeakShape::create( [
            'name_de'=>'Lang Hakenfoermig',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $meisselfoermig = BeakShape::create( [
            'name_de'=>'Meisselfoermig',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $meisselschnabel = BeakShape::create( [
            'name_de'=>'Meisselschnabel',
            'name_fr'=>'',
            'name_it'=>'',
        ] );

        $normal = BeakShape::create( [
            'name_de'=>'Normal',
            'name_fr'=>'',
            'name_it'=>'',
        ] );
        //</editor-fold>

        //<editor-fold desc="Sizes">
        $amsel_taube = Size::create( [
            'name_de' => 'Amsel Taube',
            'name_fr' => '',
            'name_it' => '',
            'order'=>'1'
        ] );

        $_spatz = Size::create( [
            'name_de' => 'Spatz',
            'name_fr' => '',
            'name_it' => '',
            'order'=>'2'
        ] );

        $spatz_amsel = Size::create( [
            'name_de' => 'Spatz Amsel',
            'name_fr' => '',
            'name_it' => '',
            'order'=>'3'
        ] );

        $stockente_ = Size::create( [
            'name_de' => 'Stockente',
            'name_fr' => '',
            'name_it' => '',
            'order'=>'4'
        ] );

        $taube_stockente = Size::create( [
            'name_de' => 'Taube Stockente',
            'name_fr' => '',
            'name_it' => '',
            'order'=>'5'
        ] );
        //</editor-fold>

        //<editor-fold desc="Pictures">
        $alpenbraunelle_1 = Picture::create( [
            'filename'=>'Alpenbraunelle_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenbraunelle_2 = Picture::create( [
            'filename'=>'Alpenbraunelle_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpendohle_1 = Picture::create( [
            'filename'=>'Alpendohle_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpendohle_2 = Picture::create( [
            'filename'=>'Alpendohle_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenkraehe_1 = Picture::create( [
            'filename'=>'Alpenkraehe_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenkraehe_2 = Picture::create( [
            'filename'=>'Alpenkraehe_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenschneehuhn_1 = Picture::create( [
            'filename'=>'Alpenschneehuhn_1.jpg',
            'caption'=>'Sommerkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpensegler_1 = Picture::create( [
            'filename'=>'Alpensegler_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenstrandlaeufer_1 = Picture::create( [
            'filename'=>'Alpenstrandlaeufer_1.jpg',
            'caption'=>'Jugendkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenstrandlaeufer_2 = Picture::create( [
            'filename'=>'Alpenstrandlaeufer_2.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $alpenstrandlaeufer_3 = Picture::create( [
            'filename'=>'Alpenstrandlaeufer_3.jpg',
            'caption'=>'Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $altgras_1 = Picture::create( [
            'filename'=>'altgras_1.jpg',
            'caption'=>'Altgrasstreifen entlang einer Hecke',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $altholzinsel_1= Picture::create( [
            'filename'=>'altholzinsel_1.jpg',
            'caption'=>'Altholzinsel',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $altholzinsel_2 = Picture::create( [
            'filename'=>'altholzinsel_2.jpg',
            'caption'=>'Altholzinsel',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $amsel_1 = Picture::create( [
            'filename'=>'Amsel_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $amsel_2 = Picture::create( [
            'filename'=>'Amsel_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $asthaufen_1 = Picture::create( [
            'filename'=>'asthaufen_1.jpg',
            'caption'=>'Asthaufen',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $asthaufen_2 = Picture::create( [
            'filename'=>'asthaufen_2.jpg',
            'caption'=>'Asthaufen',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $asthaufen_3 = Picture::create( [
            'filename'=>'asthaufen_3.jpg',
            'caption'=>'Wurzelteller',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $auerhuhn_1 = Picture::create( [
            'filename'=>'Auerhuhn_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $auerhuhn_2 = Picture::create( [
            'filename'=>'Auerhuhn_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bachstelze_1 = Picture::create( [
            'filename'=>'Bachstelze_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bachstelze_2 = Picture::create( [
            'filename'=>'Bachstelze_2.jpg',
            'caption'=>'Jugendkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bach_1 = Picture::create( [
            'filename'=>'bach_1.jpg',
            'caption'=>'Naturnaher Bach im Siedlungsraum',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $bach_2 = Picture::create( [
            'filename'=>'bach_2.jpg',
            'caption'=>'Naturnaher Bach im Kulturland',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $bartgeier_1 = Picture::create( [
            'filename'=>'Bartgeier_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bartgeier_2 = Picture::create( [
            'filename'=>'Bartgeier_2.jpg',
            'caption'=>'Immatur',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bartgeier_3 = Picture::create( [
            'filename'=>'Bartgeier_3.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bartmeise_1 = Picture::create( [
            'filename'=>'Bartmeise_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bartmeise_2 = Picture::create( [
            'filename'=>'Bartmeise_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $baumfalke_1 = Picture::create( [
            'filename'=>'Baumfalke_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $baumfalke_2 = Picture::create( [
            'filename'=>'Baumfalke_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $baumpieper_1 = Picture::create( [
            'filename'=>'Baumpieper_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $begruentes_dach_1 = Picture::create( [
            'filename'=>'begruentes_dach_1.jpg',
            'caption'=>'Dach mit Blumenwiese und Kleinstrukturen',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $begruente_wand_1 = Picture::create( [
            'filename'=>'begruente_wand_1.jpg',
            'caption'=>'Mit Efeu begrünte Wand',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $begruente_wand_2 = Picture::create( [
            'filename'=>'begruente_wand_2.jpg',
            'caption'=>'Begrünte Hausecke',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $begruente_wand_3 = Picture::create( [
            'filename'=>'begruente_wand_3.jpg',
            'caption'=>'Begrünte Wände bieten Vögeln Nahrung und Deckung',
            'author'=>'M. Gerber',
            'website'=>'www.birds-online.ch'
        ] );

        $bekassine_1 = Picture::create( [
            'filename'=>'Bekassine_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bekassine_2 = Picture::create( [
            'filename'=>'Bekassine_2.jpg',
            'caption'=>'Balzflug',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bergente_1 = Picture::create( [
            'filename'=>'Bergente_1.jpg',
            'caption'=>'Männchen Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bergente_2 = Picture::create( [
            'filename'=>'Bergente_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bergfink_1 = Picture::create( [
            'filename'=>'Bergfink_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bergfink_2 = Picture::create( [
            'filename'=>'Bergfink_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $berglaubsaenger_1 = Picture::create( [
            'filename'=>'Berglaubsaenger_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bergpieper_1 = Picture::create( [
            'filename'=>'Bergpieper_1.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $besucherlenkung_1 = Picture::create( [
            'filename'=>'besucherlenkung_1.jpg',
            'caption'=>'Aus Hides kann man ohne zu stören beobachten',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $beutelmeise_1 = Picture::create( [
            'filename'=>'Beutelmeise_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $beutelmeise_2 = Picture::create( [
            'filename'=>'Beutelmeise_2.jpg',
            'caption'=>'Männchen beim Nestbau',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bienenfresser_1 = Picture::create( [
            'filename'=>'Bienenfresser_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'BirdLife Schweiz',
            'website'=>'http://www.birdlife.ch'
        ] );

        $bienenfresser_2 = Picture::create( [
            'filename'=>'Bienenfresser_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bienenfresser_3 = Picture::create( [
            'filename'=>'Bienenfresser_3.jpg',
            'caption'=>'An der Bruthöhle',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $birkenzeisig_1 = Picture::create( [
            'filename'=>'Birkenzeisig_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $birkenzeisig_2 = Picture::create( [
            'filename'=>'Birkenzeisig_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $birkhuhn_1 = Picture::create( [
            'filename'=>'Birkhuhn_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $birkhuhn_2 = Picture::create( [
            'filename'=>'Birkhuhn_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $birkhuhn_3 = Picture::create( [
            'filename'=>'Birkhuhn_3.jpg',
            'caption'=>'Balzkampf zweier Hähne',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaessgans_1 = Picture::create( [
            'filename'=>'Blaessgans_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaessgans_2 = Picture::create( [
            'filename'=>'Blaessgans_2.jpg',
            'caption'=>'Jugendkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaessgans_3 = Picture::create( [
            'filename'=>'Blaessgans_3.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaesshuhn_1 = Picture::create( [
            'filename'=>'Blaesshuhn_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaesshuhn_2 = Picture::create( [
            'filename'=>'Blaesshuhn_2.jpg',
            'caption'=>'Jugendkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaesshuhn_3 = Picture::create( [
            'filename'=>'Blaesshuhn_3.jpg',
            'caption'=>'Küken',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaesshuhn_4 = Picture::create( [
            'filename'=>'Blaesshuhn_4.jpg',
            'caption'=>'Nest',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaukehlchen_1 = Picture::create( [
            'filename'=>'Blaukehlchen_1.jpg',
            'caption'=>'Männchen Prachtkleid (weisssternig)',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $blaukehlchen_2 = Picture::create( [
            'filename'=>'Blaukehlchen_2.jpg',
            'caption'=>'Männchen Prachtkleid (rotsternig)',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $blaukehlchen_3 = Picture::create( [
            'filename'=>'Blaukehlchen_3.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $blaumeise_1 = Picture::create( [
            'filename'=>'Blaumeise_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaumeise_2 = Picture::create( [
            'filename'=>'Blaumeise_2.jpg',
            'caption'=>'Jugendkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $blaumerle_1 = Picture::create( [
            'filename'=>'Blaumerle_1.jpg',
            'caption'=>'Männchen',
            'author'=>'S. Wassmer',
            'website'=>''
        ] );

        $blaumerle_2 = Picture::create( [
            'filename'=>'Blaumerle_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'S. Wassmer',
            'website'=>''
        ] );

        $bluthaenfling_1 = Picture::create( [
            'filename'=>'Bluthaenfling_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bluthaenfling_2 = Picture::create( [
            'filename'=>'Bluthaenfling_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $brachpieper_1 = Picture::create( [
            'filename'=>'Brachpieper_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $brandgans_1 = Picture::create( [
            'filename'=>'Brandgans_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $brandgans_2 = Picture::create( [
            'filename'=>'Brandgans_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $braunkehlchen_1 = Picture::create( [
            'filename'=>'Braunkehlchen_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $braunkehlchen_2  = Picture::create( [
            'filename'=>'Braunkehlchen_2.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bruchwasserlaeufer_1 = Picture::create( [
            'filename'=>'Bruchwasserlaeufer_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $bruchwasserlaeufer_2 = Picture::create( [
            'filename'=>'Bruchwasserlaeufer_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $buchfink_1 = Picture::create( [
            'filename'=>'Buchfink_1.jpg',
            'caption'=>'Männchen Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $buchfink_2 = Picture::create( [
            'filename'=>'Buchfink_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $buchfink_3 = Picture::create( [
            'filename'=>'Buchfink_3.jpg',
            'caption'=>'Weibchen beim Nestbau',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $buntspecht_1 = Picture::create( [
            'filename'=>'Buntspecht_1.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $buntspecht_2 =  Picture::create( [
            'filename'=>'Buntspecht_2.jpg',
            'caption'=>'Männchen an der Bruthöhle',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $dohle_1 = Picture::create( [
            'filename'=>'Dohle_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $dohle_2 = Picture::create( [
            'filename'=>'Dohle_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $dorngrasmuecke_1 = Picture::create( [
            'filename'=>'Dorngrasmuecke_1.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $dreizehenspecht_1 = Picture::create( [
            'filename'=>'Dreizehenspecht_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $dreizehenspecht_2 = Picture::create( [
            'filename'=>'Dreizehenspecht_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $drosselrohrsaenger_1 = Picture::create( [
            'filename'=>'Drosselrohrsaenger_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $dunkler_wasserlaeufer_1 = Picture::create( [
            'filename'=>'Dunkler_Wasserlaeufer_1.jpg',
            'caption'=>'Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $eichelhaeher_1 = Picture::create( [
            'filename'=>'Eichelhaeher_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $eichelhaeher_2 = Picture::create( [
            'filename'=>'Eichelhaeher_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $eiderente_1 = Picture::create( [
            'filename'=>'Eiderente_1.jpg',
            'caption'=>'Männchen Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $eiderente_2 = Picture::create( [
            'filename'=>'Eiderente_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $eisvogel_1 = Picture::create( [
            'filename'=>'Eisvogel_1.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $elster_1 = Picture::create( [
            'filename'=>'Elster_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $elster_2 = Picture::create( [
            'filename'=>'Elster_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $erlenzeisig_1 = Picture::create( [
            'filename'=>'Erlenzeisig_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $erlenzeisig_2 = Picture::create( [
            'filename'=>'Erlenzeisig_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $erlenzeisig_3 = Picture::create( [
            'filename'=>'Erlenzeisig_3.jpg',
            'caption'=>'Nahrungssuchende Gruppe im Winter',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fahlsegler_1 = Picture::create( [
            'filename'=>'Fahlsegler_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fahlsegler_2 = Picture::create( [
            'filename'=>'Fahlsegler_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fasan_1 = Picture::create( [
            'filename'=>'Fasan_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fasan_2 = Picture::create( [
            'filename'=>'Fasan_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $feldlerche_1 = Picture::create( [
            'filename'=>'Feldlerche_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $feldschwirl_1 = Picture::create( [
            'filename'=>'Feldschwirl_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'J. Bohdal',
            'website'=>'http://www.naturfoto-cz.de'
        ] );

        $feldsperling_1 = Picture::create( [
            'filename'=>'Feldsperling_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $feldsperling_2 = Picture::create( [
            'filename'=>'Feldsperling_2.jpg',
            'caption'=>'An der Nisthöhle',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $felsenschwalbe_1 = Picture::create( [
            'filename'=>'Felsenschwalbe_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $felsenschwalbe_2 = Picture::create( [
            'filename'=>'Felsenschwalbe_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fichtenkreuzschnabel_1 = Picture::create( [
            'filename'=>'Fichtenkreuzschnabel_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fichtenkreuzschnabel_2 = Picture::create( [
            'filename'=>'Fichtenkreuzschnabel_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fischadler_1 = Picture::create( [
            'filename'=>'Fischadler_1.jpg',
            'caption'=>'Jungvogel',
            'author'=>'BirdLife Schweiz',
            'website'=>'http://www.birdlife.ch'
        ] );

        $fischadler_2 = Picture::create( [
            'filename'=>'Fischadler_2.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $fitis_1 = Picture::create( [
            'filename'=>'Fitis_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussregenpfeifer_1 = Picture::create( [
            'filename'=>'Flussregenpfeifer_1.jpg',
            'caption'=>'Altvogel Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussregenpfeifer_2 = Picture::create( [
            'filename'=>'Flussregenpfeifer_2.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussseeschwalbe_1 = Picture::create( [
            'filename'=>'Flussseeschwalbe_1.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussseeschwalbe_2 = Picture::create( [
            'filename'=>'Flussseeschwalbe_2.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussseeschwalbe_3 = Picture::create( [
            'filename'=>'Flussseeschwalbe_3.jpg',
            'caption'=>'Jugendkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussuferlaeufer_1 = Picture::create( [
            'filename'=>'Flussuferlaeufer_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $flussuferlaeufer_2 = Picture::create( [
            'filename'=>'Flussuferlaeufer_2.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gaensesaeger_1 = Picture::create( [
            'filename'=>'Gaensesaeger_1.jpg',
            'caption'=>'Männchen Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gaensesaeger_2 = Picture::create( [
            'filename'=>'Gaensesaeger_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gartenbaumlaeufer_1 = Picture::create( [
            'filename'=>'Gartenbaumlaeufer_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gartengrasmuecke_1 = Picture::create( [
            'filename'=>'Gartengrasmuecke_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gartenrotschwanz_1 = Picture::create( [
            'filename'=>'Gartenrotschwanz_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gartenrotschwanz_2 = Picture::create( [
            'filename'=>'Gartenrotschwanz_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'BirdLife Schweiz',
            'website'=>'http://www.birdlife.ch'
        ] );

        $gebirgsstelze = Picture::create( [
            'filename'=>'Gebirgsstelze.jpg',
            'caption'=>'Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gelbspoetter_1 = Picture::create( [
            'filename'=>'Gelbspoetter_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'BirdLife Schweiz',
            'website'=>'http://www.birdlife.ch'
        ] );

        $gimpel_1 = Picture::create( [
            'filename'=>'Gimpel_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gimpel_2 = Picture::create( [
            'filename'=>'Gimpel_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $girlitz_1 = Picture::create( [
            'filename'=>'Girlitz_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $goldammer_1 = Picture::create( [
            'filename'=>'Goldammer_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $goldammer_2 = Picture::create( [
            'filename'=>'Goldammer_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $goldregenpfeifer_1 = Picture::create( [
            'filename'=>'Goldregenpfeifer_1.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $goldregenpfeifer_2 = Picture::create( [
            'filename'=>'Goldregenpfeifer_2.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $grauammer_1 = Picture::create( [
            'filename'=>'Grauammer_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $grauammer_2 = Picture::create( [
            'filename'=>'Grauammer_2.jpg',
            'caption'=>'Altvögel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $graugans_1 = Picture::create( [
            'filename'=>'Graugans_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $graureiher_1 = Picture::create( [
            'filename'=>'Graureiher_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $graureiher_2 = Picture::create( [
            'filename'=>'Graureiher_2.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $graureiher_3 = Picture::create( [
            'filename'=>'Graureiher_3.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $grauschnaepper_1 = Picture::create( [
            'filename'=>'Grauschnaepper_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $grosser_brachvogel_1 = Picture::create( [
            'filename'=>'Grosser_Brachvogel_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gruenfink_1 = Picture::create( [
            'filename'=>'Gruenfink_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gruenfink_2 = Picture::create( [
            'filename'=>'Gruenfink_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gruenfink_3 = Picture::create( [
            'filename'=>'Gruenfink_3.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gruenschenkel_1 = Picture::create( [
            'filename'=>'Gruenschenkel_1.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gruenschenkel_2 = Picture::create( [
            'filename'=>'Gruenschenkel_2.jpg',
            'caption'=>'Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $gruenspecht_1 = Picture::create( [
            'filename'=>'Gruenspecht_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $habicht_1 = Picture::create( [
            'filename'=>'Habicht_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $halsbandschnaepper_1 = Picture::create( [
            'filename'=>'Halsbandschnaepper_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $halsbandschnaepper_2 = Picture::create( [
            'filename'=>'Halsbandschnaepper_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haselhuhn_1 = Picture::create( [
            'filename'=>'Haselhuhn_1.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haselhuhn_2 = Picture::create( [
            'filename'=>'Haselhuhn_2.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haubenmeise_1 = Picture::create( [
            'filename'=>'Haubenmeise_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haubentaucher_1 = Picture::create( [
            'filename'=>'Haubentaucher_1.jpg',
            'caption'=>'Altvogel Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haubentaucher_2 = Picture::create( [
            'filename'=>'Haubentaucher_2.jpg',
            'caption'=>'Altvogel Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haubentaucher_3 = Picture::create( [
            'filename'=>'Haubentaucher_3.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $hausrotschwanz_1 = Picture::create( [
            'filename'=>'Hausrotschwanz_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $hausrotschwanz_2 = Picture::create( [
            'filename'=>'Hausrotschwanz_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haussperling_1 = Picture::create( [
            'filename'=>'Haussperling_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $haussperling_2 = Picture::create( [
            'filename'=>'Haussperling_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $heckenbraunelle_1 = Picture::create( [
            'filename'=>'Heckenbraunelle_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $heidelerche_1 = Picture::create( [
            'filename'=>'Heidelerche_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'www.birds-online.com'
        ] );

        $hoeckerschwan_1 = Picture::create( [
            'filename'=>'Hoeckerschwan_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $hoeckerschwan_2 = Picture::create( [
            'filename'=>'Hoeckerschwan_2.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $hohltaube_1 = Picture::create( [
            'filename'=>'Hohltaube_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kampflaeufer_1 = Picture::create( [
            'filename'=>'Kampflaeufer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kampflaeufer_2 = Picture::create( [
            'filename'=>'Kampflaeufer_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $karmingimpel_1 = Picture::create( [
            'filename'=>'Karmingimpel_1.jpg',
            'caption'=>'Männchen im Altkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kernbeisser_1 = Picture::create( [
            'filename'=>'Kernbeisser_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kiebitzregenpfeifer_1 = Picture::create( [
            'filename'=>'Kiebitzregenpfeifer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kiebitz_1 = Picture::create( [
            'filename'=>'Kiebitz_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kiebitz_2 = Picture::create( [
            'filename'=>'Kiebitz_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $klappergrasmuecke_1 = Picture::create( [
            'filename'=>'Klappergrasmuecke_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kleiber_1 = Picture::create( [
            'filename'=>'Kleiber_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kleines_sumpfhuhn_1 = Picture::create( [
            'filename'=>'Kleines_Sumpfhuhn_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kleines_sumpfhuhn_2 = Picture::create( [
            'filename'=>'Kleines_Sumpfhuhn_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kleines_sumpfhuhn_3 = Picture::create( [
            'filename'=>'Kleines_Sumpfhuhn_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kleinspecht_1 = Picture::create( [
            'filename'=>'Kleinspecht_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $knaekente_1 = Picture::create( [
            'filename'=>'Knaekente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $knaekente_2 = Picture::create( [
            'filename'=>'Knaekente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $knutt_1 = Picture::create( [
            'filename'=>'Knutt_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kohlmeise_1 = Picture::create( [
            'filename'=>'Kohlmeise_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kolbenente_1 = Picture::create( [
            'filename'=>'Kolbenente_1.jpg',
            'caption'=>'Männchen, Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kolbenente_2 = Picture::create( [
            'filename'=>'Kolbenente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kolkrabe_1 = Picture::create( [
            'filename'=>'Kolkrabe_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kormoran_1 = Picture::create( [
            'filename'=>'Kormoran_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kormoran_2 = Picture::create( [
            'filename'=>'Kormoran_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kormoran_3 = Picture::create( [
            'filename'=>'Kormoran_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kornweihe_1 = Picture::create( [
            'filename'=>'Kornweihe_1.jpg',
            'caption'=>'Männchen',
            'author'=>'L. Senja',
            'website'=>'http://www.naturfoto-cz.de'
        ] );

        $kranich_1 = Picture::create( [
            'filename'=>'Kranich_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kranich_2 = Picture::create( [
            'filename'=>'Kranich_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $krickente_1 = Picture::create( [
            'filename'=>'Krickente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $krickente_2 = Picture::create( [
            'filename'=>'Krickente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $kuckuck_1 = Picture::create( [
            'filename'=>'Kuckuck_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $lachmoewe_1 = Picture::create( [
            'filename'=>'Lachmoewe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $lachmoewe_2 = Picture::create( [
            'filename'=>'Lachmoewe_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $lachmoewe_3 = Picture::create( [
            'filename'=>'Lachmoewe_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $loeffelente_1 = Picture::create( [
            'filename'=>'Loeffelente_1.jpg',
            'caption'=>'Männchen im Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $loeffelente_2 = Picture::create( [
            'filename'=>'Loeffelente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $maeusebussard_1 = Picture::create( [
            'filename'=>'Maeusebussard_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $maeusebussard_2 = Picture::create( [
            'filename'=>'Maeusebussard_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $mandarinente_1 = Picture::create( [
            'filename'=>'Mandarinente_1.jpg',
            'caption'=>'Männchen Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $mandarinente_2 = Picture::create( [
            'filename'=>'Mandarinente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $mauerlaeufer_1 = Picture::create( [
            'filename'=>'Mauerlaeufer_1.jpg',
            'caption'=>'Männchen im Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $mauersegler_1 = Picture::create( [
            'filename'=>'Mauersegler_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $mehlschwalbe_1 = Picture::create( [
            'filename'=>'Mehlschwalbe_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $mehlschwalbe_2 = Picture::create( [
            'filename'=>'Mehlschwalbe_2.jpg',
            'caption'=>'Jungvogel im Nest',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $mehlschwalbe_3 = Picture::create( [
            'filename'=>'Mehlschwalbe_3.jpg',
            'caption'=>'Altvogel am Nest',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $misteldrossel_1 = Picture::create( [
            'filename'=>'Misteldrossel_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $mittelmeermoewe_1 = Picture::create( [
            'filename'=>'Mittelmeermoewe_1.jpg',
            'caption'=>'Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $mittelmeermoewe_2 = Picture::create( [
            'filename'=>'Mittelmeermoewe_2.jpg',
            'caption'=>'Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $mittelmeermoewe_3 = Picture::create( [
            'filename'=>'Mittelmeermoewe_3.jpg',
            'caption'=>'Jungvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $mittelsaeger_1 = Picture::create( [
            'filename'=>'Mittelsaeger_1.jpg',
            'caption'=>'Männchen Prachtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $mittelspecht_1 = Picture::create( [
            'filename'=>'Mittelspecht_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $moenchsgrasmuecke_1 = Picture::create( [
            'filename'=>'Moenchsgrasmuecke_1.jpg',
            'caption'=>'Männchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $moenchsgrasmuecke_2 = Picture::create( [
            'filename'=>'Moenchsgrasmuecke_2.jpg',
            'caption'=>'Weibchen',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $moorente_1 = Picture::create( [
            'filename'=>'Moorente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $moorente_2 = Picture::create( [
            'filename'=>'Moorente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $nachtigall_1 = Picture::create( [
            'filename'=>'Nachtigall_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $nachtreiher_1 = Picture::create( [
            'filename'=>'Nachtreiher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $nachtreiher_2 = Picture::create( [
            'filename'=>'Nachtreiher_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $nebelkraehe_1 = Picture::create( [
            'filename'=>'Nebelkraehe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $neuntoeter_1 = Picture::create( [
            'filename'=>'Neuntoeter_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $neuntoeter_2 = Picture::create( [
            'filename'=>'Neuntoeter_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $nilgans_1 = Picture::create( [
            'filename'=>'Nilgans_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $nilgans_2 = Picture::create( [
            'filename'=>'Nilgans_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $orpheusspoetter_1 = Picture::create( [
            'filename'=>'Orpheusspoetter_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $ortolan_1 = Picture::create( [
            'filename'=>'Ortolan_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $pfeifente_1 = Picture::create( [
            'filename'=>'Pfeifente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $pfeifente_2 = Picture::create( [
            'filename'=>'Pfeifente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $pfuhlschnepfe_1 = Picture::create( [
            'filename'=>'Pfuhlschnepfe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $pfuhlschnepfe_2 = Picture::create( [
            'filename'=>'Pfuhlschnepfe_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $purpurreiher_1 = Picture::create( [
            'filename'=>'Purpurreiher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rabenkraehe_1 = Picture::create( [
            'filename'=>'Rabenkraehe_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $raubwuerger_1 = Picture::create( [
            'filename'=>'Raubwuerger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rauchschwalbe_1 = Picture::create( [
            'filename'=>'Rauchschwalbe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rauchschwalbe_2 = Picture::create( [
            'filename'=>'Rauchschwalbe_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rebhuhn_1 = Picture::create( [
            'filename'=>'Rebhuhn_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'SVS',
            'website'=>''
        ] );

        $reiherente_1 = Picture::create( [
            'filename'=>'Reiherente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $reiherente_2 = Picture::create( [
            'filename'=>'Reiherente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $ringdrossel_1 = Picture::create( [
            'filename'=>'Ringdrossel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $ringeltaube_1 = Picture::create( [
            'filename'=>'Ringeltaube_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $ringeltaube_2 = Picture::create( [
            'filename'=>'Ringeltaube_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rohrammer_1 = Picture::create( [
            'filename'=>'Rohrammer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rohrammer_2 = Picture::create( [
            'filename'=>'Rohrammer_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rohrdommel_1 = Picture::create( [
            'filename'=>'Rohrdommel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rohrschwirl_1 = Picture::create( [
            'filename'=>'Rohrschwirl_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rohrweihe_1 = Picture::create( [
            'filename'=>'Rohrweihe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rostgans_1 = Picture::create( [
            'filename'=>'Rostgans_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rostgans_2 = Picture::create( [
            'filename'=>'Rostgans_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotdrossel_1 = Picture::create( [
            'filename'=>'Rotdrossel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotfussfalke_1 = Picture::create( [
            'filename'=>'Rotfussfalke_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotfussfalke_2 = Picture::create( [
            'filename'=>'Rotfussfalke_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotfussfalke_3 = Picture::create( [
            'filename'=>'Rotfussfalke_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rothalstaucher_1 = Picture::create( [
            'filename'=>'Rothalstaucher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotkehlchen_1 = Picture::create( [
            'filename'=>'Rotkehlchen_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotkopfwuerger_1 = Picture::create( [
            'filename'=>'Rotkopfwuerger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotmilan_1 = Picture::create( [
            'filename'=>'Rotmilan_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotmilan_2 = Picture::create( [
            'filename'=>'Rotmilan_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $rotschenkel_1 = Picture::create( [
            'filename'=>'Rotschenkel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $saatgans_1 = Picture::create( [
            'filename'=>'Saatgans_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $saatkraehe_1 = Picture::create( [
            'filename'=>'Saatkraehe_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sanderling_1 = Picture::create( [
            'filename'=>'Sanderling_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sanderling_2 = Picture::create( [
            'filename'=>'Sanderling_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sandregenpfeifer_1 = Picture::create( [
            'filename'=>'Sandregenpfeifer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sandregenpfeifer_2 = Picture::create( [
            'filename'=>'Sandregenpfeifer_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schafstelze_1 = Picture::create( [
            'filename'=>'Schafstelze_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schafstelze_2 = Picture::create( [
            'filename'=>'Schafstelze_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schellente_1 = Picture::create( [
            'filename'=>'Schellente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schellente_2 = Picture::create( [
            'filename'=>'Schellente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schilfrohrsaenger_1 = Picture::create( [
            'filename'=>'Schilfrohrsaenger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schnatterente_1 = Picture::create( [
            'filename'=>'Schnatterente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schnatterente_2 = Picture::create( [
            'filename'=>'Schnatterente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schneesperling_1 = Picture::create( [
            'filename'=>'Schneesperling_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwanzmeise_1 = Picture::create( [
            'filename'=>'Schwanzmeise_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzhalstaucher_1 = Picture::create( [
            'filename'=>'Schwarzhalstaucher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzhalstaucher_2 = Picture::create( [
            'filename'=>'Schwarzhalstaucher_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzkehlchen_1 = Picture::create( [
            'filename'=>'Schwarzkehlchen_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzkopfmoewe_1 = Picture::create( [
            'filename'=>'Schwarzkopfmoewe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzkopfmoewe_2 = Picture::create( [
            'filename'=>'Schwarzkopfmoewe_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzmilan_1 = Picture::create( [
            'filename'=>'Schwarzmilan_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzspecht_1 = Picture::create( [
            'filename'=>'Schwarzspecht_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzstorch_1 = Picture::create( [
            'filename'=>'Schwarzstorch_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $schwarzstorch_2 = Picture::create( [
            'filename'=>'Schwarzstorch_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $seidenreiher_1 = Picture::create( [
            'filename'=>'Seidenreiher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $seidenreiher_2 = Picture::create( [
            'filename'=>'Seidenreiher_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $seidenschwanz_1 = Picture::create( [
            'filename'=>'Seidenschwanz_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sichelstrandlaeufer_1 = Picture::create( [
            'filename'=>'Sichelstrandlaeufer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $silberreiher_1 = Picture::create( [
            'filename'=>'Silberreiher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $silberreiher_2 = Picture::create( [
            'filename'=>'Silberreiher_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $singdrossel_1 = Picture::create( [
            'filename'=>'Singdrossel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $singschwan_1 = Picture::create( [
            'filename'=>'Singschwan_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $singschwan_2 = Picture::create( [
            'filename'=>'Singschwan_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sommergoldhaehnchen_1 = Picture::create( [
            'filename'=>'Sommergoldhaehnchen_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sperbergrasmuecke_1 = Picture::create( [
            'filename'=>'Sperbergrasmuecke_1.jpg',
            'caption'=>'Männchen, Schlichtkleid',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $sperber_1 = Picture::create( [
            'filename'=>'Sperber_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sperber_2 = Picture::create( [
            'filename'=>'Sperber_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $spiessente_1 = Picture::create( [
            'filename'=>'Spiessente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $spiessente_2 = Picture::create( [
            'filename'=>'Spiessente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $star_1 = Picture::create( [
            'filename'=>'Star_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $star_2 = Picture::create( [
            'filename'=>'Star_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinkauz_1 = Picture::create( [
            'filename'=>'Steinkauz_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinroetel_1 = Picture::create( [
            'filename'=>'Steinroetel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinschmaetzer_1 = Picture::create( [
            'filename'=>'Steinschmaetzer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinschmaetzer_2 = Picture::create( [
            'filename'=>'Steinschmaetzer_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinschmaetzer_3 = Picture::create( [
            'filename'=>'Steinschmaetzer_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinwaelzer_1 = Picture::create( [
            'filename'=>'Steinwaelzer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $steinwaelzer_2 = Picture::create( [
            'filename'=>'Steinwaelzer_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $stieglitz_1 = Picture::create( [
            'filename'=>'Stieglitz_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $stieglitz_2 = Picture::create( [
            'filename'=>'Stieglitz_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $stockente_1 = Picture::create( [
            'filename'=>'Stockente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $stockente_2 = Picture::create( [
            'filename'=>'Stockente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $strassentaube_1 = Picture::create( [
            'filename'=>'Strassentaube_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $strassentaube_2 = Picture::create( [
            'filename'=>'Strassentaube_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $strassentaube_3 = Picture::create( [
            'filename'=>'Strassentaube_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $strassentaube_4 = Picture::create( [
            'filename'=>'Strassentaube_4.jpg',
            'caption'=>'Legende 4',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $stroemung_1 = Picture::create( [
            'filename'=>'stroemung_1.jpg',
            'caption'=>'Bachlauf mit abwechslungsreicher Strömung',
            'author'=>'SVS/BirdLife Schweiz',
            'website'=>''
        ] );

        $sturmmoewe_1 = Picture::create( [
            'filename'=>'Sturmmoewe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sturmmoewe_2 = Picture::create( [
            'filename'=>'Sturmmoewe_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sumpfmeise_1 = Picture::create( [
            'filename'=>'Sumpfmeise_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $sumpfrohrsaenger_1 = Picture::create( [
            'filename'=>'Sumpfrohrsaenger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tafelente_1 = Picture::create( [
            'filename'=>'Tafelente_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tafelente_2 = Picture::create( [
            'filename'=>'Tafelente_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tannenhaeher_1 = Picture::create( [
            'filename'=>'Tannenhaeher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tannenhaeher_2 = Picture::create( [
            'filename'=>'Tannenhaeher_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tannenmeise_1 = Picture::create( [
            'filename'=>'Tannenmeise_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $teichhuhn_1 = Picture::create( [
            'filename'=>'Teichhuhn_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $teichhuhn_2 = Picture::create( [
            'filename'=>'Teichhuhn_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $teichrohrsaenger_1 = Picture::create( [
            'filename'=>'Teichrohrsaenger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $temminckstrandlaeufer_1 = Picture::create( [
            'filename'=>'Temminckstrandlaeufer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $trauerschnaepper_1 = Picture::create( [
            'filename'=>'Trauerschnaepper_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $trauerschnaepper_2 = Picture::create( [
            'filename'=>'Trauerschnaepper_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $trauerseeschwalbe_1 = Picture::create( [
            'filename'=>'Trauerseeschwalbe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tuepfelsumpfhuhn_1 = Picture::create( [
            'filename'=>'Tuepfelsumpfhuhn_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $tuerkentaube_1 = Picture::create( [
            'filename'=>'Tuerkentaube_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $turmfalke_1 = Picture::create( [
            'filename'=>'Turmfalke_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $turmfalke_2 = Picture::create( [
            'filename'=>'Turmfalke_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $turmfalke_3 = Picture::create( [
            'filename'=>'Turmfalke_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $turteltaube_1 = Picture::create( [
            'filename'=>'Turteltaube_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $uferschnepfe_1 = Picture::create( [
            'filename'=>'Uferschnepfe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $uferschwalbe_1 = Picture::create( [
            'filename'=>'Uferschwalbe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $uferschwalbe_2 = Picture::create( [
            'filename'=>'Uferschwalbe_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wacholderdrossel_1 = Picture::create( [
            'filename'=>'Wacholderdrossel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wachtelkoenig_1 = Picture::create( [
            'filename'=>'Wachtelkoenig_1.jpg',
            'caption'=>'Altvogel',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.com'
        ] );

        $wachtel_1 = Picture::create( [
            'filename'=>'Wachtel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'J. Bohdal',
            'website'=>'http://www.naturfoto-cz.de'
        ] );

        $waldbaumlaeufer_1 = Picture::create( [
            'filename'=>'Waldbaumlaeufer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $waldkauz_1 = Picture::create( [
            'filename'=>'Waldkauz_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'SVS',
            'website'=>''
        ] );

        $waldlaubsaenger_1 =Picture::create( [
            'filename'=>'Waldlaubsaenger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $waldohreule_1 = Picture::create( [
            'filename'=>'Waldohreule_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $waldschnepfe_1 = Picture::create( [
            'filename'=>'Waldschnepfe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'L. Senja',
            'website'=>'http://www.naturfoto-cz.de'
        ] );

        $waldwasserlaeufer_1 = Picture::create( [
            'filename'=>'Waldwasserlaeufer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wanderfalke_1 = Picture::create( [
            'filename'=>'Wanderfalke_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wasseramsel_1 = Picture::create( [
            'filename'=>'Wasseramsel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wasserralle_1 = Picture::create( [
            'filename'=>'Wasserralle_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $weidenmeise_1 = Picture::create( [
            'filename'=>'Weidenmeise_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $weissstorch_1 = Picture::create( [
            'filename'=>'Weissstorch_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $weissstorch_2 = Picture::create( [
            'filename'=>'Weissstorch_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wendehals_1 = Picture::create( [
            'filename'=>'Wendehals_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wespenbussard_1 = Picture::create( [
            'filename'=>'Wespenbussard_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wiedehopf_1 = Picture::create( [
            'filename'=>'Wiedehopf_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wiedehopf_2 = Picture::create( [
            'filename'=>'Wiedehopf_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wiesenpieper_1 = Picture::create( [
            'filename'=>'Wiesenpieper_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wiesenweihe_1 = Picture::create( [
            'filename'=>'Wiesenweihe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $wintergoldhaehnchen_1 = Picture::create( [
            'filename'=>'Wintergoldhaehnchen_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zaunkoenig_1 = Picture::create( [
            'filename'=>'Zaunkoenig_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $ziegenmelker_1 = Picture::create( [
            'filename'=>'Ziegenmelker_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zilpzalp_1 = Picture::create( [
            'filename'=>'Zilpzalp_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zippammer_1 = Picture::create( [
            'filename'=>'Zippammer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zitronenzeisig_1 = Picture::create( [
            'filename'=>'Zitronenzeisig_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zitronenzeisig_2 = Picture::create( [
            'filename'=>'Zitronenzeisig_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergdommel_1 = Picture::create( [
            'filename'=>'Zwergdommel_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergdommel_2 = Picture::create( [
            'filename'=>'Zwergdommel_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergmoewe_1 = Picture::create( [
            'filename'=>'Zwergmoewe_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergsaeger_1 =Picture::create( [
            'filename'=>'Zwergsaeger_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergsaeger_2 = Picture::create( [
            'filename'=>'Zwergsaeger_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergsaeger_3 = Picture::create( [
            'filename'=>'Zwergsaeger_3.jpg',
            'caption'=>'Legende 3',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergstrandlaeufer_1 = Picture::create( [
            'filename'=>'Zwergstrandlaeufer_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergstrandlaeufer_2 = Picture::create( [
            'filename'=>'Zwergstrandlaeufer_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergtaucher_1 = Picture::create( [
            'filename'=>'Zwergtaucher_1.jpg',
            'caption'=>'Legende 1',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );

        $zwergtaucher_2 = Picture::create( [
            'filename'=>'Zwergtaucher_2.jpg',
            'caption'=>'Legende 2',
            'author'=>'M. Gerber',
            'website'=>'http://www.birds-online.ch'
        ] );
        //</editor-fold>

        //<editor-fold desc="Birds">
        $bird1 = Bird::create( [
            'name' => 'Podiceps nigricollis',
            'name_de' => '',
            'name_fr' => 'Grèbe à cou noir',
            'name_it' => 'Svasso piccolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird1->pictures()->save($schwarzhalstaucher_1);
        $bird1->pictures()->save($schwarzhalstaucher_2);
        $bird1->habitats()->attach($gewaesser);
        $bird1->family()->associate($podicipedidae);
        $bird1->order()->associate($podicipediformes);
        $bird1->plumageColors()->save($schwarz);
        $bird1->plumageColors()->save($grau);
        $bird1->plumageColors()->save($weiss);
        $bird1->plumageColors()->save($braun);
        $bird1->plumageColors()->save($orange);
        $bird1->legsColors()->save($schwarz);
        $bird1->legsColors()->save($braun);
        $bird1->beakColors()->save($schwarz);
        $bird1->beakShapes()->attach($normal);
        $bird1->beakShapes()->attach($lang_dolchfoermig);
        $bird1->sizes()->attach($amsel_taube);
        $bird1->save();

        $bird2 = Bird::create( [
            'name' => 'Tachybaptus ruficollis',
            'name_de' => '',
            'name_fr' => 'Grèbe castagneux',
            'name_it' => 'Tuffetto',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird2->pictures()->save($zwergtaucher_1);
        $bird2->pictures()->save($zwergtaucher_2);
        $bird2->habitats()->attach($gewaesser);
        $bird2->family()->associate($podicipedidae);
        $bird2->order()->associate($podicipediformes);
        $bird2->plumageColors()->save($schwarz);
        $bird2->plumageColors()->save($weiss);
        $bird2->plumageColors()->save($beige);
        $bird2->plumageColors()->save($braun);
        $bird2->plumageColors()->save($rot);
        $bird2->legsColors()->save($schwarz);
        $bird2->legsColors()->save($braun);
        $bird2->beakColors()->save($schwarz);
        $bird2->beakShapes()->attach($normal);
        $bird2->beakShapes()->attach($lang_dolchfoermig);
        $bird2->sizes()->attach($amsel_taube);
        $bird2->save();

        $bird3 = Bird::create( [
            'name' => 'Podiceps cristatus',
            'name_de' => '',
            'name_fr' => 'Grèbe huppé',
            'name_it' => 'Svasso maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird3->pictures()->save($haubentaucher_1);
        $bird3->pictures()->save($haubentaucher_2);
        $bird3->pictures()->save($haubentaucher_3);
        $bird3->habitats()->attach($siedlungsraum);
        $bird3->habitats()->attach($gewaesser);
        $bird3->family()->associate($podicipedidae);
        $bird3->order()->associate($podicipediformes);
        $bird3->plumageColors()->save($schwarz);
        $bird3->plumageColors()->save($grau);
        $bird3->plumageColors()->save($weiss);
        $bird3->plumageColors()->save($beige);
        $bird3->plumageColors()->save($braun);
        $bird3->plumageColors()->save($orange);
        $bird3->legsColors()->save($schwarz);
        $bird3->legsColors()->save($braun);
        $bird3->beakColors()->save($schwarz);
        $bird3->beakColors()->save($braun);
        $bird3->beakColors()->save($rot);
        $bird3->beakShapes()->attach($lang_dolchfoermig);
        $bird3->sizes()->attach($taube_stockente);
        $bird3->save();

        $bird4 = Bird::create( [
            'name' => 'Podiceps grisegena',
            'name_de' => '',
            'name_fr' => 'Grèbe jougris',
            'name_it' => 'Svasso collorosso',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird4->pictures()->save($rothalstaucher_1);
        $bird4->habitats()->attach($gewaesser);
        $bird4->family()->associate($podicipedidae);
        $bird4->order()->associate($podicipediformes);
        $bird4->plumageColors()->save($schwarz);
        $bird4->plumageColors()->save($grau);
        $bird4->plumageColors()->save($weiss);
        $bird4->plumageColors()->save($beige);
        $bird4->plumageColors()->save($braun);
        $bird4->plumageColors()->save($rot);
        $bird4->legsColors()->save($schwarz);
        $bird4->beakColors()->save($schwarz);
        $bird4->beakColors()->save($gelb);
        $bird4->beakShapes()->attach($lang_dolchfoermig);
        $bird4->sizes()->attach($taube_stockente);
        $bird4->save();

        $bird5 = Bird::create( [
            'name' => 'Phalacrocorax carbo',
            'name_de' => '',
            'name_fr' => 'Grand Cormoran',
            'name_it' => 'Cormorano',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird5->pictures()->save($kormoran_1);
        $bird5->pictures()->save($kormoran_2);
        $bird5->pictures()->save($kormoran_3);
        $bird5->habitats()->attach($gewaesser);
        $bird5->family()->associate($phalacrocoracidae);
        $bird5->order()->associate($pelecaniformes);
        $bird5->plumageColors()->save($schwarz);
        $bird5->plumageColors()->save($weiss);
        $bird5->plumageColors()->save($braun);
        $bird5->legsColors()->save($schwarz);
        $bird5->legsColors()->save($braun);
        $bird5->beakColors()->save($schwarz);
        $bird5->beakColors()->save($gelb);
        $bird5->beakShapes()->attach($lang_hakenfoermig);
        $bird5->sizes()->attach($stockente_);
        $bird5->save();

        $bird6 = Bird::create( [
            'name' => 'Botaurus stellaris',
            'name_de' => '',
            'name_fr' => 'Butor étoilé',
            'name_it' => 'Tarabuso',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird6->pictures()->save($rohrdommel_1);
        $bird6->habitats()->attach($gewaesser);
        $bird6->family()->associate($ardeidae);
        $bird6->order()->associate($ciconiiformes);
        $bird6->plumageColors()->save($schwarz);
        $bird6->plumageColors()->save($weiss);
        $bird6->plumageColors()->save($beige);
        $bird6->plumageColors()->save($braun);
        $bird6->legsColors()->save($braun);
        $bird6->legsColors()->save($rosa);
        $bird6->beakColors()->save($schwarz);
        $bird6->beakColors()->save($braun);
        $bird6->beakShapes()->attach($lang_dolchfoermig);
        $bird6->sizes()->attach($stockente_);
        $bird6->save();

        $bird7 = Bird::create( [
            'name' => 'Ixobrychus minutus',
            'name_de' => '',
            'name_fr' => 'Blongios nain',
            'name_it' => 'Tarabusino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird7->pictures()->save($zwergdommel_1);
        $bird7->pictures()->save($zwergdommel_2);
        $bird7->habitats()->attach($gewaesser);
        $bird7->family()->associate($ardeidae);
        $bird7->order()->associate($ciconiiformes);
        $bird7->plumageColors()->save($schwarz);
        $bird7->plumageColors()->save($weiss);
        $bird7->plumageColors()->save($beige);
        $bird7->plumageColors()->save($braun);
        $bird7->legsColors()->save($braun);
        $bird7->legsColors()->save($rosa);
        $bird7->beakColors()->save($schwarz);
        $bird7->beakColors()->save($braun);
        $bird7->beakColors()->save($gelb);
        $bird7->beakColors()->save($orange);
        $bird7->beakShapes()->attach($lang_dolchfoermig);
        $bird7->sizes()->attach($amsel_taube);
        $bird7->sizes()->attach($taube_stockente);
        $bird7->save();

        $bird8 = Bird::create( [
            'name' => 'Nycticorax nycticorax',
            'name_de' => '',
            'name_fr' => 'Bihoreau gris',
            'name_it' => 'Nitticora',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird8->pictures()->save($nachtreiher_1);
        $bird8->pictures()->save($nachtreiher_2);
        $bird8->habitats()->attach($gewaesser);
        $bird8->family()->associate($ardeidae);
        $bird8->order()->associate($ciconiiformes);
        $bird8->plumageColors()->save($schwarz);
        $bird8->plumageColors()->save($grau);
        $bird8->plumageColors()->save($weiss);
        $bird8->plumageColors()->save($braun);
        $bird8->plumageColors()->save($blau);
        $bird8->legsColors()->save($gelb);
        $bird8->beakColors()->save($schwarz);
        $bird8->beakShapes()->attach($lang_dolchfoermig);
        $bird8->sizes()->attach($stockente_);
        $bird8->save();

        $bird9 = Bird::create( [
            'name' => 'Egretta garzetta',
            'name_de' => '',
            'name_fr' => 'Aigrette garzette',
            'name_it' => 'Garzetta',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird9->pictures()->save($seidenreiher_1);
        $bird9->pictures()->save($seidenreiher_2);
        $bird9->habitats()->attach($gewaesser);
        $bird9->family()->associate($ardeidae);
        $bird9->order()->associate($ciconiiformes);
        $bird9->plumageColors()->save($weiss);
        $bird9->legsColors()->save($schwarz);
        $bird9->legsColors()->save($gelb);
        $bird9->beakColors()->save($schwarz);
        $bird9->beakShapes()->attach($lang_dolchfoermig);
        $bird9->sizes()->attach($stockente_);
        $bird9->save();

        $bird10 = Bird::create( [
            'name' => 'Egretta alba',
            'name_de' => '',
            'name_fr' => 'Grande Aigrette',
            'name_it' => 'Airone bianco maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird10->pictures()->save($silberreiher_1);
        $bird10->pictures()->save($silberreiher_2);
        $bird10->habitats()->attach($wiesen_und_weiden);
        $bird10->habitats()->attach($gewaesser);
        $bird10->family()->associate($ardeidae);
        $bird10->order()->associate($ciconiiformes);
        $bird10->plumageColors()->save($weiss);
        $bird10->legsColors()->save($schwarz);
        $bird10->legsColors()->save($gelb);
        $bird10->beakColors()->save($schwarz);
        $bird10->beakColors()->save($gelb);
        $bird10->beakShapes()->attach($lang_dolchfoermig);
        $bird10->sizes()->attach($stockente_);
        $bird10->save();

        $bird11 = Bird::create( [
            'name' => 'Ardea cinerea',
            'name_de' => '',
            'name_fr' => 'Héron cendré',
            'name_it' => 'Airone cenerino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> grand oiseau à dominante grise, cou clair gris-blanchu00e2tre, bandeau noir au-dessus de l\'oeil. Juvéniles avec calotte et front gris foncé.r<br /><br /><strong>Voix:</strong> cri rauque et croassant.r<br /><br /><strong>Distribution:</strong> cherche sa nourriture sur les rives de plans et cours d\'eau, dans les marais, les champs et les prairies.r<br /><br /><strong>Nourriture:</strong> chasse à l\'affut ou en marchant lentement des campagnols, grenouilles, poissons, insectes et autres petits animaux.r<br /><br /><strong>Nidification:</strong> construit un grand nid de branches et brindilles haut perché dans un arbre. Pond 4-5 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird11->pictures()->save($graureiher_1);
        $bird11->pictures()->save($graureiher_2);
        $bird11->pictures()->save($graureiher_3);
        $bird11->habitats()->attach($aecker_und_feldflur);
        $bird11->habitats()->attach($wiesen_und_weiden);
        $bird11->habitats()->attach($siedlungsraum);
        $bird11->habitats()->attach($gewaesser);
        $bird11->habitats()->attach($wald);
        $bird11->family()->associate($ardeidae);
        $bird11->order()->associate($ciconiiformes);
        $bird11->plumageColors()->save($schwarz);
        $bird11->plumageColors()->save($grau);
        $bird11->plumageColors()->save($weiss);
        $bird11->plumageColors()->save($beige);
        $bird11->legsColors()->save($grau);
        $bird11->legsColors()->save($braun);
        $bird11->legsColors()->save($gelb);
        $bird11->legsColors()->save($rot);
        $bird11->beakColors()->save($schwarz);
        $bird11->beakColors()->save($gelb);
        $bird11->beakColors()->save($rot);
        $bird11->beakShapes()->attach($lang_dolchfoermig);
        $bird11->sizes()->attach($stockente_);
        $bird11->save();

        $bird12 = Bird::create( [
            'name' => 'Ardea purpurea',
            'name_de' => '',
            'name_fr' => 'Héron pourpré',
            'name_it' => 'Airone rosso',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird12->pictures()->save($purpurreiher_1);
        $bird12->habitats()->attach($gewaesser);
        $bird12->family()->associate($ardeidae);
        $bird12->order()->associate($ciconiiformes);
        $bird12->plumageColors()->save($schwarz);
        $bird12->plumageColors()->save($grau);
        $bird12->plumageColors()->save($weiss);
        $bird12->plumageColors()->save($beige);
        $bird12->plumageColors()->save($braun);
        $bird12->legsColors()->save($grau);
        $bird12->legsColors()->save($braun);
        $bird12->legsColors()->save($gelb);
        $bird12->legsColors()->save($rosa);
        $bird12->beakColors()->save($grau);
        $bird12->beakColors()->save($gelb);
        $bird12->beakShapes()->attach($lang_dolchfoermig);
        $bird12->sizes()->attach($stockente_);
        $bird12->save();

        $bird13 = Bird::create( [
            'name' => 'Ciconia ciconia',
            'name_de' => '',
            'name_fr' => 'Cigogne blanche',
            'name_it' => 'Cicogna bianca',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird13->pictures()->save($weissstorch_1);
        $bird13->pictures()->save($weissstorch_2);
        $bird13->habitats()->attach($aecker_und_feldflur);
        $bird13->habitats()->attach($wiesen_und_weiden);
        $bird13->habitats()->attach($siedlungsraum);
        $bird13->habitats()->attach($gewaesser);
        $bird13->family()->associate($ciconiidae);
        $bird13->order()->associate($ciconiiformes);
        $bird13->plumageColors()->save($schwarz);
        $bird13->plumageColors()->save($weiss);
        $bird13->legsColors()->save($orange);
        $bird13->legsColors()->save($rot);
        $bird13->beakColors()->save($rot);
        $bird13->beakShapes()->attach($lang_dolchfoermig);
        $bird13->sizes()->attach($stockente_);
        $bird13->save();

        $bird14 = Bird::create( [
            'name' => 'Ciconia nigra',
            'name_de' => '',
            'name_fr' => 'Cigogne noire',
            'name_it' => 'Cicogna nera',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird14->pictures()->save($schwarzstorch_1);
        $bird14->pictures()->save($schwarzstorch_2);
        $bird14->habitats()->attach($gewaesser);
        $bird14->family()->associate($ciconiidae);
        $bird14->order()->associate($ciconiiformes);
        $bird14->plumageColors()->save($schwarz);
        $bird14->plumageColors()->save($weiss);
        $bird14->plumageColors()->save($braun);
        $bird14->legsColors()->save($orange);
        $bird14->legsColors()->save($rot);
        $bird14->beakColors()->save($rot);
        $bird14->beakShapes()->attach($lang_dolchfoermig);
        $bird14->sizes()->attach($stockente_);
        $bird14->save();

        $bird15 = Bird::create( [
            'name' => 'Cygnus olor',
            'name_de' => '',
            'name_fr' => 'Cygne tuberculé',
            'name_it' => 'Cigno reale',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> très grand oiseau d\'eau au plumage blanc. Les juvéniles sont gris ou gris-brun.r<br /><br /><strong>Voix:</strong> le cri est un «vhorr» soufflé. Lors d\'agressions, il siffle comme un serpent.r<br /><br /><strong>Distribution:</strong> fréquent sur les grands étangs, les lacs et les rivières, aussi en zone urbaine.r<br /><br /><strong>Nourriture:</strong> essentiellement diverses plantes aquatiques et terrestres.r<br /><br /><strong>Nidification:</strong> le nid est un grand tas de matériel végétal, sur les rives ou dans l\'eau peu profonde. 5-8 oeufs y sont pondus.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird15->pictures()->save($hoeckerschwan_1);
        $bird15->pictures()->save($hoeckerschwan_2);
        $bird15->habitats()->attach($aecker_und_feldflur);
        $bird15->habitats()->attach($wiesen_und_weiden);
        $bird15->habitats()->attach($siedlungsraum);
        $bird15->habitats()->attach($gewaesser);
        $bird15->family()->associate($cygnini);
        $bird15->order()->associate($anseriformes);
        $bird15->plumageColors()->save($grau);
        $bird15->plumageColors()->save($weiss);
        $bird15->plumageColors()->save($braun);
        $bird15->legsColors()->save($schwarz);
        $bird15->beakColors()->save($schwarz);
        $bird15->beakColors()->save($grau);
        $bird15->beakColors()->save($orange);
        $bird15->beakShapes()->attach($entenschnabel);
        $bird15->sizes()->attach($stockente_);
        $bird15->save();

        $bird16 = Bird::create( [
            'name' => 'Cygnus cygnus',
            'name_de' => '',
            'name_fr' => 'Cygne chanteur',
            'name_it' => 'Cigno selvatico',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird16->pictures()->save($singschwan_1);
        $bird16->pictures()->save($singschwan_2);
        $bird16->family()->associate($cygnini);
        $bird16->order()->associate($anseriformes);
        $bird16->plumageColors()->save($grau);
        $bird16->plumageColors()->save($weiss);
        $bird16->plumageColors()->save($braun);
        $bird16->legsColors()->save($schwarz);
        $bird16->beakColors()->save($schwarz);
        $bird16->beakColors()->save($grau);
        $bird16->beakColors()->save($gelb);
        $bird16->beakShapes()->attach($entenschnabel);
        $bird16->sizes()->attach($stockente_);
        $bird16->save();

        $bird17 = Bird::create( [
            'name' => 'Anser anser',
            'name_de' => '',
            'name_fr' => 'Oie cendrée',
            'name_it' => 'Oca selvatica',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird17->pictures()->save($graugans_1);
        $bird17->habitats()->attach($aecker_und_feldflur);
        $bird17->habitats()->attach($wiesen_und_weiden);
        $bird17->habitats()->attach($gewaesser);
        $bird17->family()->associate($anserini);
        $bird17->order()->associate($anseriformes);
        $bird17->plumageColors()->save($grau);
        $bird17->plumageColors()->save($weiss);
        $bird17->plumageColors()->save($beige);
        $bird17->plumageColors()->save($braun);
        $bird17->legsColors()->save($rosa);
        $bird17->beakColors()->save($orange);
        $bird17->beakColors()->save($rosa);
        $bird17->beakShapes()->attach($entenschnabel);
        $bird17->sizes()->attach($stockente_);
        $bird17->save();

        $bird18 = Bird::create( [
            'name' => 'Anser fabalis',
            'name_de' => '',
            'name_fr' => 'Oie des moissons ',
            'name_it' => 'Oca granaiola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird18->pictures()->save($saatgans_1);
        $bird18->habitats()->attach($aecker_und_feldflur);
        $bird18->habitats()->attach($wiesen_und_weiden);
        $bird18->habitats()->attach($gewaesser);
        $bird18->family()->associate($anserini);
        $bird18->order()->associate($anseriformes);
        $bird18->plumageColors()->save($grau);
        $bird18->plumageColors()->save($weiss);
        $bird18->plumageColors()->save($beige);
        $bird18->plumageColors()->save($braun);
        $bird18->legsColors()->save($orange);
        $bird18->beakColors()->save($orange);
        $bird18->beakColors()->save($schwarz);
        $bird18->beakColors()->save($grau);
        $bird18->beakShapes()->attach($entenschnabel);
        $bird18->sizes()->attach($stockente_);
        $bird18->save();

        $bird19 = Bird::create( [
            'name' => 'Anser albifrons',
            'name_de' => '',
            'name_fr' => 'Oie rieuse ',
            'name_it' => 'Oca lombardella',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird19->pictures()->save($blaessgans_1);
        $bird19->pictures()->save($blaessgans_2);
        $bird19->pictures()->save($blaessgans_3);
        $bird19->habitats()->attach($aecker_und_feldflur);
        $bird19->habitats()->attach($wiesen_und_weiden);
        $bird19->habitats()->attach($gewaesser);
        $bird19->family()->associate($anserini);
        $bird19->order()->associate($anseriformes);
        $bird19->plumageColors()->save($schwarz);
        $bird19->plumageColors()->save($grau);
        $bird19->plumageColors()->save($weiss);
        $bird19->plumageColors()->save($beige);
        $bird19->plumageColors()->save($braun);
        $bird19->legsColors()->save($orange);
        $bird19->beakColors()->save($orange);
        $bird19->beakColors()->save($rosa);
        $bird19->beakColors()->save($weiss);
        $bird19->beakColors()->save($schwarz);
        $bird19->beakShapes()->attach($entenschnabel);
        $bird19->sizes()->attach($stockente_);
        $bird19->save();

        $bird20 = Bird::create( [
            'name' => 'Tadorna tadorna',
            'name_de' => '',
            'name_fr' => 'Tadorne de Belon',
            'name_it' => 'Volpoca',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird20->pictures()->save($brandgans_1);
        $bird20->pictures()->save($brandgans_2);
        $bird20->habitats()->attach($wiesen_und_weiden);
        $bird20->habitats()->attach($gewaesser);
        $bird20->family()->associate($tadornini);
        $bird20->order()->associate($anseriformes);
        $bird20->plumageColors()->save($schwarz);
        $bird20->plumageColors()->save($weiss);
        $bird20->plumageColors()->save($beige);
        $bird20->plumageColors()->save($braun);
        $bird20->plumageColors()->save($orange);
        $bird20->legsColors()->save($rot);
        $bird20->beakColors()->save($rot);
        $bird20->beakShapes()->attach($entenschnabel);
        $bird20->sizes()->attach($stockente_);
        $bird20->save();

        $bird21 = Bird::create( [
            'name' => 'Tadorna ferruginea',
            'name_de' => '',
            'name_fr' => 'Tadorne casarca',
            'name_it' => 'Casarca',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird21->pictures()->save($rostgans_1);
        $bird21->pictures()->save($rostgans_2);
        $bird21->habitats()->attach($wiesen_und_weiden);
        $bird21->habitats()->attach($gewaesser);
        $bird21->family()->associate($tadornini);
        $bird21->order()->associate($anseriformes);
        $bird21->plumageColors()->save($schwarz);
        $bird21->plumageColors()->save($weiss);
        $bird21->plumageColors()->save($beige);
        $bird21->plumageColors()->save($braun);
        $bird21->plumageColors()->save($orange);
        $bird21->legsColors()->save($schwarz);
        $bird21->beakColors()->save($schwarz);
        $bird21->beakShapes()->attach($entenschnabel);
        $bird21->sizes()->attach($stockente_);
        $bird21->save();

        $bird22 = Bird::create( [
            'name' => 'Alopochen aegyptiaca',
            'name_de' => '',
            'name_fr' => 'Ouette d\'Egypte',
            'name_it' => 'Oca egiziana',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird22->pictures()->save($nilgans_1);
        $bird22->pictures()->save($nilgans_2);
        $bird22->habitats()->attach($wiesen_und_weiden);
        $bird22->habitats()->attach($gewaesser);
        $bird22->family()->associate($tadornini);
        $bird22->order()->associate($anseriformes);
        $bird22->plumageColors()->save($schwarz);
        $bird22->plumageColors()->save($grau);
        $bird22->plumageColors()->save($weiss);
        $bird22->plumageColors()->save($beige);
        $bird22->plumageColors()->save($braun);
        $bird22->plumageColors()->save($orange);
        $bird22->plumageColors()->save($gruen);
        $bird22->legsColors()->save($rot);
        $bird22->legsColors()->save($rosa);
        $bird22->beakColors()->save($schwarz);
        $bird22->beakColors()->save($rosa);
        $bird22->beakShapes()->attach($entenschnabel);
        $bird22->sizes()->attach($stockente_);
        $bird22->save();

        $bird23 = Bird::create( [
            'name' => 'Aix galericulata',
            'name_de' => '',
            'name_fr' => 'Canard mandarin',
            'name_it' => 'Anatra mandarina',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird23->pictures()->save($mandarinente_1);
        $bird23->pictures()->save($mandarinente_2);
        $bird23->habitats()->attach($gewaesser);
        $bird23->family()->associate($anatini);
        $bird23->order()->associate($anseriformes);
        $bird23->plumageColors()->save($schwarz);
        $bird23->plumageColors()->save($grau);
        $bird23->plumageColors()->save($weiss);
        $bird23->plumageColors()->save($beige);
        $bird23->plumageColors()->save($braun);
        $bird23->plumageColors()->save($orange);
        $bird23->plumageColors()->save($blau);
        $bird23->plumageColors()->save($gruen);
        $bird23->legsColors()->save($braun);
        $bird23->legsColors()->save($orange);
        $bird23->beakColors()->save($schwarz);
        $bird23->beakColors()->save($braun);
        $bird23->beakColors()->save($rot);
        $bird23->beakColors()->save($rosa);
        $bird23->beakShapes()->attach($entenschnabel);
        $bird23->sizes()->attach($taube_stockente);
        $bird23->save();

        $bird24 = Bird::create( [
            'name' => 'Anas platyrhynchos',
            'name_de' => '',
            'name_fr' => 'Canard colvert',
            'name_it' => 'Germano reale',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> mu00e2le avec bec jaune, tête vert bouteille, collier blanc autour du cou et poitrine brune. La femelle a un plumage brun plus discret. r<br /><br /><strong>Voix:</strong> cancanement typique de canard «coin-coin-coin».r<br /><br /><strong>Distribution:</strong> on observe les colverts sur tous les types de plans et cours d\'eau, aussi dans les villes et les villages.r<br /><br /><strong>Nourriture:</strong> diverses plantes aquatiques et terrestres, insectes, vers, autres petits animaux.r<br /><br /><strong>Nidification:</strong> nid avec 7-11 oeufs, généralement planqué dans la végétation des rives, parfois aussi dans les bacs à fleurs sur les balcons.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird24->pictures()->save($stockente_1);
        $bird24->pictures()->save($stockente_2);
        $bird24->habitats()->attach($siedlungsraum);
        $bird24->habitats()->attach($gewaesser);
        $bird24->family()->associate($anatini);
        $bird24->order()->associate($anseriformes);
        $bird24->plumageColors()->save($schwarz);
        $bird24->plumageColors()->save($grau);
        $bird24->plumageColors()->save($weiss);
        $bird24->plumageColors()->save($beige);
        $bird24->plumageColors()->save($braun);
        $bird24->plumageColors()->save($blau);
        $bird24->plumageColors()->save($gruen);
        $bird24->legsColors()->save($braun);
        $bird24->legsColors()->save($orange);
        $bird24->beakColors()->save($schwarz);
        $bird24->beakColors()->save($braun);
        $bird24->beakColors()->save($gelb);
        $bird24->beakColors()->save($orange);
        $bird24->beakShapes()->attach($entenschnabel);
        $bird24->sizes()->attach($taube_stockente);
        $bird24->save();

        $bird25 = Bird::create( [
            'name' => 'Anas strepera',
            'name_de' => '',
            'name_fr' => 'Canard chipeau',
            'name_it' => 'Canapiglia',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird25->pictures()->save($schnatterente_1);
        $bird25->pictures()->save($schnatterente_2);
        $bird25->habitats()->attach($gewaesser);
        $bird25->family()->associate($anatini);
        $bird25->order()->associate($anseriformes);
        $bird25->plumageColors()->save($schwarz);
        $bird25->plumageColors()->save($weiss);
        $bird25->plumageColors()->save($beige);
        $bird25->plumageColors()->save($braun);
        $bird25->plumageColors()->save($grau);
        $bird25->legsColors()->save($gelb);
        $bird25->legsColors()->save($orange);
        $bird25->beakColors()->save($schwarz);
        $bird25->beakColors()->save($orange);
        $bird25->beakShapes()->attach($entenschnabel);
        $bird25->sizes()->attach($taube_stockente);
        $bird25->save();

        $bird26 = Bird::create( [
            'name' => 'Anas acuta',
            'name_de' => '',
            'name_fr' => 'Canard pilet',
            'name_it' => 'Codone',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird26->pictures()->save($spiessente_1);
        $bird26->pictures()->save($spiessente_2);
        $bird26->habitats()->attach($gewaesser);
        $bird26->family()->associate($anatini);
        $bird26->order()->associate($anseriformes);
        $bird26->plumageColors()->save($schwarz);
        $bird26->plumageColors()->save($grau);
        $bird26->plumageColors()->save($weiss);
        $bird26->plumageColors()->save($beige);
        $bird26->plumageColors()->save($braun);
        $bird26->plumageColors()->save($gelb);
        $bird26->legsColors()->save($schwarz);
        $bird26->legsColors()->save($braun);
        $bird26->beakColors()->save($schwarz);
        $bird26->beakColors()->save($blau);
        $bird26->beakShapes()->attach($entenschnabel);
        $bird26->sizes()->attach($taube_stockente);
        $bird26->sizes()->attach($stockente_);
        $bird26->save();

        $bird27 = Bird::create( [
            'name' => 'Anas clypeata',
            'name_de' => '',
            'name_fr' => 'Canard souchet',
            'name_it' => 'Mestolone',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird27->pictures()->save($loeffelente_1);
        $bird27->pictures()->save($loeffelente_2);
        $bird27->habitats()->attach($gewaesser);
        $bird27->family()->associate($anatini);
        $bird27->order()->associate($anseriformes);
        $bird27->plumageColors()->save($schwarz);
        $bird27->plumageColors()->save($grau);
        $bird27->plumageColors()->save($weiss);
        $bird27->plumageColors()->save($beige);
        $bird27->plumageColors()->save($braun);
        $bird27->plumageColors()->save($orange);
        $bird27->plumageColors()->save($gruen);
        $bird27->legsColors()->save($orange);
        $bird27->beakColors()->save($schwarz);
        $bird27->beakColors()->save($braun);
        $bird27->beakColors()->save($orange);
        $bird27->beakShapes()->attach($entenschnabel);
        $bird27->sizes()->attach($taube_stockente);
        $bird27->sizes()->attach($stockente_);
        $bird27->save();

        $bird28 = Bird::create( [
            'name' => 'Anas penelope',
            'name_de' => '',
            'name_fr' => 'Canard siffleur',
            'name_it' => 'Fischione',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird28->pictures()->save($pfeifente_1);
        $bird28->pictures()->save($pfeifente_2);
        $bird28->habitats()->attach($gewaesser);
        $bird28->family()->associate($anatini);
        $bird28->order()->associate($anseriformes);
        $bird28->plumageColors()->save($schwarz);
        $bird28->plumageColors()->save($grau);
        $bird28->plumageColors()->save($weiss);
        $bird28->plumageColors()->save($braun);
        $bird28->plumageColors()->save($gelb);
        $bird28->plumageColors()->save($orange);
        $bird28->plumageColors()->save($rosa);
        $bird28->plumageColors()->save($gruen);
        $bird28->legsColors()->save($schwarz);
        $bird28->legsColors()->save($braun);
        $bird28->beakColors()->save($schwarz);
        $bird28->beakColors()->save($grau);
        $bird28->beakShapes()->attach($entenschnabel);
        $bird28->sizes()->attach($taube_stockente);
        $bird28->save();

        $bird29 = Bird::create( [
            'name' => 'Anas crecca',
            'name_de' => '',
            'name_fr' => 'Sarcelle d`hiver',
            'name_it' => 'Alzavola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird29->pictures()->save($krickente_1);
        $bird29->pictures()->save($krickente_2);
        $bird29->habitats()->attach($gewaesser);
        $bird29->family()->associate($anatini);
        $bird29->order()->associate($anseriformes);
        $bird29->plumageColors()->save($schwarz);
        $bird29->plumageColors()->save($grau);
        $bird29->plumageColors()->save($weiss);
        $bird29->plumageColors()->save($beige);
        $bird29->plumageColors()->save($braun);
        $bird29->plumageColors()->save($gelb);
        $bird29->plumageColors()->save($gruen);
        $bird29->legsColors()->save($schwarz);
        $bird29->legsColors()->save($braun);
        $bird29->beakColors()->save($schwarz);
        $bird29->beakColors()->save($braun);
        $bird29->beakColors()->save($orange);
        $bird29->beakShapes()->attach($entenschnabel);
        $bird29->sizes()->attach($taube_stockente);
        $bird29->save();

        $bird30 = Bird::create( [
            'name' => 'Anas querquedula',
            'name_de' => '',
            'name_fr' => 'Sarcelle d`été',
            'name_it' => 'Marzaiola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird30->pictures()->save($knaekente_1);
        $bird30->pictures()->save($knaekente_2);
        $bird30->habitats()->attach($gewaesser);
        $bird30->family()->associate($anatini);
        $bird30->order()->associate($anseriformes);
        $bird30->plumageColors()->save($schwarz);
        $bird30->plumageColors()->save($grau);
        $bird30->plumageColors()->save($weiss);
        $bird30->plumageColors()->save($beige);
        $bird30->plumageColors()->save($braun);
        $bird30->plumageColors()->save($blau);
        $bird30->legsColors()->save($schwarz);
        $bird30->legsColors()->save($braun);
        $bird30->beakColors()->save($schwarz);
        $bird30->beakColors()->save($braun);
        $bird30->beakShapes()->attach($entenschnabel);
        $bird30->sizes()->attach($taube_stockente);
        $bird30->save();

        $bird31 = Bird::create( [
            'name' => 'Netta rufina',
            'name_de' => '',
            'name_fr' => 'Nette Rousse',
            'name_it' => 'Fistione turco',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird31->pictures()->save($kolbenente_1);
        $bird31->pictures()->save($kolbenente_2);
        $bird31->habitats()->attach($gewaesser);
        $bird31->family()->associate($aythyini);
        $bird31->order()->associate($anseriformes);
        $bird31->plumageColors()->save($schwarz);
        $bird31->plumageColors()->save($grau);
        $bird31->plumageColors()->save($weiss);
        $bird31->plumageColors()->save($beige);
        $bird31->plumageColors()->save($braun);
        $bird31->plumageColors()->save($orange);
        $bird31->legsColors()->save($schwarz);
        $bird31->beakColors()->save($grau);
        $bird31->beakColors()->save($rot);
        $bird31->beakColors()->save($rosa);
        $bird31->beakShapes()->attach($entenschnabel);
        $bird31->sizes()->attach($taube_stockente);
        $bird31->save();

        $bird32 = Bird::create( [
            'name' => 'Aythya ferina',
            'name_de' => '',
            'name_fr' => 'Fuligule milouin',
            'name_it' => 'Moriglione',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird32->pictures()->save($tafelente_1);
        $bird32->pictures()->save($tafelente_2);
        $bird32->habitats()->attach($gewaesser);
        $bird32->family()->associate($aythyini);
        $bird32->order()->associate($anseriformes);
        $bird32->plumageColors()->save($schwarz);
        $bird32->plumageColors()->save($grau);
        $bird32->plumageColors()->save($weiss);
        $bird32->plumageColors()->save($braun);
        $bird32->plumageColors()->save($rot);
        $bird32->legsColors()->save($schwarz);
        $bird32->beakColors()->save($schwarz);
        $bird32->beakShapes()->attach($entenschnabel);
        $bird32->sizes()->attach($taube_stockente);
        $bird32->save();

        $bird33 = Bird::create( [
            'name' => 'Aythya nyroca',
            'name_de' => '',
            'name_fr' => 'Fuligule nyroca',
            'name_it' => 'Moretta tabaccata',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird33->pictures()->save($moorente_1);
        $bird33->pictures()->save($moorente_2);
        $bird33->habitats()->attach($gewaesser);
        $bird33->family()->associate($aythyini);
        $bird33->order()->associate($anseriformes);
        $bird33->plumageColors()->save($weiss);
        $bird33->plumageColors()->save($braun);
        $bird33->legsColors()->save($schwarz);
        $bird33->beakColors()->save($schwarz);
        $bird33->beakColors()->save($grau);
        $bird33->beakShapes()->attach($entenschnabel);
        $bird33->sizes()->attach($taube_stockente);
        $bird33->save();

        $bird34 = Bird::create( [
            'name' => 'Aythya marila',
            'name_de' => '',
            'name_fr' => 'Fuligule milouinan',
            'name_it' => 'Moretta grigia',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird34->pictures()->save($bergente_1);
        $bird34->pictures()->save($bergente_2);
        $bird34->habitats()->attach($gewaesser);
        $bird34->family()->associate($aythyini);
        $bird34->order()->associate($anseriformes);
        $bird34->plumageColors()->save($schwarz);
        $bird34->plumageColors()->save($grau);
        $bird34->plumageColors()->save($weiss);
        $bird34->plumageColors()->save($braun);
        $bird34->legsColors()->save($schwarz);
        $bird34->beakColors()->save($schwarz);
        $bird34->beakColors()->save($grau);
        $bird34->beakShapes()->attach($entenschnabel);
        $bird34->sizes()->attach($taube_stockente);
        $bird34->save();

        $bird35 = Bird::create( [
            'name' => 'Aythya fuligula',
            'name_de' => '',
            'name_fr' => 'Fuligule morillon',
            'name_it' => 'Moretta',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird35->pictures()->save($reiherente_1);
        $bird35->pictures()->save($reiherente_2);
        $bird35->habitats()->attach($siedlungsraum);
        $bird35->habitats()->attach($gewaesser);
        $bird35->family()->associate($aythyini);
        $bird35->order()->associate($anseriformes);
        $bird35->plumageColors()->save($schwarz);
        $bird35->plumageColors()->save($grau);
        $bird35->plumageColors()->save($weiss);
        $bird35->plumageColors()->save($braun);
        $bird35->legsColors()->save($schwarz);
        $bird35->beakColors()->save($schwarz);
        $bird35->beakColors()->save($grau);
        $bird35->beakShapes()->attach($entenschnabel);
        $bird35->sizes()->attach($taube_stockente);
        $bird35->save();

        $bird36 = Bird::create( [
            'name' => 'Somateria mollissima',
            'name_de' => '',
            'name_fr' => 'Eider à duvet',
            'name_it' => 'Edredone',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird36->pictures()->save($eiderente_1);
        $bird36->pictures()->save($eiderente_2);
        $bird36->habitats()->attach($gewaesser);
        $bird36->family()->associate($mergini);
        $bird36->order()->associate($anseriformes);
        $bird36->plumageColors()->save($schwarz);
        $bird36->plumageColors()->save($grau);
        $bird36->plumageColors()->save($weiss);
        $bird36->plumageColors()->save($braun);
        $bird36->plumageColors()->save($rosa);
        $bird36->plumageColors()->save($gruen);
        $bird36->legsColors()->save($schwarz);
        $bird36->legsColors()->save($braun);
        $bird36->beakColors()->save($schwarz);
        $bird36->beakColors()->save($gruen);
        $bird36->beakShapes()->attach($entenschnabel);
        $bird36->sizes()->attach($stockente_);
        $bird36->save();

        $bird37 = Bird::create( [
            'name' => 'Bucephala clangula',
            'name_de' => '',
            'name_fr' => 'Garrot à d`oil',
            'name_it' => 'Quattrocchi',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird37->pictures()->save($schellente_1);
        $bird37->pictures()->save($schellente_2);
        $bird37->habitats()->attach($gewaesser);
        $bird37->family()->associate($mergini);
        $bird37->order()->associate($anseriformes);
        $bird37->plumageColors()->save($schwarz);
        $bird37->plumageColors()->save($grau);
        $bird37->plumageColors()->save($weiss);
        $bird37->plumageColors()->save($braun);
        $bird37->plumageColors()->save($gruen);
        $bird37->legsColors()->save($orange);
        $bird37->beakColors()->save($schwarz);
        $bird37->beakColors()->save($orange);
        $bird37->beakColors()->save($rosa);
        $bird37->beakShapes()->attach($entenschnabel);
        $bird37->sizes()->attach($taube_stockente);
        $bird37->save();

        $bird38 = Bird::create( [
            'name' => 'Mergus merganser',
            'name_de' => '',
            'name_fr' => 'Harle bièvre',
            'name_it' => 'Smergo maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird38->pictures()->save($gaensesaeger_1);
        $bird38->pictures()->save($gaensesaeger_2);
        $bird38->habitats()->attach($gewaesser);
        $bird38->family()->associate($mergini);
        $bird38->order()->associate($anseriformes);
        $bird38->plumageColors()->save($schwarz);
        $bird38->plumageColors()->save($grau);
        $bird38->plumageColors()->save($weiss);
        $bird38->plumageColors()->save($braun);
        $bird38->plumageColors()->save($rosa);
        $bird38->plumageColors()->save($gruen);
        $bird38->legsColors()->save($rot);
        $bird38->beakColors()->save($rot);
        $bird38->beakColors()->save($rosa);
        $bird38->beakShapes()->attach($lang_hakenfoermig);
        $bird38->sizes()->attach($stockente_);
        $bird38->save();

        $bird39 = Bird::create( [
            'name' => 'Mergus serrator',
            'name_de' => '',
            'name_fr' => 'Harle huppé',
            'name_it' => 'Smergo minore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird39->pictures()->save($mittelsaeger_1);
        $bird39->habitats()->attach($gewaesser);
        $bird39->family()->associate($mergini);
        $bird39->order()->associate($anseriformes);
        $bird39->plumageColors()->save($schwarz);
        $bird39->plumageColors()->save($grau);
        $bird39->plumageColors()->save($weiss);
        $bird39->plumageColors()->save($beige);
        $bird39->plumageColors()->save($braun);
        $bird39->plumageColors()->save($gruen);
        $bird39->legsColors()->save($orange);
        $bird39->beakColors()->save($schwarz);
        $bird39->beakColors()->save($orange);
        $bird39->beakColors()->save($rot);
        $bird39->beakColors()->save($rosa);
        $bird39->beakShapes()->attach($lang_hakenfoermig);
        $bird39->sizes()->attach($taube_stockente);
        $bird39->save();

        $bird40 = Bird::create( [
            'name' => 'Mergellus albellus',
            'name_de' => '',
            'name_fr' => 'Harle piette',
            'name_it' => 'Pesciaiola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird40->pictures()->save($zwergsaeger_1);
        $bird40->pictures()->save($zwergsaeger_2);
        $bird40->pictures()->save($zwergsaeger_3);
        $bird40->habitats()->attach($gewaesser);
        $bird40->family()->associate($mergini);
        $bird40->order()->associate($anseriformes);
        $bird40->plumageColors()->save($schwarz);
        $bird40->plumageColors()->save($grau);
        $bird40->plumageColors()->save($weiss);
        $bird40->plumageColors()->save($braun);
        $bird40->legsColors()->save($schwarz);
        $bird40->beakColors()->save($schwarz);
        $bird40->beakColors()->save($grau);
        $bird40->beakShapes()->attach($lang_hakenfoermig);
        $bird40->sizes()->attach($taube_stockente);
        $bird40->save();

        $bird41 = Bird::create( [
            'name' => 'Gypaetus barbatus',
            'name_de' => '',
            'name_fr' => 'Gypaète barbu',
            'name_it' => 'Gipeto',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird41->pictures()->save($bartgeier_1);
        $bird41->pictures()->save($bartgeier_2);
        $bird41->pictures()->save($bartgeier_3);
        $bird41->habitats()->attach($gebirge);
        $bird41->family()->associate($accipitridae);
        $bird41->order()->associate($falconiformes);
        $bird41->plumageColors()->save($schwarz);
        $bird41->plumageColors()->save($grau);
        $bird41->plumageColors()->save($weiss);
        $bird41->plumageColors()->save($braun);
        $bird41->plumageColors()->save($orange);
        $bird41->legsColors()->save($grau);
        $bird41->beakColors()->save($grau);
        $bird41->beakShapes()->attach($kurz_hakenfoermig);
        $bird41->sizes()->attach($stockente_);
        $bird41->save();

        $bird42 = Bird::create( [
            'name' => 'Aquila chrysaetos',
            'name_de' => '',
            'name_fr' => 'Aigle royal',
            'name_it' => 'Aquila reale',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird42->habitats()->attach($gebirge);
        $bird42->family()->associate($accipitridae);
        $bird42->order()->associate($falconiformes);
        $bird42->plumageColors()->save($schwarz);
        $bird42->plumageColors()->save($weiss);
        $bird42->plumageColors()->save($braun);
        $bird42->legsColors()->save($gelb);
        $bird42->beakColors()->save($schwarz);
        $bird42->beakColors()->save($grau);
        $bird42->beakColors()->save($gelb);
        $bird42->beakShapes()->attach($kurz_hakenfoermig);
        $bird42->sizes()->attach($stockente_);
        $bird42->save();

        $bird43 = Bird::create( [
            'name' => 'Milvus milvus',
            'name_de' => '',
            'name_fr' => 'Milan royal',
            'name_it' => 'Nibbio reale',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> grand rapace brun-roux avec queue profondément échancrée et «fenêtre» blanche typique sur l\'aile.r<br /><br /><strong>Voix:</strong> sorte de miaulement suivi de «vili-ouh, ii-ou, ii-ou, ii-ou» montants et descendants.r<br /><br /><strong>Distribution:</strong> fréquent dans le milieu cultivé ouvert, surtout dans le Jura et sur le Plateau Suisse. Cherche aussi souvent sa nourriture en cerclant au-dessus des villes et des villages.r<br /><br /><strong>Nourriture:</strong> petits mammifères et autres petits animaux, fréquemment des charognes ou des animaux malades ou affaiblis.r<br /><br /><strong>Nidification:</strong> construit son aire de branches et brindilles en hauteur dans un arbre, en lisière de forêt. Pond généralement 3 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird43->pictures()->save($rotmilan_1);
        $bird43->pictures()->save($rotmilan_2);
        $bird43->habitats()->attach($aecker_und_feldflur);
        $bird43->habitats()->attach($wiesen_und_weiden);
        $bird43->habitats()->attach($siedlungsraum);
        $bird43->habitats()->attach($wald);
        $bird43->family()->associate($accipitridae);
        $bird43->order()->associate($falconiformes);
        $bird43->plumageColors()->save($schwarz);
        $bird43->plumageColors()->save($grau);
        $bird43->plumageColors()->save($weiss);
        $bird43->plumageColors()->save($beige);
        $bird43->plumageColors()->save($braun);
        $bird43->plumageColors()->save($orange);
        $bird43->plumageColors()->save($rot);
        $bird43->legsColors()->save($gelb);
        $bird43->beakColors()->save($schwarz);
        $bird43->beakColors()->save($gelb);
        $bird43->beakShapes()->attach($kurz_hakenfoermig);
        $bird43->sizes()->attach($stockente_);
        $bird43->save();

        $bird44 = Bird::create( [
            'name' => 'Milvus migrans',
            'name_de' => '',
            'name_fr' => 'Milan noir',
            'name_it' => 'Nibbio bruno',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> rapace brun foncé, un peu plus petit que buse variable et milan royal. Queue droite à légèrement échancrée.r<br /><br /><strong>Voix:</strong> cri puissant, hennissant, terminé en trille «piié-é-é-é-é».r<br /><br /><strong>Distribution:</strong> souvent à proximité de l\'eau, mais on peut également l\'observer cerclant au-dessus des rochers et des agglomérations.r<br /><br /><strong>Nourriture:</strong> poissons, amphibiens, reptiles et autres petits animaux, souvent charognes.r<br /><br /><strong>Nidification:</strong> grande aire faite de branches en hauteur dans un arbre, souvent avec des bouts de papier ou de plastique. 2-3 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird44->pictures()->save($schwarzmilan_1);
        $bird44->habitats()->attach($gewaesser);
        $bird44->habitats()->attach($wald);
        $bird44->habitats()->attach($siedlungsraum);
        $bird44->family()->associate($accipitridae);
        $bird44->order()->associate($falconiformes);
        $bird44->plumageColors()->save($schwarz);
        $bird44->plumageColors()->save($beige);
        $bird44->plumageColors()->save($braun);
        $bird44->legsColors()->save($gelb);
        $bird44->beakColors()->save($schwarz);
        $bird44->beakColors()->save($gelb);
        $bird44->beakShapes()->attach($kurz_hakenfoermig);
        $bird44->sizes()->attach($stockente_);
        $bird44->save();

        $bird45 = Bird::create( [
            'name' => 'Circus aeruginosus',
            'name_de' => '',
            'name_fr' => 'Busard des roseaux',
            'name_it' => 'Falco di palude',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird45->pictures()->save($rohrweihe_1);
        $bird45->habitats()->attach($aecker_und_feldflur);
        $bird45->habitats()->attach($wiesen_und_weiden);
        $bird45->habitats()->attach($gewaesser);
        $bird45->family()->associate($accipitridae);
        $bird45->order()->associate($falconiformes);
        $bird45->plumageColors()->save($schwarz);
        $bird45->plumageColors()->save($grau);
        $bird45->plumageColors()->save($weiss);
        $bird45->plumageColors()->save($beige);
        $bird45->plumageColors()->save($braun);
        $bird45->legsColors()->save($gelb);
        $bird45->beakColors()->save($schwarz);
        $bird45->beakShapes()->attach($kurz_hakenfoermig);
        $bird45->sizes()->attach($taube_stockente);
        $bird45->save();

        $bird46 = Bird::create( [
            'name' => 'Circus cyaneus',
            'name_de' => '',
            'name_fr' => 'Busard Saint-Martin',
            'name_it' => 'Albanella reale',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird46->pictures()->save($kornweihe_1);
        $bird46->habitats()->attach($aecker_und_feldflur);
        $bird46->habitats()->attach($wiesen_und_weiden);
        $bird46->habitats()->attach($gewaesser);
        $bird46->family()->associate($accipitridae);
        $bird46->order()->associate($falconiformes);
        $bird46->plumageColors()->save($schwarz);
        $bird46->plumageColors()->save($grau);
        $bird46->plumageColors()->save($weiss);
        $bird46->plumageColors()->save($beige);
        $bird46->plumageColors()->save($braun);
        $bird46->legsColors()->save($gelb);
        $bird46->beakColors()->save($schwarz);
        $bird46->beakShapes()->attach($kurz_hakenfoermig);
        $bird46->sizes()->attach($taube_stockente);
        $bird46->save();

        $bird47 = Bird::create( [
            'name' => 'Circus pygargus',
            'name_de' => '',
            'name_fr' => 'Busard cendré',
            'name_it' => 'Albanella minore',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird47->pictures()->save($wiesenweihe_1);
        $bird47->habitats()->attach($aecker_und_feldflur);
        $bird47->habitats()->attach($wiesen_und_weiden);
        $bird47->family()->associate($accipitridae);
        $bird47->order()->associate($falconiformes);
        $bird47->plumageColors()->save($schwarz);
        $bird47->plumageColors()->save($grau);
        $bird47->plumageColors()->save($weiss);
        $bird47->plumageColors()->save($beige);
        $bird47->plumageColors()->save($braun);
        $bird47->plumageColors()->save($orange);
        $bird47->legsColors()->save($gelb);
        $bird47->beakColors()->save($schwarz);
        $bird47->beakColors()->save($gelb);
        $bird47->beakShapes()->attach($kurz_hakenfoermig);
        $bird47->sizes()->attach($taube_stockente);
        $bird47->save();

        $bird48 = Bird::create( [
            'name' => 'Buteo buteo',
            'name_de' => '',
            'name_fr' => 'Buse variable',
            'name_it' => 'Poiana',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> grand rapace de couleur brune, queue arrondie. Le ventre, généralement clair, contraste avec la poitrine plus foncée.r<br /><br /><strong>Voix:</strong> sorte de miaulement sonore descendant «piiyèy».r<br /><br /><strong>Distribution:</strong> niche en forêt ou sur des bosquets et vole au-dessus des champs et prairies pour chasser ses proies.r<br /><br /><strong>Nourriture:</strong> surtout campagnols, mais aussi autres petits animaux. Parfois des charognes, surtout en hiver.r<br /><br /><strong>Nidification:</strong> l\'aire faite de branchages est construite en hauteur sur un arbre, proche du tronc. Elle contient 2-3 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird48->pictures()->save($maeusebussard_1);
        $bird48->pictures()->save($maeusebussard_2);
        $bird48->habitats()->attach($aecker_und_feldflur);
        $bird48->habitats()->attach($wiesen_und_weiden);
        $bird48->habitats()->attach($gebirge);
        $bird48->habitats()->attach($wald);
        $bird48->habitats()->attach($siedlungsraum);
        $bird48->family()->associate($accipitridae);
        $bird48->order()->associate($falconiformes);
        $bird48->plumageColors()->save($schwarz);
        $bird48->plumageColors()->save($weiss);
        $bird48->plumageColors()->save($braun);
        $bird48->legsColors()->save($gelb);
        $bird48->beakColors()->save($schwarz);
        $bird48->beakColors()->save($gelb);
        $bird48->beakShapes()->attach($kurz_hakenfoermig);
        $bird48->save();

        $bird49 = Bird::create( [
            'name' => 'Pernis apivorus',
            'name_de' => '',
            'name_fr' => 'Bondrée apivore',
            'name_it' => 'Falco pecchiaiolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird49->pictures()->save($wespenbussard_1);
        $bird49->habitats()->attach($wald);
        $bird49->habitats()->attach($aecker_und_feldflur);
        $bird49->habitats()->attach($wiesen_und_weiden);
        $bird49->family()->associate($accipitridae);
        $bird49->order()->associate($falconiformes);
        $bird49->plumageColors()->save($schwarz);
        $bird49->plumageColors()->save($grau);
        $bird49->plumageColors()->save($weiss);
        $bird49->plumageColors()->save($beige);
        $bird49->plumageColors()->save($braun);
        $bird49->legsColors()->save($gelb);
        $bird49->beakColors()->save($schwarz);
        $bird49->beakColors()->save($gelb);
        $bird49->beakShapes()->attach($kurz_hakenfoermig);
        $bird49->sizes()->attach($taube_stockente);
        $bird49->save();

        $bird50 = Bird::create( [
            'name' => 'Accipiter nisus',
            'name_de' => '',
            'name_fr' => 'Epervier d`Europe',
            'name_it' => 'Sparviere',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> grand rapace brun-roux avec queue profondément échancrée et «fenêtre» blanche typique sur l\'aile.r<br /><br /><strong>Voix:</strong> sorte de miaulement suivi de «vili-ouh, ii-ou, ii-ou, ii-ou» montants et descendants.r<br /><br /><strong>Distribution:</strong> fréquent dans le milieu cultivé ouvert, surtout dans le Jura et sur le Plateau Suisse. Cherche aussi souvent sa nourriture en cerclant au-dessus des villes et des villages.r<br /><br /><strong>Nourriture:</strong> petits mammifères et autres petits animaux, fréquemment des charognes ou des animaux malades ou affaiblis.r<br /><br /><strong>Nidification:</strong> construit son aire de branches et brindilles en hauteur dans un arbre, en lisière de forêt. Pond généralement 3 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird50->pictures()->save($sperber_1);
        $bird50->pictures()->save($sperber_2);
        $bird50->habitats()->attach($aecker_und_feldflur);
        $bird50->habitats()->attach($wiesen_und_weiden);
        $bird50->habitats()->attach($siedlungsraum);
        $bird50->habitats()->attach($wald);
        $bird50->family()->associate($accipitridae);
        $bird50->order()->associate($falconiformes);
        $bird50->plumageColors()->save($grau);
        $bird50->plumageColors()->save($weiss);
        $bird50->plumageColors()->save($beige);
        $bird50->plumageColors()->save($braun);
        $bird50->plumageColors()->save($orange);
        $bird50->legsColors()->save($gelb);
        $bird50->beakColors()->save($schwarz);
        $bird50->beakColors()->save($gelb);
        $bird50->beakShapes()->attach($kurz_hakenfoermig);
        $bird50->sizes()->attach($amsel_taube);
        $bird50->sizes()->attach($taube_stockente);
        $bird50->save();

        $bird51 = Bird::create( [
            'name' => 'Accipiter gentilis',
            'name_de' => '',
            'name_fr' => 'Autour des palombes',
            'name_it' => 'Astore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird51->pictures()->save($habicht_1);
        $bird51->habitats()->attach($aecker_und_feldflur);
        $bird51->habitats()->attach($wiesen_und_weiden);
        $bird51->habitats()->attach($gebirge);
        $bird51->habitats()->attach($wald);
        $bird51->family()->associate($accipitridae);
        $bird51->order()->associate($falconiformes);
        $bird51->plumageColors()->save($schwarz);
        $bird51->plumageColors()->save($grau);
        $bird51->plumageColors()->save($weiss);
        $bird51->plumageColors()->save($beige);
        $bird51->plumageColors()->save($braun);
        $bird51->legsColors()->save($gelb);
        $bird51->beakColors()->save($schwarz);
        $bird51->beakColors()->save($gelb);
        $bird51->beakShapes()->attach($kurz_hakenfoermig);
        $bird51->sizes()->attach($taube_stockente);
        $bird51->sizes()->attach($stockente_);
        $bird51->save();

        $bird52 = Bird::create( [
            'name' => 'Pandion haliaetus',
            'name_de' => '',
            'name_fr' => 'Balbuzard pêcheur',
            'name_it' => 'Falco pescatore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird52->pictures()->save($fischadler_1);
        $bird52->pictures()->save($fischadler_2);
        $bird52->habitats()->attach($gewaesser);
        $bird52->family()->associate($pandionidae);
        $bird52->order()->associate($falconiformes);
        $bird52->plumageColors()->save($weiss);
        $bird52->plumageColors()->save($schwarz);
        $bird52->plumageColors()->save($grau);
        $bird52->plumageColors()->save($braun);
        $bird52->legsColors()->save($schwarz);
        $bird52->legsColors()->save($grau);
        $bird52->beakColors()->save($schwarz);
        $bird52->beakColors()->save($grau);
        $bird52->beakShapes()->attach($kurz_hakenfoermig);
        $bird52->sizes()->attach($taube_stockente);
        $bird52->sizes()->attach($stockente_);
        $bird52->save();

        $bird53 = Bird::create( [
            'name' => 'Falco tinnunculus',
            'name_de' => '',
            'name_fr' => 'Faucon crécerelle',
            'name_it' => 'Gheppio',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit rapace aux ailes pointues et à longue queue. Dessus rouge-brun avec petites taches (mu00e2le) ou barres (femelle) noires.r<br /><br /><strong>Voix:</strong> série rapide de «ki-ki-ki-ki» aigus et brefs.r<br /><br /><strong>Distribution:</strong> vit en milieu cultivé ouvert, mais aussi en bordure de villes et villages et en montagne.r<br /><br /><strong>Nourriture:</strong> surtout campagnols, mais aussi petits oiseaux et insectes.r<br /><br /><strong>Nidification:</strong> à l\'origine, le faucon crécerelle nichait dans d\'anciens nids de corvidés ou sur des surplombs rocheux, aujourd\'hui, il occupe fréquemment des nichoirs sur les granges ou des anfractuosités de hauts bu00e2timents.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird53->pictures()->save($turmfalke_1);
        $bird53->pictures()->save($turmfalke_2);
        $bird53->pictures()->save($turmfalke_3);
        $bird53->habitats()->attach($aecker_und_feldflur);
        $bird53->habitats()->attach($wiesen_und_weiden);
        $bird53->habitats()->attach($gebirge);
        $bird53->habitats()->attach($siedlungsraum);
        $bird53->family()->associate($falconidae);
        $bird53->order()->associate($falconiformes);
        $bird53->plumageColors()->save($schwarz);
        $bird53->plumageColors()->save($grau);
        $bird53->plumageColors()->save($beige);
        $bird53->plumageColors()->save($braun);
        $bird53->plumageColors()->save($orange);
        $bird53->legsColors()->save($gelb);
        $bird53->beakColors()->save($schwarz);
        $bird53->beakColors()->save($gelb);
        $bird53->beakShapes()->attach($kurz_hakenfoermig);
        $bird53->sizes()->attach($amsel_taube);
        $bird53->sizes()->attach($taube_stockente);
        $bird53->save();

        $bird54 = Bird::create( [
            'name' => 'Falco vespertinus',
            'name_de' => '',
            'name_fr' => 'Faucon kobez',
            'name_it' => 'Falco cuculo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird54->pictures()->save($rotfussfalke_1);
        $bird54->pictures()->save($rotfussfalke_2);
        $bird54->pictures()->save($rotfussfalke_3);
        $bird54->habitats()->attach($aecker_und_feldflur);
        $bird54->habitats()->attach($wiesen_und_weiden);
        $bird54->family()->associate($falconidae);
        $bird54->order()->associate($falconiformes);
        $bird54->plumageColors()->save($schwarz);
        $bird54->plumageColors()->save($grau);
        $bird54->plumageColors()->save($weiss);
        $bird54->plumageColors()->save($beige);
        $bird54->plumageColors()->save($braun);
        $bird54->plumageColors()->save($orange);
        $bird54->plumageColors()->save($rot);
        $bird54->plumageColors()->save($blau);
        $bird54->legsColors()->save($rot);
        $bird54->legsColors()->save($orange);
        $bird54->beakColors()->save($schwarz);
        $bird54->beakColors()->save($grau);
        $bird54->beakColors()->save($orange);
        $bird54->beakShapes()->attach($kurz_hakenfoermig);
        $bird54->sizes()->attach($amsel_taube);
        $bird54->sizes()->attach($taube_stockente);
        $bird54->save();

        $bird55 = Bird::create( [
            'name' => 'Falco subbuteo',
            'name_de' => '',
            'name_fr' => 'Faucon hobereau',
            'name_it' => 'Lodolaio',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird55->pictures()->save($baumfalke_1);
        $bird55->pictures()->save($baumfalke_2);
        $bird55->habitats()->attach($aecker_und_feldflur);
        $bird55->habitats()->attach($wiesen_und_weiden);
        $bird55->habitats()->attach($siedlungsraum);
        $bird55->habitats()->attach($gewaesser);
        $bird55->habitats()->attach($wald);
        $bird55->family()->associate($falconidae);
        $bird55->order()->associate($falconiformes);
        $bird55->plumageColors()->save($schwarz);
        $bird55->plumageColors()->save($grau);
        $bird55->plumageColors()->save($weiss);
        $bird55->plumageColors()->save($beige);
        $bird55->plumageColors()->save($braun);
        $bird55->plumageColors()->save($orange);
        $bird55->plumageColors()->save($rot);
        $bird55->legsColors()->save($gelb);
        $bird55->beakColors()->save($schwarz);
        $bird55->beakColors()->save($gelb);
        $bird55->beakShapes()->attach($kurz_hakenfoermig);
        $bird55->sizes()->attach($amsel_taube);
        $bird55->sizes()->attach($taube_stockente);
        $bird55->save();

        $bird56 = Bird::create( [
            'name' => 'Falco peregrinus',
            'name_de' => '',
            'name_fr' => 'Faucon pèlerin',
            'name_it' => 'Falco pellegrino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird56->pictures()->save($wanderfalke_1);
        $bird56->habitats()->attach($aecker_und_feldflur);
        $bird56->habitats()->attach($wiesen_und_weiden);
        $bird56->habitats()->attach($gebirge);
        $bird56->habitats()->attach($gewaesser);
        $bird56->habitats()->attach($siedlungsraum);
        $bird56->family()->associate($falconidae);
        $bird56->order()->associate($falconiformes);
        $bird56->plumageColors()->save($schwarz);
        $bird56->plumageColors()->save($grau);
        $bird56->plumageColors()->save($weiss);
        $bird56->plumageColors()->save($beige);
        $bird56->plumageColors()->save($braun);
        $bird56->legsColors()->save($gelb);
        $bird56->beakColors()->save($schwarz);
        $bird56->beakColors()->save($gelb);
        $bird56->beakShapes()->attach($kurz_hakenfoermig);
        $bird56->sizes()->attach($taube_stockente);
        $bird56->save();

        $bird57 = Bird::create( [
            'name' => 'Falco columbarius',
            'name_de' => '',
            'name_fr' => 'Faucon émerillon',
            'name_it' => 'Smeriglio',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird57->habitats()->attach($aecker_und_feldflur);
        $bird57->habitats()->attach($wiesen_und_weiden);
        $bird57->family()->associate($falconidae);
        $bird57->order()->associate($falconiformes);
        $bird57->plumageColors()->save($schwarz);
        $bird57->plumageColors()->save($grau);
        $bird57->plumageColors()->save($weiss);
        $bird57->plumageColors()->save($beige);
        $bird57->plumageColors()->save($braun);
        $bird57->plumageColors()->save($orange);
        $bird57->plumageColors()->save($blau);
        $bird57->legsColors()->save($gelb);
        $bird57->beakColors()->save($schwarz);
        $bird57->beakColors()->save($gelb);
        $bird57->beakShapes()->attach($kurz_hakenfoermig);
        $bird57->sizes()->attach($amsel_taube);
        $bird57->save();

        $bird58 = Bird::create( [
            'name' => 'Lagopus muta',
            'name_de' => '',
            'name_fr' => 'Lagopède alpin ',
            'name_it' => 'Pernice bianca',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird58->pictures()->save($alpenschneehuhn_1);
        $bird58->habitats()->attach($gebirge);
        $bird58->family()->associate($tetraonidae);
        $bird58->order()->associate($galliformes);
        $bird58->plumageColors()->save($schwarz);
        $bird58->plumageColors()->save($grau);
        $bird58->plumageColors()->save($weiss);
        $bird58->plumageColors()->save($beige);
        $bird58->plumageColors()->save($braun);
        $bird58->legsColors()->save($schwarz);
        $bird58->legsColors()->save($weiss);
        $bird58->legsColors()->save($braun);
        $bird58->beakColors()->save($schwarz);
        $bird58->beakShapes()->attach($kurz_dick);
        $bird58->sizes()->attach($taube_stockente);
        $bird58->save();

        $bird59 = Bird::create( [
            'name' => 'Tetrao urogallus',
            'name_de' => '',
            'name_fr' => 'Grand Tétras',
            'name_it' => 'Gallo cedrone',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird59->pictures()->save($auerhuhn_1);
        $bird59->pictures()->save($auerhuhn_2);
        $bird59->habitats()->attach($wald);
        $bird59->family()->associate($tetraonidae);
        $bird59->order()->associate($galliformes);
        $bird59->plumageColors()->save($schwarz);
        $bird59->plumageColors()->save($grau);
        $bird59->plumageColors()->save($weiss);
        $bird59->plumageColors()->save($beige);
        $bird59->plumageColors()->save($braun);
        $bird59->plumageColors()->save($orange);
        $bird59->legsColors()->save($schwarz);
        $bird59->legsColors()->save($braun);
        $bird59->beakColors()->save($schwarz);
        $bird59->beakColors()->save($grau);
        $bird59->beakColors()->save($weiss);
        $bird59->beakColors()->save($gelb);
        $bird59->beakShapes()->attach($kurz_dick);
        $bird59->sizes()->attach($stockente_);
        $bird59->save();

        $bird60 = Bird::create( [
            'name' => 'Tetrao tetrix',
            'name_de' => '',
            'name_fr' => 'Tétras lyre',
            'name_it' => 'Fagiano di monte',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird60->pictures()->save($birkhuhn_1);
        $bird60->pictures()->save($birkhuhn_2);
        $bird60->pictures()->save($birkhuhn_3);
        $bird60->habitats()->attach($gebirge);
        $bird60->habitats()->attach($wald);
        $bird60->family()->associate($tetraonidae);
        $bird60->order()->associate($galliformes);
        $bird60->plumageColors()->save($schwarz);
        $bird60->plumageColors()->save($grau);
        $bird60->plumageColors()->save($weiss);
        $bird60->plumageColors()->save($beige);
        $bird60->plumageColors()->save($braun);
        $bird60->legsColors()->save($schwarz);
        $bird60->legsColors()->save($braun);
        $bird60->beakColors()->save($schwarz);
        $bird60->beakShapes()->attach($kurz_dick);
        $bird60->sizes()->attach($taube_stockente);
        $bird60->save();

        $bird61 = Bird::create( [
            'name' => 'Tetrastes bonasia',
            'name_de' => '',
            'name_fr' => 'Gélinotte des bois',
            'name_it' => 'Francolino di monte',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird61->pictures()->save($haselhuhn_1);
        $bird61->pictures()->save($haselhuhn_2);
        $bird61->habitats()->attach($wald);
        $bird61->family()->associate($tetraonidae);
        $bird61->order()->associate($galliformes);
        $bird61->plumageColors()->save($schwarz);
        $bird61->plumageColors()->save($weiss);
        $bird61->plumageColors()->save($beige);
        $bird61->plumageColors()->save($braun);
        $bird61->legsColors()->save($grau);
        $bird61->legsColors()->save($weiss);
        $bird61->beakColors()->save($weiss);
        $bird61->beakColors()->save($braun);
        $bird61->beakShapes()->attach($kurz_dick);
        $bird61->sizes()->attach($amsel_taube);
        $bird61->sizes()->attach($taube_stockente);
        $bird61->save();

        $bird62 = Bird::create( [
            'name' => 'Alectoris graeca',
            'name_de' => '',
            'name_fr' => 'Perdrix bartavelle',
            'name_it' => 'Coturnice',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird62->habitats()->attach($gebirge);
        $bird62->family()->associate($phasianidae);
        $bird62->order()->associate($galliformes);
        $bird62->plumageColors()->save($schwarz);
        $bird62->plumageColors()->save($grau);
        $bird62->plumageColors()->save($weiss);
        $bird62->plumageColors()->save($beige);
        $bird62->plumageColors()->save($braun);
        $bird62->legsColors()->save($rot);
        $bird62->legsColors()->save($rosa);
        $bird62->beakColors()->save($rot);
        $bird62->beakColors()->save($rosa);
        $bird62->beakShapes()->attach($kurz_dick);
        $bird62->sizes()->attach($amsel_taube);
        $bird62->sizes()->attach($taube_stockente);
        $bird62->save();

        $bird63 = Bird::create( [
            'name' => 'Perdix perdix',
            'name_de' => '',
            'name_fr' => 'Perdix grise',
            'name_it' => 'Starna',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird63->pictures()->save($rebhuhn_1);
        $bird63->habitats()->attach($aecker_und_feldflur);
        $bird63->family()->associate($phasianidae);
        $bird63->order()->associate($galliformes);
        $bird63->plumageColors()->save($grau);
        $bird63->plumageColors()->save($weiss);
        $bird63->plumageColors()->save($braun);
        $bird63->plumageColors()->save($rot);
        $bird63->legsColors()->save($grau);
        $bird63->legsColors()->save($braun);
        $bird63->beakColors()->save($grau);
        $bird63->beakColors()->save($braun);
        $bird63->beakShapes()->attach($kurz_dick);
        $bird63->sizes()->attach($amsel_taube);
        $bird63->save();

        $bird64 = Bird::create( [
            'name' => 'Coturnix coturnix',
            'name_de' => '',
            'name_fr' => 'Caille des blés',
            'name_it' => 'Quaglia comune',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird64->pictures()->save($wachtel_1);
        $bird64->habitats()->attach($aecker_und_feldflur);
        $bird64->habitats()->attach($wiesen_und_weiden);
        $bird64->family()->associate($phasianidae);
        $bird64->order()->associate($galliformes);
        $bird64->plumageColors()->save($schwarz);
        $bird64->plumageColors()->save($weiss);
        $bird64->plumageColors()->save($beige);
        $bird64->plumageColors()->save($braun);
        $bird64->legsColors()->save($schwarz);
        $bird64->legsColors()->save($braun);
        $bird64->beakColors()->save($schwarz);
        $bird64->beakColors()->save($grau);
        $bird64->beakShapes()->attach($kurz_dick);
        $bird64->sizes()->attach($spatz_amsel);
        $bird64->sizes()->attach($amsel_taube);
        $bird64->save();

        $bird65 = Bird::create( [
            'name' => 'Phasianus colchicus',
            'name_de' => '',
            'name_fr' => 'Faisan de colchide',
            'name_it' => 'Fagiano comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird65->pictures()->save($fasan_1);
        $bird65->pictures()->save($fasan_2);
        $bird65->habitats()->attach($aecker_und_feldflur);
        $bird65->habitats()->attach($wiesen_und_weiden);
        $bird65->habitats()->attach($gewaesser);
        $bird65->family()->associate($phasianidae);
        $bird65->order()->associate($galliformes);
        $bird65->plumageColors()->save($schwarz);
        $bird65->plumageColors()->save($grau);
        $bird65->plumageColors()->save($weiss);
        $bird65->plumageColors()->save($beige);
        $bird65->plumageColors()->save($braun);
        $bird65->plumageColors()->save($orange);
        $bird65->plumageColors()->save($rot);
        $bird65->plumageColors()->save($rosa);
        $bird65->plumageColors()->save($blau);
        $bird65->plumageColors()->save($gruen);
        $bird65->legsColors()->save($schwarz);
        $bird65->legsColors()->save($braun);
        $bird65->beakColors()->save($grau);
        $bird65->beakColors()->save($weiss);
        $bird65->beakColors()->save($braun);
        $bird65->beakColors()->save($gelb);
        $bird65->beakShapes()->attach($kurz_dick);
        $bird65->sizes()->attach($taube_stockente);
        $bird65->sizes()->attach($stockente_);
        $bird65->save();

        $bird66 = Bird::create( [
            'name' => 'Rallus aquaticus',
            'name_de' => '',
            'name_fr' => 'Ru00e2le d\'eau',
            'name_it' => 'Porciglione',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird66->pictures()->save($wasserralle_1);
        $bird66->habitats()->attach($gewaesser);
        $bird66->family()->associate($rallidae);
        $bird66->order()->associate($gruiformes);
        $bird66->plumageColors()->save($schwarz);
        $bird66->plumageColors()->save($grau);
        $bird66->plumageColors()->save($weiss);
        $bird66->plumageColors()->save($beige);
        $bird66->plumageColors()->save($braun);
        $bird66->legsColors()->save($braun);
        $bird66->legsColors()->save($rot);
        $bird66->beakColors()->save($schwarz);
        $bird66->beakColors()->save($braun);
        $bird66->beakColors()->save($orange);
        $bird66->beakColors()->save($rot);
        $bird66->beakColors()->save($rosa);
        $bird66->beakShapes()->attach($lang_duenn);
        $bird66->sizes()->attach($amsel_taube);
        $bird66->save();

        $bird67 = Bird::create( [
            'name' => 'Porzana porzana',
            'name_de' => '',
            'name_fr' => 'Marouette ponctuée',
            'name_it' => 'Voltolino',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird67->pictures()->save($tuepfelsumpfhuhn_1);
        $bird67->habitats()->attach($gewaesser);
        $bird67->family()->associate($rallidae);
        $bird67->order()->associate($gruiformes);
        $bird67->plumageColors()->save($grau);
        $bird67->plumageColors()->save($weiss);
        $bird67->plumageColors()->save($beige);
        $bird67->plumageColors()->save($braun);
        $bird67->legsColors()->save($gelb);
        $bird67->legsColors()->save($rosa);
        $bird67->beakColors()->save($braun);
        $bird67->beakColors()->save($gelb);
        $bird67->beakColors()->save($orange);
        $bird67->beakShapes()->attach($normal);
        $bird67->sizes()->attach($spatz_amsel);
        $bird67->save();

        $bird68 = Bird::create( [
            'name' => 'Porzana parva',
            'name_de' => '',
            'name_fr' => 'Marouette poussin',
            'name_it' => 'Schiribilla',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird68->pictures()->save($kleines_sumpfhuhn_1);
        $bird68->pictures()->save($kleines_sumpfhuhn_2);
        $bird68->pictures()->save($kleines_sumpfhuhn_3);
        $bird68->habitats()->attach($gewaesser);
        $bird68->family()->associate($rallidae);
        $bird68->order()->associate($gruiformes);
        $bird68->plumageColors()->save($schwarz);
        $bird68->plumageColors()->save($grau);
        $bird68->plumageColors()->save($weiss);
        $bird68->plumageColors()->save($beige);
        $bird68->plumageColors()->save($braun);
        $bird68->legsColors()->save($gruen);
        $bird68->beakShapes()->attach($normal);
        $bird68->sizes()->attach($spatz_amsel);
        $bird68->save();

        $bird69 = Bird::create( [
            'name' => 'Gallinula chloropus',
            'name_de' => '',
            'name_fr' => 'Gallinule poule-d`eau',
            'name_it' => 'Gallinella d\'acqua',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird69->pictures()->save($teichhuhn_1);
        $bird69->pictures()->save($teichhuhn_2);
        $bird69->habitats()->attach($gewaesser);
        $bird69->family()->associate($rallidae);
        $bird69->order()->associate($gruiformes);
        $bird69->plumageColors()->save($schwarz);
        $bird69->plumageColors()->save($grau);
        $bird69->plumageColors()->save($weiss);
        $bird69->plumageColors()->save($braun);
        $bird69->legsColors()->save($braun);
        $bird69->legsColors()->save($gelb);
        $bird69->legsColors()->save($rosa);
        $bird69->beakColors()->save($schwarz);
        $bird69->beakColors()->save($braun);
        $bird69->beakColors()->save($gelb);
        $bird69->beakColors()->save($rot);
        $bird69->beakShapes()->attach($normal);
        $bird69->sizes()->attach($amsel_taube);
        $bird69->sizes()->attach($taube_stockente);
        $bird69->save();

        $bird70 = Bird::create( [
            'name' => 'Fulica atra',
            'name_de' => '',
            'name_fr' => 'Foulque macroule',
            'name_it' => 'Folaga',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau d\'eau complètement noir, bec pointu blanc, plaque frontale blanche. Juvéniles gris-brun avec le devant du cou blanc-grisu00e2tre, pas de plaque frontale.r<br /><br /><strong>Voix:</strong> le cri est un «keuk» sonore et peru00e7ant ou un «pitts\'» explosif.r<br /><br /><strong>Distribution:</strong> sur différents types de plan et cours d\'eau petits et grands, aussi en milieu urbain.r<br /><br /><strong>Nourriture:</strong> essentiellement plantes aquatiques, herbes, feuilles et graines, mais aussi insectes, escargots et moules.r<br /><br /><strong>Nidification:</strong> pond 5-10 oeufs dans un nid flottant, ancré au sol ou à la végétation, composé de tiges de roseaux et d\'autres plantes.r<br />',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird70->pictures()->save($blaesshuhn_1);
        $bird70->pictures()->save($blaesshuhn_2);
        $bird70->pictures()->save($blaesshuhn_3);
        $bird70->pictures()->save($blaesshuhn_4);
        $bird70->habitats()->attach($siedlungsraum);
        $bird70->habitats()->attach($gewaesser);
        $bird70->family()->associate($rallidae);
        $bird70->order()->associate($gruiformes);
        $bird70->plumageColors()->save($schwarz);
        $bird70->plumageColors()->save($grau);
        $bird70->plumageColors()->save($weiss);
        $bird70->legsColors()->save($schwarz);
        $bird70->legsColors()->save($braun);
        $bird70->legsColors()->save($rosa);
        $bird70->beakColors()->save($schwarz);
        $bird70->beakColors()->save($weiss);
        $bird70->beakColors()->save($braun);
        $bird70->beakShapes()->attach($normal);
        $bird70->sizes()->attach($taube_stockente);
        $bird70->save();

        $bird71 = Bird::create( [
            'name' => 'Crex crex',
            'name_de' => '',
            'name_fr' => 'Ru00e2le des genêts',
            'name_it' => 'Re di quaglie',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird71->pictures()->save($wachtelkoenig_1);
        $bird71->habitats()->attach($wiesen_und_weiden);
        $bird71->habitats()->attach($gewaesser);
        $bird71->family()->associate($rallidae);
        $bird71->order()->associate($gruiformes);
        $bird71->plumageColors()->save($grau);
        $bird71->plumageColors()->save($braun);
        $bird71->legsColors()->save($grau);
        $bird71->legsColors()->save($braun);
        $bird71->beakColors()->save($braun);
        $bird71->beakColors()->save($gelb);
        $bird71->beakColors()->save($orange);
        $bird71->beakShapes()->attach($normal);
        $bird71->sizes()->attach($amsel_taube);
        $bird71->save();

        $bird72 = Bird::create( [
            'name' => 'Grus grus',
            'name_de' => '',
            'name_fr' => 'Grue cendrée',
            'name_it' => 'Gru',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird72->pictures()->save($kranich_1);
        $bird72->pictures()->save($kranich_2);
        $bird72->habitats()->attach($aecker_und_feldflur);
        $bird72->habitats()->attach($wiesen_und_weiden);
        $bird72->habitats()->attach($gewaesser);
        $bird72->family()->associate($gruidae);
        $bird72->order()->associate($gruiformes);
        $bird72->plumageColors()->save($schwarz);
        $bird72->plumageColors()->save($grau);
        $bird72->plumageColors()->save($weiss);
        $bird72->plumageColors()->save($beige);
        $bird72->plumageColors()->save($braun);
        $bird72->plumageColors()->save($rot);
        $bird72->legsColors()->save($schwarz);
        $bird72->beakColors()->save($schwarz);
        $bird72->beakColors()->save($grau);
        $bird72->beakColors()->save($gelb);
        $bird72->beakShapes()->attach($normal);
        $bird72->beakShapes()->attach($lang_dolchfoermig);
        $bird72->sizes()->attach($stockente_);
        $bird72->save();

        $bird73 = Bird::create( [
            'name' => 'Charadrius dubius',
            'name_de' => '',
            'name_fr' => 'Petit Gravelot',
            'name_it' => 'Corriere piccolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird73->pictures()->save($flussregenpfeifer_1);
        $bird73->pictures()->save($flussregenpfeifer_2);
        $bird73->habitats()->attach($gewaesser);
        $bird73->family()->associate($charadriidae);
        $bird73->order()->associate($charadriiformes);
        $bird73->plumageColors()->save($schwarz);
        $bird73->plumageColors()->save($weiss);
        $bird73->plumageColors()->save($beige);
        $bird73->plumageColors()->save($braun);
        $bird73->legsColors()->save($braun);
        $bird73->legsColors()->save($rot);
        $bird73->beakColors()->save($schwarz);
        $bird73->beakShapes()->attach($normal);
        $bird73->sizes()->attach($spatz_amsel);
        $bird73->save();

        $bird74 = Bird::create( [
            'name' => 'Charadrius hiaticula',
            'name_de' => '',
            'name_fr' => 'Grand Gravelot',
            'name_it' => 'Corriere grosso',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird74->pictures()->save($sandregenpfeifer_1);
        $bird74->pictures()->save($sandregenpfeifer_2);
        $bird74->habitats()->attach($gewaesser);
        $bird74->family()->associate($charadriidae);
        $bird74->order()->associate($charadriiformes);
        $bird74->plumageColors()->save($schwarz);
        $bird74->plumageColors()->save($weiss);
        $bird74->plumageColors()->save($beige);
        $bird74->plumageColors()->save($braun);
        $bird74->legsColors()->save($orange);
        $bird74->legsColors()->save($rot);
        $bird74->beakColors()->save($schwarz);
        $bird74->beakColors()->save($braun);
        $bird74->beakColors()->save($orange);
        $bird74->beakShapes()->attach($normal);
        $bird74->sizes()->attach($spatz_amsel);
        $bird74->save();

        $bird75 = Bird::create( [
            'name' => 'Pluvialis squatarola',
            'name_de' => '',
            'name_fr' => 'Pluvier argenté',
            'name_it' => 'Pivieressa',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird75->pictures()->save($kiebitzregenpfeifer_1);
        $bird75->habitats()->attach($gewaesser);
        $bird75->family()->associate($charadriidae);
        $bird75->order()->associate($charadriiformes);
        $bird75->plumageColors()->save($schwarz);
        $bird75->plumageColors()->save($grau);
        $bird75->plumageColors()->save($weiss);
        $bird75->plumageColors()->save($beige);
        $bird75->legsColors()->save($schwarz);
        $bird75->beakColors()->save($schwarz);
        $bird75->beakShapes()->attach($normal);
        $bird75->sizes()->attach($spatz_amsel);
        $bird75->sizes()->attach($amsel_taube);
        $bird75->save();

        $bird76 = Bird::create( [
            'name' => 'Pluvialis apricaria',
            'name_de' => '',
            'name_fr' => 'Pluvier doré',
            'name_it' => 'Piviere dorato',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird76->pictures()->save($goldregenpfeifer_1);
        $bird76->pictures()->save($goldregenpfeifer_2);
        $bird76->habitats()->attach($aecker_und_feldflur);
        $bird76->habitats()->attach($wiesen_und_weiden);
        $bird76->habitats()->attach($gewaesser);
        $bird76->family()->associate($charadriidae);
        $bird76->order()->associate($charadriiformes);
        $bird76->plumageColors()->save($schwarz);
        $bird76->plumageColors()->save($grau);
        $bird76->plumageColors()->save($weiss);
        $bird76->plumageColors()->save($beige);
        $bird76->plumageColors()->save($gelb);
        $bird76->legsColors()->save($grau);
        $bird76->beakColors()->save($schwarz);
        $bird76->beakShapes()->attach($normal);
        $bird76->sizes()->attach($spatz_amsel);
        $bird76->sizes()->attach($amsel_taube);
        $bird76->save();

        $bird77 = Bird::create( [
            'name' => 'Vanellus vanellus',
            'name_de' => '',
            'name_fr' => 'Vanneau Huppé',
            'name_it' => 'Pavoncella',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird77->pictures()->save($kiebitz_1);
        $bird77->pictures()->save($kiebitz_2);
        $bird77->habitats()->attach($aecker_und_feldflur);
        $bird77->habitats()->attach($wiesen_und_weiden);
        $bird77->habitats()->attach($gewaesser);
        $bird77->family()->associate($charadriidae);
        $bird77->order()->associate($charadriiformes);
        $bird77->plumageColors()->save($schwarz);
        $bird77->plumageColors()->save($grau);
        $bird77->plumageColors()->save($weiss);
        $bird77->plumageColors()->save($braun);
        $bird77->plumageColors()->save($orange);
        $bird77->plumageColors()->save($gruen);
        $bird77->legsColors()->save($braun);
        $bird77->legsColors()->save($rot);
        $bird77->beakColors()->save($schwarz);
        $bird77->beakShapes()->attach($normal);
        $bird77->sizes()->attach($amsel_taube);
        $bird77->sizes()->attach($taube_stockente);
        $bird77->save();

        $bird78 = Bird::create( [
            'name' => 'Calidris canutus',
            'name_de' => '',
            'name_fr' => 'Bécasseau maubèche',
            'name_it' => 'Piovanello maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird78->pictures()->save($knutt_1);
        $bird78->habitats()->attach($gewaesser);
        $bird78->family()->associate($scolopacidae);
        $bird78->order()->associate($charadriiformes);
        $bird78->plumageColors()->save($schwarz);
        $bird78->plumageColors()->save($grau);
        $bird78->plumageColors()->save($weiss);
        $bird78->plumageColors()->save($beige);
        $bird78->plumageColors()->save($braun);
        $bird78->plumageColors()->save($orange);
        $bird78->plumageColors()->save($rot);
        $bird78->legsColors()->save($schwarz);
        $bird78->legsColors()->save($grau);
        $bird78->legsColors()->save($gruen);
        $bird78->beakColors()->save($schwarz);
        $bird78->beakColors()->save($grau);
        $bird78->beakShapes()->attach($lang_duenn);
        $bird78->sizes()->attach($spatz_amsel);
        $bird78->sizes()->attach($amsel_taube);
        $bird78->save();

        $bird79 = Bird::create( [
            'name' => 'Calidris alba',
            'name_de' => '',
            'name_fr' => 'Bécasseau sanderling',
            'name_it' => 'Piovanello tridattilo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird79->pictures()->save($sanderling_1);
        $bird79->pictures()->save($sanderling_2);
        $bird79->habitats()->attach($gewaesser);
        $bird79->family()->associate($scolopacidae);
        $bird79->order()->associate($charadriiformes);
        $bird79->plumageColors()->save($schwarz);
        $bird79->plumageColors()->save($grau);
        $bird79->plumageColors()->save($weiss);
        $bird79->plumageColors()->save($beige);
        $bird79->plumageColors()->save($braun);
        $bird79->legsColors()->save($schwarz);
        $bird79->beakColors()->save($schwarz);
        $bird79->beakShapes()->attach($lang_duenn);
        $bird79->sizes()->attach($spatz_amsel);
        $bird79->save();

        $bird80 = Bird::create( [
            'name' => 'Calidris alpina',
            'name_de' => '',
            'name_fr' => 'Bécasseau variable',
            'name_it' => 'Piovanello pancianera',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird80->pictures()->save($alpenstrandlaeufer_1);
        $bird80->pictures()->save($alpenstrandlaeufer_2);
        $bird80->pictures()->save($alpenstrandlaeufer_3);
        $bird80->habitats()->attach($aecker_und_feldflur);
        $bird80->habitats()->attach($wiesen_und_weiden);
        $bird80->habitats()->attach($gewaesser);
        $bird80->family()->associate($scolopacidae);
        $bird80->order()->associate($charadriiformes);
        $bird80->plumageColors()->save($schwarz);
        $bird80->plumageColors()->save($grau);
        $bird80->plumageColors()->save($weiss);
        $bird80->plumageColors()->save($beige);
        $bird80->plumageColors()->save($braun);
        $bird80->legsColors()->save($schwarz);
        $bird80->beakColors()->save($schwarz);
        $bird80->beakShapes()->attach($lang_duenn);
        $bird80->sizes()->attach($spatz_amsel);
        $bird80->save();

        $bird81 = Bird::create( [
            'name' => 'Calidris ferruginea',
            'name_de' => '',
            'name_fr' => 'Bécasseau cocorli ',
            'name_it' => 'Piovanello comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird81->pictures()->save($sichelstrandlaeufer_1);
        $bird81->habitats()->attach($gewaesser);
        $bird81->family()->associate($scolopacidae);
        $bird81->order()->associate($charadriiformes);
        $bird81->plumageColors()->save($schwarz);
        $bird81->plumageColors()->save($grau);
        $bird81->plumageColors()->save($weiss);
        $bird81->plumageColors()->save($beige);
        $bird81->plumageColors()->save($braun);
        $bird81->plumageColors()->save($rot);
        $bird81->legsColors()->save($schwarz);
        $bird81->beakColors()->save($schwarz);
        $bird81->beakShapes()->attach($lang_duenn);
        $bird81->sizes()->attach($spatz_amsel);
        $bird81->save();

        $bird82 = Bird::create( [
            'name' => 'Calidris temminckii',
            'name_de' => '',
            'name_fr' => 'Bécasseau de Temminck',
            'name_it' => 'Gambecchio nano',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird82->pictures()->save($temminckstrandlaeufer_1);
        $bird82->habitats()->attach($gewaesser);
        $bird82->family()->associate($scolopacidae);
        $bird82->order()->associate($charadriiformes);
        $bird82->plumageColors()->save($schwarz);
        $bird82->plumageColors()->save($grau);
        $bird82->plumageColors()->save($weiss);
        $bird82->plumageColors()->save($beige);
        $bird82->plumageColors()->save($braun);
        $bird82->legsColors()->save($gelb);
        $bird82->legsColors()->save($grau);
        $bird82->legsColors()->save($beige);
        $bird82->beakColors()->save($schwarz);
        $bird82->beakShapes()->attach($lang_duenn);
        $bird82->sizes()->attach($spatz_amsel);
        $bird82->save();

        $bird83 = Bird::create( [
            'name' => 'Calidris minuta',
            'name_de' => '',
            'name_fr' => 'Bécasseau minute',
            'name_it' => 'Gambecchio comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird83->pictures()->save($zwergstrandlaeufer_1);
        $bird83->pictures()->save($zwergstrandlaeufer_2);
        $bird83->habitats()->attach($gewaesser);
        $bird83->family()->associate($scolopacidae);
        $bird83->order()->associate($charadriiformes);
        $bird83->plumageColors()->save($schwarz);
        $bird83->plumageColors()->save($grau);
        $bird83->plumageColors()->save($weiss);
        $bird83->plumageColors()->save($beige);
        $bird83->plumageColors()->save($braun);
        $bird83->legsColors()->save($schwarz);
        $bird83->beakColors()->save($schwarz);
        $bird83->beakShapes()->attach($lang_duenn);
        $bird83->sizes()->attach($spatz_amsel);
        $bird83->save();

        $bird84 = Bird::create( [
            'name' => 'Arenaria interpres',
            'name_de' => '',
            'name_fr' => 'Tournepierre à collier',
            'name_it' => 'Voltapietre',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird84->pictures()->save($steinwaelzer_1);
        $bird84->pictures()->save($steinwaelzer_2);
        $bird84->habitats()->attach($gewaesser);
        $bird84->family()->associate($scolopacidae);
        $bird84->order()->associate($charadriiformes);
        $bird84->plumageColors()->save($schwarz);
        $bird84->plumageColors()->save($grau);
        $bird84->plumageColors()->save($weiss);
        $bird84->plumageColors()->save($orange);
        $bird84->plumageColors()->save($braun);
        $bird84->legsColors()->save($orange);
        $bird84->beakColors()->save($schwarz);
        $bird84->beakColors()->save($grau);
        $bird84->beakShapes()->attach($lang_duenn);
        $bird84->sizes()->attach($spatz_amsel);
        $bird84->save();

        $bird85 = Bird::create( [
            'name' => 'Tringa glareola',
            'name_de' => '',
            'name_fr' => 'Chevalier sylvain',
            'name_it' => 'Piro piro boschereccio',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird85->pictures()->save($bruchwasserlaeufer_1);
        $bird85->pictures()->save($bruchwasserlaeufer_2);
        $bird85->habitats()->attach($wiesen_und_weiden);
        $bird85->habitats()->attach($gewaesser);
        $bird85->family()->associate($scolopacidae);
        $bird85->order()->associate($charadriiformes);
        $bird85->plumageColors()->save($schwarz);
        $bird85->plumageColors()->save($weiss);
        $bird85->plumageColors()->save($grau);
        $bird85->plumageColors()->save($braun);
        $bird85->legsColors()->save($gelb);
        $bird85->legsColors()->save($rosa);
        $bird85->beakColors()->save($schwarz);
        $bird85->beakColors()->save($braun);
        $bird85->beakColors()->save($gruen);
        $bird85->beakShapes()->attach($lang_duenn);
        $bird85->sizes()->attach($spatz_amsel);
        $bird85->save();

        $bird86 = Bird::create( [
            'name' => 'Tringa ochropus',
            'name_de' => '',
            'name_fr' => 'Chevalier culblanc',
            'name_it' => 'Piro piro culbianco',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird86->pictures()->save($waldwasserlaeufer_1);
        $bird86->habitats()->attach($gewaesser);
        $bird86->family()->associate($scolopacidae);
        $bird86->order()->associate($charadriiformes);
        $bird86->plumageColors()->save($grau);
        $bird86->plumageColors()->save($weiss);
        $bird86->plumageColors()->save($braun);
        $bird86->legsColors()->save($grau);
        $bird86->legsColors()->save($rosa);
        $bird86->beakColors()->save($schwarz);
        $bird86->beakColors()->save($grau);
        $bird86->beakShapes()->attach($lang_duenn);
        $bird86->sizes()->attach($spatz_amsel);
        $bird86->sizes()->attach($amsel_taube);
        $bird86->save();

        $bird87 = Bird::create( [
            'name' => 'Actitis hypoleucos',
            'name_de' => '',
            'name_fr' => 'Chevalier guignette',
            'name_it' => 'Piro piro piccolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird87->pictures()->save($flussuferlaeufer_1);
        $bird87->pictures()->save($flussuferlaeufer_2);
        $bird87->habitats()->attach($gewaesser);
        $bird87->family()->associate($scolopacidae);
        $bird87->order()->associate($charadriiformes);
        $bird87->plumageColors()->save($weiss);
        $bird87->plumageColors()->save($braun);
        $bird87->legsColors()->save($gelb);
        $bird87->legsColors()->save($rosa);
        $bird87->beakColors()->save($schwarz);
        $bird87->beakColors()->save($braun);
        $bird87->beakShapes()->attach($lang_duenn);
        $bird87->sizes()->attach($spatz_amsel);
        $bird87->save();

        $bird88 = Bird::create( [
            'name' => 'Tringa totanus',
            'name_de' => '',
            'name_fr' => 'Chevalier gambette',
            'name_it' => 'Pettegola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird88->pictures()->save($rotschenkel_1);
        $bird88->habitats()->attach($gewaesser);
        $bird88->family()->associate($scolopacidae);
        $bird88->order()->associate($charadriiformes);
        $bird88->plumageColors()->save($grau);
        $bird88->plumageColors()->save($weiss);
        $bird88->plumageColors()->save($beige);
        $bird88->plumageColors()->save($braun);
        $bird88->legsColors()->save($rot);
        $bird88->legsColors()->save($orange);
        $bird88->beakColors()->save($schwarz);
        $bird88->beakColors()->save($orange);
        $bird88->beakColors()->save($rot);
        $bird88->beakShapes()->attach($lang_duenn);
        $bird88->sizes()->attach($amsel_taube);
        $bird88->save();

        $bird89 = Bird::create( [
            'name' => 'Tringa erythropus',
            'name_de' => '',
            'name_fr' => 'Chevalier arlequin ',
            'name_it' => 'Totano moro',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird89->pictures()->save($dunkler_wasserlaeufer_1);
        $bird89->habitats()->attach($gewaesser);
        $bird89->family()->associate($scolopacidae);
        $bird89->order()->associate($charadriiformes);
        $bird89->plumageColors()->save($schwarz);
        $bird89->plumageColors()->save($grau);
        $bird89->plumageColors()->save($weiss);
        $bird89->plumageColors()->save($beige);
        $bird89->plumageColors()->save($braun);
        $bird89->legsColors()->save($rot);
        $bird89->legsColors()->save($orange);
        $bird89->beakColors()->save($schwarz);
        $bird89->beakColors()->save($orange);
        $bird89->beakColors()->save($rot);
        $bird89->beakShapes()->attach($lang_duenn);
        $bird89->sizes()->attach($amsel_taube);
        $bird89->save();

        $bird90 = Bird::create( [
            'name' => 'Tringa nebularia',
            'name_de' => '',
            'name_fr' => 'Chevalier aboyeur',
            'name_it' => 'Pantana',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird90->pictures()->save($gruenschenkel_1);
        $bird90->pictures()->save($gruenschenkel_2);
        $bird90->habitats()->attach($gewaesser);
        $bird90->family()->associate($scolopacidae);
        $bird90->order()->associate($charadriiformes);
        $bird90->plumageColors()->save($schwarz);
        $bird90->plumageColors()->save($grau);
        $bird90->plumageColors()->save($weiss);
        $bird90->plumageColors()->save($braun);
        $bird90->legsColors()->save($grau);
        $bird90->legsColors()->save($gruen);
        $bird90->beakColors()->save($schwarz);
        $bird90->beakColors()->save($grau);
        $bird90->beakShapes()->attach($lang_duenn);
        $bird90->sizes()->attach($amsel_taube);
        $bird90->save();

        $bird91 = Bird::create( [
            'name' => 'Limosa limosa',
            'name_de' => '',
            'name_fr' => 'Barge à queue noire',
            'name_it' => 'Pittima reale',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird91->pictures()->save($uferschnepfe_1);
        $bird91->habitats()->attach($wiesen_und_weiden);
        $bird91->habitats()->attach($gewaesser);
        $bird91->family()->associate($scolopacidae);
        $bird91->order()->associate($charadriiformes);
        $bird91->plumageColors()->save($schwarz);
        $bird91->plumageColors()->save($grau);
        $bird91->plumageColors()->save($weiss);
        $bird91->plumageColors()->save($beige);
        $bird91->plumageColors()->save($braun);
        $bird91->plumageColors()->save($orange);
        $bird91->legsColors()->save($schwarz);
        $bird91->legsColors()->save($braun);
        $bird91->beakColors()->save($schwarz);
        $bird91->beakColors()->save($rot);
        $bird91->beakShapes()->attach($lang_duenn);
        $bird91->sizes()->attach($taube_stockente);
        $bird91->save();

        $bird92 = Bird::create( [
            'name' => 'Limosa lapponica',
            'name_de' => '',
            'name_fr' => 'Barge rousse',
            'name_it' => 'Pittima minore',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird92->pictures()->save($pfuhlschnepfe_1);
        $bird92->pictures()->save($pfuhlschnepfe_2);
        $bird92->habitats()->attach($gewaesser);
        $bird92->family()->associate($scolopacidae);
        $bird92->order()->associate($charadriiformes);
        $bird92->plumageColors()->save($schwarz);
        $bird92->plumageColors()->save($grau);
        $bird92->plumageColors()->save($weiss);
        $bird92->plumageColors()->save($beige);
        $bird92->plumageColors()->save($braun);
        $bird92->plumageColors()->save($orange);
        $bird92->plumageColors()->save($rot);
        $bird92->legsColors()->save($schwarz);
        $bird92->beakColors()->save($schwarz);
        $bird92->beakColors()->save($grau);
        $bird92->beakColors()->save($rosa);
        $bird92->beakShapes()->attach($lang_duenn);
        $bird92->sizes()->attach($amsel_taube);
        $bird92->sizes()->attach($taube_stockente);
        $bird92->save();

        $bird93 = Bird::create( [
            'name' => 'Numenius arquata',
            'name_de' => '',
            'name_fr' => 'Courlis cendré',
            'name_it' => 'Chiurlo maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird93->pictures()->save($grosser_brachvogel_1);
        $bird93->habitats()->attach($aecker_und_feldflur);
        $bird93->habitats()->attach($wiesen_und_weiden);
        $bird93->habitats()->attach($gewaesser);
        $bird93->family()->associate($scolopacidae);
        $bird93->order()->associate($charadriiformes);
        $bird93->plumageColors()->save($grau);
        $bird93->plumageColors()->save($weiss);
        $bird93->plumageColors()->save($beige);
        $bird93->plumageColors()->save($braun);
        $bird93->legsColors()->save($schwarz);
        $bird93->legsColors()->save($grau);
        $bird93->beakColors()->save($schwarz);
        $bird93->beakColors()->save($braun);
        $bird93->beakColors()->save($rot);
        $bird93->beakShapes()->attach($lang_duenn);
        $bird93->sizes()->attach($taube_stockente);
        $bird93->save();

        $bird94 = Bird::create( [
            'name' => 'Scolopax rusticola',
            'name_de' => '',
            'name_fr' => 'Bécasse des bois',
            'name_it' => 'Beccaccia',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird94->pictures()->save($waldschnepfe_1);
        $bird94->habitats()->attach($wald);
        $bird94->family()->associate($scolopacidae);
        $bird94->order()->associate($charadriiformes);
        $bird94->plumageColors()->save($schwarz);
        $bird94->plumageColors()->save($beige);
        $bird94->plumageColors()->save($braun);
        $bird94->legsColors()->save($braun);
        $bird94->legsColors()->save($rot);
        $bird94->beakColors()->save($schwarz);
        $bird94->beakShapes()->attach($lang_duenn);
        $bird94->sizes()->attach($taube_stockente);
        $bird94->save();

        $bird95 = Bird::create( [
            'name' => 'Gallinago gallinago',
            'name_de' => '',
            'name_fr' => 'Bécassine des marais',
            'name_it' => 'Beccaccino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird95->pictures()->save($bekassine_1);
        $bird95->pictures()->save($bekassine_2);
        $bird95->habitats()->attach($aecker_und_feldflur);
        $bird95->habitats()->attach($wiesen_und_weiden);
        $bird95->habitats()->attach($gewaesser);
        $bird95->family()->associate($scolopacidae);
        $bird95->order()->associate($charadriiformes);
        $bird95->plumageColors()->save($schwarz);
        $bird95->plumageColors()->save($weiss);
        $bird95->plumageColors()->save($braun);
        $bird95->legsColors()->save($braun);
        $bird95->legsColors()->save($gelb);
        $bird95->legsColors()->save($rosa);
        $bird95->beakColors()->save($schwarz);
        $bird95->beakColors()->save($braun);
        $bird95->beakShapes()->attach($lang_duenn);
        $bird95->sizes()->attach($amsel_taube);
        $bird95->save();

        $bird96 = Bird::create( [
            'name' => 'Philomachus pugnax',
            'name_de' => '',
            'name_fr' => 'Combattant varié',
            'name_it' => 'Combattente',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird96->pictures()->save($kampflaeufer_1);
        $bird96->pictures()->save($kampflaeufer_2);
        $bird96->habitats()->attach($aecker_und_feldflur);
        $bird96->habitats()->attach($wiesen_und_weiden);
        $bird96->habitats()->attach($gewaesser);
        $bird96->family()->associate($scolopacidae);
        $bird96->order()->associate($charadriiformes);
        $bird96->plumageColors()->save($schwarz);
        $bird96->plumageColors()->save($grau);
        $bird96->plumageColors()->save($weiss);
        $bird96->plumageColors()->save($beige);
        $bird96->plumageColors()->save($braun);
        $bird96->plumageColors()->save($orange);
        $bird96->legsColors()->save($gelb);
        $bird96->legsColors()->save($orange);
        $bird96->legsColors()->save($rot);
        $bird96->beakColors()->save($schwarz);
        $bird96->beakColors()->save($braun);
        $bird96->beakColors()->save($orange);
        $bird96->beakColors()->save($rosa);
        $bird96->beakShapes()->attach($lang_duenn);
        $bird96->sizes()->attach($amsel_taube);
        $bird96->save();

        $bird97 = Bird::create( [
            'name' => 'Larus ridibundus',
            'name_de' => '',
            'name_fr' => 'Mouette rieuse',
            'name_it' => 'Gabbiano comune',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> en été, la mouette rieuse a un capuchon brun foncé et un bec rouge. En hiver, la tête est blanche avec deux taches noires diffuses, le bec est bicolore rouge et noir. Les juvéniles ont des ailes tachetées de brun.r<br /><br /><strong>Voix:</strong> un ricanement rauque «krréarr».r<br /><br /><strong>Distribution:</strong> en Suisse, ne niche qu\'à quelques endroits sur des u00eeles de gravier ou des plateformes de nidification. Fréquent en hiver sur divers plans et cours d\'eau.r<br /><br /><strong>Nourriture:</strong> petits animaux comme insectes, vers, petits poissons, crustacés, etc.r<br /><br /><strong>Nidification:</strong> pond généralement 3 oeufs dans un nid peu profond composé de tiges de roseaux. Le nid est souvent construit sur des u00eeles à l\'abri des prédateurs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird97->pictures()->save($lachmoewe_1);
        $bird97->pictures()->save($lachmoewe_2);
        $bird97->pictures()->save($lachmoewe_3);
        $bird97->habitats()->attach($aecker_und_feldflur);
        $bird97->habitats()->attach($wiesen_und_weiden);
        $bird97->habitats()->attach($siedlungsraum);
        $bird97->habitats()->attach($gewaesser);
        $bird97->family()->associate($laridae);
        $bird97->order()->associate($charadriiformes);
        $bird97->plumageColors()->save($schwarz);
        $bird97->plumageColors()->save($grau);
        $bird97->plumageColors()->save($weiss);
        $bird97->plumageColors()->save($braun);
        $bird97->legsColors()->save($rot);
        $bird97->legsColors()->save($orange);
        $bird97->beakColors()->save($schwarz);
        $bird97->beakColors()->save($braun);
        $bird97->beakColors()->save($orange);
        $bird97->beakColors()->save($rot);
        $bird97->beakShapes()->attach($normal);
        $bird97->sizes()->attach($taube_stockente);
        $bird97->save();

        $bird98 = Bird::create( [
            'name' => 'Larus canus',
            'name_de' => '',
            'name_fr' => 'Goéland cendré',
            'name_it' => 'Gavina',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird98->pictures()->save($sturmmoewe_1);
        $bird98->pictures()->save($sturmmoewe_2);
        $bird98->habitats()->attach($aecker_und_feldflur);
        $bird98->habitats()->attach($siedlungsraum);
        $bird98->habitats()->attach($gewaesser);
        $bird98->family()->associate($laridae);
        $bird98->order()->associate($charadriiformes);
        $bird98->plumageColors()->save($schwarz);
        $bird98->plumageColors()->save($grau);
        $bird98->plumageColors()->save($weiss);
        $bird98->plumageColors()->save($braun);
        $bird98->legsColors()->save($gruen);
        $bird98->legsColors()->save($rosa);
        $bird98->beakColors()->save($schwarz);
        $bird98->beakColors()->save($gelb);
        $bird98->beakColors()->save($rosa);
        $bird98->beakColors()->save($gruen);
        $bird98->beakShapes()->attach($normal);
        $bird98->sizes()->attach($taube_stockente);
        $bird98->save();

        $bird99 = Bird::create( [
            'name' => 'Larus melanocephalus',
            'name_de' => '',
            'name_fr' => 'Mouette mélanocéphale',
            'name_it' => 'Gabbiano corallino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird99->pictures()->save($schwarzkopfmoewe_1);
        $bird99->pictures()->save($schwarzkopfmoewe_2);
        $bird99->habitats()->attach($gewaesser);
        $bird99->family()->associate($laridae);
        $bird99->order()->associate($charadriiformes);
        $bird99->plumageColors()->save($schwarz);
        $bird99->plumageColors()->save($grau);
        $bird99->plumageColors()->save($weiss);
        $bird99->plumageColors()->save($braun);
        $bird99->legsColors()->save($rot);
        $bird99->beakColors()->save($schwarz);
        $bird99->beakColors()->save($grau);
        $bird99->beakColors()->save($rot);
        $bird99->beakShapes()->attach($normal);
        $bird99->sizes()->attach($taube_stockente);
        $bird99->save();

        $bird100 = Bird::create( [
            'name' => 'Larus michahellis',
            'name_de' => '',
            'name_fr' => 'Goéland leucophée ',
            'name_it' => 'Gabbiano reale',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird100->pictures()->save($mittelmeermoewe_1);
        $bird100->pictures()->save($mittelmeermoewe_2);
        $bird100->pictures()->save($mittelmeermoewe_3);
        $bird100->habitats()->attach($gewaesser);
        $bird100->family()->associate($laridae);
        $bird100->order()->associate($charadriiformes);
        $bird100->plumageColors()->save($schwarz);
        $bird100->plumageColors()->save($grau);
        $bird100->plumageColors()->save($weiss);
        $bird100->plumageColors()->save($braun);
        $bird100->legsColors()->save($gelb);
        $bird100->beakColors()->save($schwarz);
        $bird100->beakColors()->save($rot);
        $bird100->beakColors()->save($gelb);
        $bird100->beakShapes()->attach($normal);
        $bird100->beakShapes()->attach($lang_hakenfoermig);
        $bird100->sizes()->attach($taube_stockente);
        $bird100->sizes()->attach($stockente_);
        $bird100->save();

        $bird101 = Bird::create( [
            'name' => 'Hydrocoloeus minutus',
            'name_de' => '',
            'name_fr' => 'Mouette pygmée ',
            'name_it' => 'Gabbianello',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird101->pictures()->save($zwergmoewe_1);
        $bird101->habitats()->attach($gewaesser);
        $bird101->family()->associate($laridae);
        $bird101->order()->associate($charadriiformes);
        $bird101->plumageColors()->save($schwarz);
        $bird101->plumageColors()->save($grau);
        $bird101->plumageColors()->save($weiss);
        $bird101->legsColors()->save($rot);
        $bird101->legsColors()->save($grau);
        $bird101->legsColors()->save($rosa);
        $bird101->beakColors()->save($schwarz);
        $bird101->beakColors()->save($rot);
        $bird101->beakShapes()->attach($normal);
        $bird101->sizes()->attach($amsel_taube);
        $bird101->sizes()->attach($taube_stockente);
        $bird101->save();

        $bird102 = Bird::create( [
            'name' => 'Sterna hirundo',
            'name_de' => '',
            'name_fr' => 'Sterne pierregarin',
            'name_it' => 'Sterna comune',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird102->pictures()->save($flussseeschwalbe_1);
        $bird102->pictures()->save($flussseeschwalbe_2);
        $bird102->pictures()->save($flussseeschwalbe_3);
        $bird102->habitats()->attach($gewaesser);
        $bird102->family()->associate($sternidae);
        $bird102->order()->associate($charadriiformes);
        $bird102->plumageColors()->save($schwarz);
        $bird102->plumageColors()->save($grau);
        $bird102->plumageColors()->save($weiss);
        $bird102->plumageColors()->save($braun);
        $bird102->legsColors()->save($rot);
        $bird102->legsColors()->save($orange);
        $bird102->beakColors()->save($schwarz);
        $bird102->beakColors()->save($orange);
        $bird102->beakColors()->save($rot);
        $bird102->beakShapes()->attach($lang_dolchfoermig);
        $bird102->sizes()->attach($amsel_taube);
        $bird102->sizes()->attach($taube_stockente);
        $bird102->save();

        $bird103 = Bird::create( [
            'name' => 'Chlidonias niger',
            'name_de' => '',
            'name_fr' => 'Guifette noire',
            'name_it' => 'Mignattino comune',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird103->pictures()->save($trauerseeschwalbe_1);
        $bird103->habitats()->attach($gewaesser);
        $bird103->family()->associate($sternidae);
        $bird103->order()->associate($charadriiformes);
        $bird103->plumageColors()->save($schwarz);
        $bird103->plumageColors()->save($grau);
        $bird103->plumageColors()->save($weiss);
        $bird103->legsColors()->save($schwarz);
        $bird103->legsColors()->save($braun);
        $bird103->beakColors()->save($schwarz);
        $bird103->beakShapes()->attach($normal);
        $bird103->beakShapes()->attach($lang_duenn);
        $bird103->sizes()->attach($amsel_taube);
        $bird103->save();

        $bird104 = Bird::create( [
            'name' => 'Columba livia f. domestica',
            'name_de' => '',
            'name_fr' => 'Pigeon biset domestique',
            'name_it' => 'Piccione torraiolo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> de nombreuses variantes de plumage, couleur de base gris clair à gris foncé.<br /><br /><strong>Voix:</strong> roucoulement «druou-u».<br /><br /><strong>Distribution:</strong> large distribution, souvent en grand nombre dans les villes et villages. Descend de pigeons bisets issus de pigeonniers. Ceux-ci sont élevés comme pigeons voyageurs. Les variations de plumage proviennent des différentes lignées d&rsquo;élevage.<br /><br /><strong>Nourriture:</strong> graines et déchets.<br /><br /><strong>Nidification:</strong> nid contenant deux u0153ufs, dans une niche de bu00e2timent. Plusieurs nichées annuelles. Très fidèle au site de nidification et au partenaire. Ne change de partenaire que quand l\'un des deux meurt.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird104->pictures()->save($strassentaube_1);
        $bird104->pictures()->save($strassentaube_2);
        $bird104->pictures()->save($strassentaube_3);
        $bird104->pictures()->save($strassentaube_4);
        $bird104->habitats()->attach($siedlungsraum);
        $bird104->family()->associate($columbidae);
        $bird104->order()->associate($columbiformes);
        $bird104->plumageColors()->save($schwarz);
        $bird104->plumageColors()->save($grau);
        $bird104->plumageColors()->save($gruen);
        $bird104->legsColors()->save($rot);
        $bird104->beakColors()->save($schwarz);
        $bird104->beakShapes()->attach($normal);
        $bird104->sizes()->attach($amsel_taube);
        $bird104->sizes()->attach($taube_stockente);
        $bird104->save();

        $bird105 = Bird::create( [
            'name' => 'Columba oenas',
            'name_de' => '',
            'name_fr' => 'Pigeon colombin',
            'name_it' => 'Colombella',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird105->pictures()->save($hohltaube_1);
        $bird105->habitats()->attach($aecker_und_feldflur);
        $bird105->habitats()->attach($siedlungsraum);
        $bird105->habitats()->attach($wald);
        $bird105->family()->associate($columbidae);
        $bird105->order()->associate($columbiformes);
        $bird105->plumageColors()->save($schwarz);
        $bird105->plumageColors()->save($grau);
        $bird105->plumageColors()->save($weiss);
        $bird105->plumageColors()->save($rosa);
        $bird105->legsColors()->save($braun);
        $bird105->legsColors()->save($orange);
        $bird105->legsColors()->save($rot);
        $bird105->beakColors()->save($braun);
        $bird105->beakColors()->save($orange);
        $bird105->beakShapes()->attach($normal);
        $bird105->sizes()->attach($taube_stockente);
        $bird105->save();

        $bird106 = Bird::create( [
            'name' => 'Columba palumbus',
            'name_de' => '',
            'name_fr' => 'Pigeon ramier',
            'name_it' => 'Colombaccio',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> plus grand que le pigeon biset domestique. Tache blanche typique au cu00f4té du cou et, en vol, barre alaire blanche bien visible.r<br /><br /><strong>Voix:</strong> roucoulement doux et étouffé «houh-hrou». En parade, chant pentasyllabique «rouh-rou,ro-ro...rou».r<br /><br /><strong>Distribution:</strong> jusqu&rsquo;à environ 1000 m, dans les forêts et les parcs. S&rsquo;aventure de plus en plus dans les villes. Hiverne dans le sud de l\'Europe, quelques individus passent l&rsquo;hiver chez nous.r<br /><br /><strong>Nourriture:</strong> diverses graines et céréales.r<br /><br /><strong>Nidification:</strong> 2 u0153ufs sont couvés dans un nid simple construit dans un arbre à 3-15 m de hauteur.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird106->pictures()->save($ringeltaube_1);
        $bird106->pictures()->save($ringeltaube_2);
        $bird106->habitats()->attach($aecker_und_feldflur);
        $bird106->habitats()->attach($siedlungsraum);
        $bird106->habitats()->attach($wald);
        $bird106->family()->associate($columbidae);
        $bird106->order()->associate($columbiformes);
        $bird106->plumageColors()->save($schwarz);
        $bird106->plumageColors()->save($grau);
        $bird106->plumageColors()->save($weiss);
        $bird106->plumageColors()->save($rosa);
        $bird106->legsColors()->save($rot);
        $bird106->legsColors()->save($rosa);
        $bird106->beakColors()->save($grau);
        $bird106->beakColors()->save($rot);
        $bird106->beakColors()->save($gelb);
        $bird106->beakShapes()->attach($normal);
        $bird106->sizes()->attach($amsel_taube);
        $bird106->sizes()->attach($taube_stockente);
        $bird106->save();

        $bird107 = Bird::create( [
            'name' => 'Streptopelia decaocto',
            'name_de' => '',
            'name_fr' => 'Tourterelle turque',
            'name_it' => 'Tortora dal collare',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> tourterelle de couleur gris-u00adbrunu00e2tre clair, demi-collier noir bordé de blanc sur l&rsquo;arrière du cou.r<br /><br /><strong>Voix:</strong> roucoulement trisyllabique «dou-dou-do» avec accentuation de la deuxième syllabe. r<br /><br /><strong>Distribution:</strong> depuis les années 1930, a colonisé l&rsquo;Europe centrale à partir des Balkans jusqu&rsquo;en Islande et en Espagne. Vit toute l&rsquo;année chez nous, à proximité des habitations humaines, dans les jardins et les parcs. r<br /><br /><strong>Nourriture:</strong> diverses graines, déchets, fruits.r<br /><br /><strong>Nidification:</strong> monogame, toute la vie avec le même partenaire, une nichée annuelle avec 2 u0153ufs, nid dans un arbre (de préférence sur un conifère).',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird107->pictures()->save($tuerkentaube_1);
        $bird107->habitats()->attach($aecker_und_feldflur);
        $bird107->habitats()->attach($siedlungsraum);
        $bird107->family()->associate($columbidae);
        $bird107->order()->associate($columbiformes);
        $bird107->plumageColors()->save($schwarz);
        $bird107->plumageColors()->save($grau);
        $bird107->plumageColors()->save($weiss);
        $bird107->plumageColors()->save($beige);
        $bird107->plumageColors()->save($braun);
        $bird107->plumageColors()->save($rosa);
        $bird107->legsColors()->save($braun);
        $bird107->legsColors()->save($orange);
        $bird107->legsColors()->save($rot);
        $bird107->beakColors()->save($schwarz);
        $bird107->beakColors()->save($grau);
        $bird107->beakShapes()->attach($normal);
        $bird107->sizes()->attach($amsel_taube);
        $bird107->save();

        $bird108 = Bird::create( [
            'name' => 'Streptopelia turtur',
            'name_de' => '',
            'name_fr' => 'Tourterelle des bois',
            'name_it' => 'Tortora selvatica',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird108->pictures()->save($turteltaube_1);
        $bird108->habitats()->attach($aecker_und_feldflur);
        $bird108->habitats()->attach($wiesen_und_weiden);
        $bird108->habitats()->attach($wald);
        $bird108->family()->associate($columbidae);
        $bird108->order()->associate($columbiformes);
        $bird108->plumageColors()->save($schwarz);
        $bird108->plumageColors()->save($grau);
        $bird108->plumageColors()->save($weiss);
        $bird108->plumageColors()->save($beige);
        $bird108->plumageColors()->save($braun);
        $bird108->plumageColors()->save($orange);
        $bird108->plumageColors()->save($rosa);
        $bird108->legsColors()->save($braun);
        $bird108->legsColors()->save($orange);
        $bird108->legsColors()->save($rot);
        $bird108->beakColors()->save($schwarz);
        $bird108->beakShapes()->attach($normal);
        $bird108->sizes()->attach($amsel_taube);
        $bird108->save();

        $bird109 = Bird::create( [
            'name' => 'Cuculus canorus',
            'name_de' => '',
            'name_fr' => 'Coucou gris',
            'name_it' => 'Cuculo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird109->pictures()->save($kuckuck_1);
        $bird109->habitats()->attach($aecker_und_feldflur);
        $bird109->habitats()->attach($wiesen_und_weiden);
        $bird109->habitats()->attach($gebirge);
        $bird109->habitats()->attach($siedlungsraum);
        $bird109->habitats()->attach($gewaesser);
        $bird109->habitats()->attach($wald);
        $bird109->family()->associate($cuculidae);
        $bird109->order()->associate($cuculiformes);
        $bird109->plumageColors()->save($schwarz);
        $bird109->plumageColors()->save($grau);
        $bird109->plumageColors()->save($weiss);
        $bird109->plumageColors()->save($beige);
        $bird109->plumageColors()->save($braun);
        $bird109->legsColors()->save($gelb);
        $bird109->beakColors()->save($schwarz);
        $bird109->beakColors()->save($grau);
        $bird109->beakColors()->save($gelb);
        $bird109->beakShapes()->attach($normal);
        $bird109->beakShapes()->attach($lang_duenn);
        $bird109->sizes()->attach($amsel_taube);
        $bird109->sizes()->attach($taube_stockente);
        $bird109->save();

        $bird110 = Bird::create( [
            'name' => 'Tyto alba',
            'name_de' => '',
            'name_fr' => 'Effraie des clochers',
            'name_it' => 'Barbagianni',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird110->habitats()->attach($aecker_und_feldflur);
        $bird110->habitats()->attach($wiesen_und_weiden);
        $bird110->habitats()->attach($siedlungsraum);
        $bird110->family()->associate($tytonidae);
        $bird110->order()->associate($strigiformes);
        $bird110->plumageColors()->save($grau);
        $bird110->plumageColors()->save($weiss);
        $bird110->plumageColors()->save($beige);
        $bird110->plumageColors()->save($braun);
        $bird110->plumageColors()->save($orange);
        $bird110->legsColors()->save($weiss);
        $bird110->legsColors()->save($braun);
        $bird110->legsColors()->save($rot);
        $bird110->beakColors()->save($braun);
        $bird110->beakShapes()->attach($kurz_hakenfoermig);
        $bird110->sizes()->attach($taube_stockente);
        $bird110->save();

        $bird111 = Bird::create( [
            'name' => 'Bubo bubo',
            'name_de' => '',
            'name_fr' => 'Grand-duc d`Europe',
            'name_it' => 'Gufo reale',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird111->habitats()->attach($gebirge);
        $bird111->habitats()->attach($wald);
        $bird111->family()->associate($strigidae);
        $bird111->order()->associate($strigiformes);
        $bird111->plumageColors()->save($grau);
        $bird111->plumageColors()->save($beige);
        $bird111->plumageColors()->save($braun);
        $bird111->legsColors()->save($gelb);
        $bird111->beakColors()->save($schwarz);
        $bird111->beakColors()->save($grau);
        $bird111->beakShapes()->attach($kurz_hakenfoermig);
        $bird111->sizes()->attach($stockente_);
        $bird111->save();

        $bird112 = Bird::create( [
            'name' => 'Asio otus',
            'name_de' => '',
            'name_fr' => 'Hibou moyen-duc',
            'name_it' => 'Gufo comune',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird112->pictures()->save($waldohreule_1);
        $bird112->habitats()->attach($aecker_und_feldflur);
        $bird112->habitats()->attach($gewaesser);
        $bird112->habitats()->attach($wald);
        $bird112->family()->associate($strigidae);
        $bird112->order()->associate($strigiformes);
        $bird112->plumageColors()->save($grau);
        $bird112->plumageColors()->save($beige);
        $bird112->plumageColors()->save($braun);
        $bird112->plumageColors()->save($orange);
        $bird112->legsColors()->save($braun);
        $bird112->beakColors()->save($schwarz);
        $bird112->beakShapes()->attach($kurz_hakenfoermig);
        $bird112->sizes()->attach($taube_stockente);
        $bird112->save();

        $bird113 = Bird::create( [
            'name' => 'Otus scops',
            'name_de' => '',
            'name_fr' => 'Petit-duc scops',
            'name_it' => 'Assiolo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird113->habitats()->attach($aecker_und_feldflur);
        $bird113->habitats()->attach($wiesen_und_weiden);
        $bird113->family()->associate($strigidae);
        $bird113->order()->associate($strigiformes);
        $bird113->plumageColors()->save($schwarz);
        $bird113->plumageColors()->save($grau);
        $bird113->plumageColors()->save($weiss);
        $bird113->plumageColors()->save($beige);
        $bird113->plumageColors()->save($braun);
        $bird113->legsColors()->save($grau);
        $bird113->legsColors()->save($beige);
        $bird113->legsColors()->save($braun);
        $bird113->beakColors()->save($schwarz);
        $bird113->beakShapes()->attach($kurz_hakenfoermig);
        $bird113->sizes()->attach($spatz_amsel);
        $bird113->save();

        $bird114 = Bird::create( [
            'name' => 'Strix aluco',
            'name_de' => '',
            'name_fr' => 'Chouette hulotte ',
            'name_it' => 'Allocco',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird114->pictures()->save($waldkauz_1);
        $bird114->habitats()->attach($aecker_und_feldflur);
        $bird114->habitats()->attach($siedlungsraum);
        $bird114->habitats()->attach($wald);
        $bird114->family()->associate($strigidae);
        $bird114->order()->associate($strigiformes);
        $bird114->plumageColors()->save($schwarz);
        $bird114->plumageColors()->save($grau);
        $bird114->plumageColors()->save($weiss);
        $bird114->plumageColors()->save($braun);
        $bird114->legsColors()->save($schwarz);
        $bird114->legsColors()->save($weiss);
        $bird114->legsColors()->save($braun);
        $bird114->beakColors()->save($schwarz);
        $bird114->beakShapes()->attach($kurz_hakenfoermig);
        $bird114->sizes()->attach($taube_stockente);
        $bird114->sizes()->attach($stockente_);
        $bird114->save();

        $bird115 = Bird::create( [
            'name' => 'Athene noctua',
            'name_de' => '',
            'name_fr' => 'Chevêche d`Athéna',
            'name_it' => 'Civetta',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird115->pictures()->save($steinkauz_1);
        $bird115->habitats()->attach($aecker_und_feldflur);
        $bird115->habitats()->attach($wiesen_und_weiden);
        $bird115->family()->associate($strigidae);
        $bird115->order()->associate($strigiformes);
        $bird115->plumageColors()->save($weiss);
        $bird115->plumageColors()->save($beige);
        $bird115->plumageColors()->save($braun);
        $bird115->legsColors()->save($schwarz);
        $bird115->legsColors()->save($gelb);
        $bird115->beakColors()->save($schwarz);
        $bird115->beakColors()->save($grau);
        $bird115->beakColors()->save($braun);
        $bird115->beakShapes()->attach($kurz_hakenfoermig);
        $bird115->sizes()->attach($spatz_amsel);
        $bird115->sizes()->attach($amsel_taube);
        $bird115->save();

        $bird116 = Bird::create( [
            'name' => 'Aegolius funereus',
            'name_de' => '',
            'name_fr' => 'Chouette de Tengmalm ',
            'name_it' => 'Civetta capogrosso',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird116->habitats()->attach($wald);
        $bird116->family()->associate($strigidae);
        $bird116->order()->associate($strigiformes);
        $bird116->plumageColors()->save($schwarz);
        $bird116->plumageColors()->save($grau);
        $bird116->plumageColors()->save($weiss);
        $bird116->plumageColors()->save($braun);
        $bird116->legsColors()->save($gelb);
        $bird116->beakColors()->save($schwarz);
        $bird116->beakColors()->save($gelb);
        $bird116->beakShapes()->attach($kurz_hakenfoermig);
        $bird116->sizes()->attach($taube_stockente);
        $bird116->save();

        $bird117 = Bird::create( [
            'name' => 'Glaucidium passerinum',
            'name_de' => '',
            'name_fr' => 'Chevêchette d\'Europe ',
            'name_it' => 'Civetta nana',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird117->habitats()->attach($wald);
        $bird117->family()->associate($strigidae);
        $bird117->order()->associate($strigiformes);
        $bird117->plumageColors()->save($grau);
        $bird117->plumageColors()->save($weiss);
        $bird117->plumageColors()->save($braun);
        $bird117->legsColors()->save($grau);
        $bird117->legsColors()->save($braun);
        $bird117->beakColors()->save($grau);
        $bird117->beakColors()->save($braun);
        $bird117->beakShapes()->attach($kurz_hakenfoermig);
        $bird117->sizes()->attach($spatz_amsel);
        $bird117->save();

        $bird118 = Bird::create( [
            'name' => 'Caprimulgus europaeus',
            'name_de' => '',
            'name_fr' => 'Engoulevent d\'Europe ',
            'name_it' => 'Succiacapre',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird118->pictures()->save($ziegenmelker_1);
        $bird118->habitats()->attach($aecker_und_feldflur);
        $bird118->habitats()->attach($wald);
        $bird118->family()->associate($caprimulgidae);
        $bird118->order()->associate($caprimulgiformes);
        $bird118->plumageColors()->save($grau);
        $bird118->plumageColors()->save($weiss);
        $bird118->plumageColors()->save($beige);
        $bird118->plumageColors()->save($braun);
        $bird118->legsColors()->save($schwarz);
        $bird118->legsColors()->save($braun);
        $bird118->beakColors()->save($schwarz);
        $bird118->beakShapes()->attach($kurz_duenn);
        $bird118->sizes()->attach($amsel_taube);
        $bird118->save();

        $bird119 = Bird::create( [
            'name' => 'Apus apus',
            'name_de' => '',
            'name_fr' => 'Martinet noir',
            'name_it' => 'Rondone comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> observable seulement en vol, il passe plus de 70% de sa vie dans l\'air, aussi pour dormir. Ses longues ailes falciformes le différencient des hirondelles. Depuis dessous parau00eet en grande partie noir.<br /><br /><strong>Voix:</strong> cris peru00e7ants «sriiii».<br /><br /><strong>Distribution:</strong> colonies de nidification dans les anfractuosités de hauts bu00e2timents. Quitte la Suisse fin juillet déjà pour hiverner en Afrique centrale et du Sud.<br /><br /><strong>Nourriture:</strong> insectes attrapés en vol. Un couple qui nourrit ses jeunes peut leur apporter jusqu\'à 20&rsquo;000 insectes par jour.<br /><br /><strong>Nidification:</strong> dans une anfractuosité sous le toit, nid avec 2-3, rarement 4 u0153ufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird119->pictures()->save($mauersegler_1);
        $bird119->habitats()->attach($aecker_und_feldflur);
        $bird119->habitats()->attach($wiesen_und_weiden);
        $bird119->habitats()->attach($siedlungsraum);
        $bird119->habitats()->attach($gewaesser);
        $bird119->family()->associate($apodidae);
        $bird119->order()->associate($apodiformes);
        $bird119->plumageColors()->save($schwarz);
        $bird119->plumageColors()->save($weiss);
        $bird119->plumageColors()->save($braun);
        $bird119->legsColors()->save($schwarz);
        $bird119->legsColors()->save($braun);
        $bird119->beakColors()->save($schwarz);
        $bird119->beakShapes()->attach($kurz_duenn);
        $bird119->sizes()->attach($spatz_amsel);
        $bird119->save();

        $bird120 = Bird::create( [
            'name' => 'Apus pallidus',
            'name_de' => '',
            'name_fr' => 'Martinet pu00e2le',
            'name_it' => 'Rondone pallido',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird120->pictures()->save($fahlsegler_1);
        $bird120->pictures()->save($fahlsegler_2);
        $bird120->habitats()->attach($aecker_und_feldflur);
        $bird120->habitats()->attach($wiesen_und_weiden);
        $bird120->habitats()->attach($siedlungsraum);
        $bird120->family()->associate($apodidae);
        $bird120->order()->associate($apodiformes);
        $bird120->plumageColors()->save($schwarz);
        $bird120->plumageColors()->save($grau);
        $bird120->plumageColors()->save($weiss);
        $bird120->plumageColors()->save($braun);
        $bird120->legsColors()->save($schwarz);
        $bird120->legsColors()->save($braun);
        $bird120->beakColors()->save($schwarz);
        $bird120->beakShapes()->attach($kurz_duenn);
        $bird120->sizes()->attach($spatz_amsel);
        $bird120->save();

        $bird121 = Bird::create( [
            'name' => 'Tachymarptis melba',
            'name_de' => '',
            'name_fr' => 'Martinet à ventre blanc',
            'name_it' => 'Rondone maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> plus grand que le martinet noir, dessous blanc.<br /><br /><strong>Voix:</strong> trilles lents, s&rsquo;accélérant puis s\'étirant.<br /><br /><strong>Distribution:</strong> colonies dans de hauts bu00e2timents en ville. Les plus grandes colonies (>100 couples) à Berne, Soleure et Zurich. Dans les Alpes, dans les parois rocheuses. Passent plus de 7 mois par année en l\'air, y compris pour dormir. Hivernent en Afrique tropicale. En tant qu\'espèce potentiellement menacée, le martinet à ventre blanc a besoin de la mise à disposition de sites de nidification adéquats.<br /><br /><strong>Nourriture:</strong> comme le martinet noir.<br /><br /><strong>Nidification:</strong> sous les toits, 1-3, rarement 4 jeunes.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird121->pictures()->save($alpensegler_1);
        $bird121->habitats()->attach($gebirge);
        $bird121->habitats()->attach($siedlungsraum);
        $bird121->habitats()->attach($aecker_und_feldflur);
        $bird121->habitats()->attach($wiesen_und_weiden);
        $bird121->family()->associate($apodidae);
        $bird121->order()->associate($apodiformes);
        $bird121->plumageColors()->save($weiss);
        $bird121->plumageColors()->save($braun);
        $bird121->plumageColors()->save($schwarz);
        $bird121->legsColors()->save($schwarz);
        $bird121->legsColors()->save($braun);
        $bird121->beakColors()->save($schwarz);
        $bird121->beakColors()->save($braun);
        $bird121->beakShapes()->attach($kurz_duenn);
        $bird121->sizes()->attach($spatz_amsel);
        $bird121->save();

        $bird122 = Bird::create( [
            'name' => 'Upupa epops',
            'name_de' => '',
            'name_fr' => 'huppe fasciée',
            'name_it' => 'Upupa',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird122->pictures()->save($wiedehopf_1);
        $bird122->pictures()->save($wiedehopf_2);
        $bird122->habitats()->attach($aecker_und_feldflur);
        $bird122->habitats()->attach($wiesen_und_weiden);
        $bird122->family()->associate($upupidae);
        $bird122->plumageColors()->save($schwarz);
        $bird122->plumageColors()->save($weiss);
        $bird122->plumageColors()->save($beige);
        $bird122->plumageColors()->save($braun);
        $bird122->plumageColors()->save($orange);
        $bird122->legsColors()->save($schwarz);
        $bird122->legsColors()->save($braun);
        $bird122->legsColors()->save($rot);
        $bird122->beakColors()->save($schwarz);
        $bird122->beakShapes()->attach($lang_duenn);
        $bird122->sizes()->attach($amsel_taube);
        $bird122->save();

        $bird123 = Bird::create( [
            'name' => 'Alcedo atthis',
            'name_de' => '',
            'name_fr' => 'Martin-pêcheur d`Europe',
            'name_it' => 'Martin pescatore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird123->pictures()->save($eisvogel_1);
        $bird123->habitats()->attach($gewaesser);
        $bird123->family()->associate($alcedinidae);
        $bird123->order()->associate($coraciiformes);
        $bird123->plumageColors()->save($weiss);
        $bird123->plumageColors()->save($orange);
        $bird123->plumageColors()->save($blau);
        $bird123->plumageColors()->save($schwarz);
        $bird123->legsColors()->save($schwarz);
        $bird123->legsColors()->save($rot);
        $bird123->legsColors()->save($orange);
        $bird123->beakColors()->save($schwarz);
        $bird123->beakColors()->save($rosa);
        $bird123->beakColors()->save($rot);
        $bird123->beakShapes()->attach($lang_dolchfoermig);
        $bird123->sizes()->attach($spatz_amsel);
        $bird123->save();

        $bird124 = Bird::create( [
            'name' => 'Merops apiaster',
            'name_de' => '',
            'name_fr' => 'Guêpier d\'Europe ',
            'name_it' => 'Gruccione',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird124->pictures()->save($bienenfresser_1);
        $bird124->pictures()->save($bienenfresser_2);
        $bird124->pictures()->save($bienenfresser_3);
        $bird124->habitats()->attach($aecker_und_feldflur);
        $bird124->habitats()->attach($wiesen_und_weiden);
        $bird124->family()->associate($meropidae);
        $bird124->order()->associate($coraciiformes);
        $bird124->plumageColors()->save($schwarz);
        $bird124->plumageColors()->save($beige);
        $bird124->plumageColors()->save($braun);
        $bird124->plumageColors()->save($gelb);
        $bird124->plumageColors()->save($orange);
        $bird124->plumageColors()->save($blau);
        $bird124->plumageColors()->save($gruen);
        $bird124->legsColors()->save($schwarz);
        $bird124->legsColors()->save($braun);
        $bird124->beakColors()->save($schwarz);
        $bird124->beakShapes()->attach($lang_duenn);
        $bird124->sizes()->attach($spatz_amsel);
        $bird124->sizes()->attach($amsel_taube);
        $bird124->save();

        $bird125 = Bird::create( [
            'name' => 'Dryocopus martius',
            'name_de' => '',
            'name_fr' => 'Pic noir',
            'name_it' => 'Picchio nero',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird125->pictures()->save($schwarzspecht_1);
        $bird125->habitats()->attach($wald);
        $bird125->family()->associate($picidae);
        $bird125->order()->associate($piciformes);
        $bird125->plumageColors()->save($schwarz);
        $bird125->plumageColors()->save($rot);
        $bird125->legsColors()->save($schwarz);
        $bird125->legsColors()->save($grau);
        $bird125->beakColors()->save($schwarz);
        $bird125->beakColors()->save($grau);
        $bird125->beakColors()->save($weiss);
        $bird125->beakShapes()->attach($meisselfoermig);
        $bird125->sizes()->attach($taube_stockente);
        $bird125->save();

        $bird126 = Bird::create( [
            'name' => 'Picus viridis',
            'name_de' => '',
            'name_fr' => 'Pic vert',
            'name_it' => 'Picchio verde',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> plus petit qu&rsquo;une corneille. Dessus vert avec calotte rouge, la femelle est plus grisu00e2tre et finement mouchetée. Vol onduleux comme tous les pics.r<br /><br /><strong>Voix:</strong> u201ericanementu201c un peu accéléré à la fin «kluh-kluh-kluh-kluh». Tambourine rarement.r<br /><br /><strong>Distribution:</strong> préfère les terrains semi-u00adouverts, les parcs, les vergers. Cherche fréquemment sa nourriture au sol. En montagne, on le trouve jusqu\'à la limite supérieure des arbres, aussi dans les forêts de conifères.r<br /><br /><strong>Nourriture:</strong> surtout fourmis, parfois d\'autres insectes. r<br /><br /><strong>Nidification:</strong> 5-7 u0153ufs. Loge sans litière comme chez tous les pics.r<br />',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird126->pictures()->save($gruenspecht_1);
        $bird126->habitats()->attach($aecker_und_feldflur);
        $bird126->habitats()->attach($wiesen_und_weiden);
        $bird126->habitats()->attach($siedlungsraum);
        $bird126->habitats()->attach($wald);
        $bird126->family()->associate($picidae);
        $bird126->order()->associate($piciformes);
        $bird126->plumageColors()->save($schwarz);
        $bird126->plumageColors()->save($braun);
        $bird126->plumageColors()->save($beige);
        $bird126->plumageColors()->save($rot);
        $bird126->plumageColors()->save($gruen);
        $bird126->legsColors()->save($schwarz);
        $bird126->legsColors()->save($braun);
        $bird126->beakColors()->save($schwarz);
        $bird126->beakColors()->save($grau);
        $bird126->beakShapes()->attach($meisselfoermig);
        $bird126->sizes()->attach($amsel_taube);
        $bird126->sizes()->attach($taube_stockente);
        $bird126->save();

        $bird127 = Bird::create( [
            'name' => 'Picus canus',
            'name_de' => '',
            'name_fr' => 'Pic cendré',
            'name_it' => 'Picchio cenerino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird127->habitats()->attach($aecker_und_feldflur);
        $bird127->habitats()->attach($wald);
        $bird127->family()->associate($picidae);
        $bird127->order()->associate($piciformes);
        $bird127->plumageColors()->save($schwarz);
        $bird127->plumageColors()->save($grau);
        $bird127->plumageColors()->save($rot);
        $bird127->plumageColors()->save($gruen);
        $bird127->legsColors()->save($schwarz);
        $bird127->legsColors()->save($grau);
        $bird127->beakColors()->save($schwarz);
        $bird127->beakColors()->save($grau);
        $bird127->beakShapes()->attach($meisselfoermig);
        $bird127->sizes()->attach($spatz_amsel);
        $bird127->sizes()->attach($amsel_taube);
        $bird127->save();

        $bird128 = Bird::create( [
            'name' => 'Dendrocopos major',
            'name_de' => '',
            'name_fr' => 'Pic épeiche',
            'name_it' => 'Picchio rosso maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> taille du merle. Seul le mu00e2le  a une nuque rouge, juvéniles  avec calotte rouge. Sous-caudales rouges.r<br /><br /><strong>Voix:</strong> le cri est un «kik» bref et net. Tambourinage au printemps pour délimiter le territoire, parfois sur des tu00f4les ou des poteaux de téléphone. r<br /><br /><strong>Distribution:</strong> partout ou00f9 il y a des arbres, parcs, forêt. Grimpe toujours vers le haut sur les troncs, comme tous les pics. Toute l&rsquo;année chez nous, jusqu&rsquo;à la limite supérieure des arbres. r<br /><br /><strong>Nourriture:</strong> insectes et leurs larves qu&rsquo;il extrait du bois avec sa longue langue.r<br /><br /><strong>Nidification:</strong> dépose 4-7 u0153ufs dans une loge qu&rsquo;il a construit lui-même, pas de litière.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird128->pictures()->save($buntspecht_1);
        $bird128->pictures()->save($buntspecht_2);
        $bird128->habitats()->attach($siedlungsraum);
        $bird128->habitats()->attach($wald);
        $bird128->family()->associate($picidae);
        $bird128->order()->associate($piciformes);
        $bird128->plumageColors()->save($schwarz);
        $bird128->plumageColors()->save($weiss);
        $bird128->plumageColors()->save($rot);
        $bird128->legsColors()->save($schwarz);
        $bird128->legsColors()->save($braun);
        $bird128->beakColors()->save($schwarz);
        $bird128->beakColors()->save($grau);
        $bird128->beakShapes()->attach($meisselfoermig);
        $bird128->sizes()->attach($spatz_amsel);
        $bird128->sizes()->attach($amsel_taube);
        $bird128->save();

        $bird129 = Bird::create( [
            'name' => 'Dendrocopos medius',
            'name_de' => '',
            'name_fr' => 'Pic mar',
            'name_it' => 'Picchio rosso mezzano',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird129->pictures()->save($mittelspecht_1);
        $bird129->habitats()->attach($wald);
        $bird129->family()->associate($picidae);
        $bird129->order()->associate($piciformes);
        $bird129->plumageColors()->save($schwarz);
        $bird129->plumageColors()->save($weiss);
        $bird129->plumageColors()->save($rot);
        $bird129->plumageColors()->save($rosa);
        $bird129->legsColors()->save($schwarz);
        $bird129->legsColors()->save($grau);
        $bird129->beakColors()->save($schwarz);
        $bird129->beakColors()->save($grau);
        $bird129->beakShapes()->attach($meisselfoermig );
        $bird129->sizes()->attach($spatz_amsel);
        $bird129->save();

        $bird130 = Bird::create( [
            'name' => 'Dendrocopos minor',
            'name_de' => '',
            'name_fr' => 'Pic épeichette',
            'name_it' => 'Picchio rosso minore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird130->pictures()->save($kleinspecht_1);
        $bird130->habitats()->attach($siedlungsraum);
        $bird130->habitats()->attach($gewaesser);
        $bird130->habitats()->attach($wald);
        $bird130->family()->associate($picidae);
        $bird130->order()->associate($piciformes);
        $bird130->plumageColors()->save($schwarz);
        $bird130->plumageColors()->save($weiss);
        $bird130->plumageColors()->save($rot);
        $bird130->legsColors()->save($schwarz);
        $bird130->beakColors()->save($schwarz);
        $bird130->beakShapes()->attach($meisselfoermig);
        $bird130->sizes()->attach($spatz_amsel);
        $bird130->save();

        $bird131 = Bird::create( [
            'name' => 'Dendrocopos leucotos',
            'name_de' => '',
            'name_fr' => 'Pic à dos blanc',
            'name_it' => 'Picchio dorsobianco',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird131->habitats()->attach($gebirge);
        $bird131->habitats()->attach($wald);
        $bird131->family()->associate($picidae);
        $bird131->order()->associate($piciformes);
        $bird131->plumageColors()->save($schwarz);
        $bird131->plumageColors()->save($weiss);
        $bird131->plumageColors()->save($rot);
        $bird131->legsColors()->save($schwarz);
        $bird131->legsColors()->save($grau);
        $bird131->beakColors()->save($schwarz);
        $bird131->beakColors()->save($grau);
        $bird131->beakShapes()->attach($meisselfoermig);
        $bird131->sizes()->attach($spatz_amsel);
        $bird131->sizes()->attach($amsel_taube);
        $bird131->save();

        $bird132 = Bird::create( [
            'name' => 'Picoides tridactylus',
            'name_de' => '',
            'name_fr' => 'Pic tridactyle',
            'name_it' => 'Picchio tridattilo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird132->pictures()->save($dreizehenspecht_1);
        $bird132->pictures()->save($dreizehenspecht_2);
        $bird132->habitats()->attach($gebirge);
        $bird132->habitats()->attach($wald);
        $bird132->family()->associate($picidae);
        $bird132->order()->associate($piciformes);
        $bird132->plumageColors()->save($schwarz);
        $bird132->plumageColors()->save($grau);
        $bird132->plumageColors()->save($weiss);
        $bird132->plumageColors()->save($gelb);
        $bird132->legsColors()->save($schwarz);
        $bird132->beakColors()->save($schwarz);
        $bird132->beakShapes()->attach($meisselschnabel);
        $bird132->sizes()->attach($spatz_amsel);
        $bird132->save();

        $bird133 = Bird::create( [
            'name' => 'Jynx torquilla',
            'name_de' => '',
            'name_fr' => 'Torcol fourmilier',
            'name_it' => 'Torcicollo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird133->pictures()->save($wendehals_1);
        $bird133->habitats()->attach($aecker_und_feldflur);
        $bird133->habitats()->attach($wiesen_und_weiden);
        $bird133->family()->associate($picidae);
        $bird133->order()->associate($piciformes);
        $bird133->plumageColors()->save($schwarz);
        $bird133->plumageColors()->save($grau);
        $bird133->plumageColors()->save($beige);
        $bird133->plumageColors()->save($braun);
        $bird133->legsColors()->save($schwarz);
        $bird133->legsColors()->save($braun);
        $bird133->beakColors()->save($schwarz);
        $bird133->beakShapes()->attach($normal);
        $bird133->beakShapes()->attach($meisselfoermig);
        $bird133->sizes()->attach($spatz_amsel);
        $bird133->save();

        $bird134 = Bird::create( [
            'name' => 'Alauda arvensis',
            'name_de' => '',
            'name_fr' => 'Alouette des champs',
            'name_it' => 'Allodola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird134->pictures()->save($feldlerche_1);
        $bird134->habitats()->attach($aecker_und_feldflur);
        $bird134->habitats()->attach($wiesen_und_weiden);
        $bird134->habitats()->attach($gebirge);
        $bird134->family()->associate($alaudidae);
        $bird134->order()->associate($passeri);
        $bird134->plumageColors()->save($schwarz);
        $bird134->plumageColors()->save($beige);
        $bird134->plumageColors()->save($braun);
        $bird134->plumageColors()->save($weiss);
        $bird134->legsColors()->save($rot);
        $bird134->beakColors()->save($schwarz);
        $bird134->beakColors()->save($braun);
        $bird134->beakShapes()->attach($normal);
        $bird134->sizes()->attach($spatz_amsel);
        $bird134->save();

        $bird135 = Bird::create( [
            'name' => 'Lullula arborea',
            'name_de' => '',
            'name_fr' => 'Alouette lulu',
            'name_it' => 'Tottavilla',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird135->pictures()->save($heidelerche_1);
        $bird135->habitats()->attach($aecker_und_feldflur);
        $bird135->habitats()->attach($wiesen_und_weiden);
        $bird135->family()->associate($alaudidae);
        $bird135->order()->associate($passeri);
        $bird135->plumageColors()->save($schwarz);
        $bird135->plumageColors()->save($weiss);
        $bird135->plumageColors()->save($beige);
        $bird135->plumageColors()->save($braun);
        $bird135->legsColors()->save($rot);
        $bird135->beakColors()->save($schwarz);
        $bird135->beakShapes()->attach($normal);
        $bird135->sizes()->attach($spatz_amsel);
        $bird135->save();

        $bird136 = Bird::create( [
            'name' => 'Riparia riparia',
            'name_de' => '',
            'name_fr' => 'Hirondelle de rivage',
            'name_it' => 'Topino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird136->pictures()->save($uferschwalbe_1);
        $bird136->pictures()->save($uferschwalbe_2);
        $bird136->habitats()->attach($aecker_und_feldflur);
        $bird136->habitats()->attach($gewaesser);
        $bird136->family()->associate($hirundinidae);
        $bird136->order()->associate($passeri);
        $bird136->plumageColors()->save($weiss);
        $bird136->plumageColors()->save($beige);
        $bird136->plumageColors()->save($braun);
        $bird136->legsColors()->save($schwarz);
        $bird136->legsColors()->save($braun);
        $bird136->beakColors()->save($schwarz);
        $bird136->beakShapes()->attach($kurz_duenn);
        $bird136->sizes()->attach($_spatz);
        $bird136->save();

        $bird137 = Bird::create( [
            'name' => 'Ptyonoprogne rupestris',
            'name_de' => '',
            'name_fr' => 'Hirondelle de rochers',
            'name_it' => 'Rondine montana',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird137->pictures()->save($felsenschwalbe_1);
        $bird137->pictures()->save($felsenschwalbe_2);
        $bird137->habitats()->attach($gebirge);
        $bird137->habitats()->attach($siedlungsraum);
        $bird137->family()->associate($hirundinidae);
        $bird137->order()->associate($passeri);
        $bird137->plumageColors()->save($beige);
        $bird137->plumageColors()->save($braun);
        $bird137->plumageColors()->save($weiss);
        $bird137->legsColors()->save($schwarz);
        $bird137->legsColors()->save($braun);
        $bird137->beakColors()->save($schwarz);
        $bird137->beakColors()->save($braun);
        $bird137->beakShapes()->attach($kurz_duenn);
        $bird137->sizes()->attach($_spatz);
        $bird137->sizes()->attach($spatz_amsel);
        $bird137->save();

        $bird138 = Bird::create( [
            'name' => 'Hirundo rustica',
            'name_de' => '',
            'name_fr' => 'Hirondelle rustique',
            'name_it' => 'Rondine',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> hirondelle à longue queue, dessous blanc avec gorge et front rouge brique, collier pectoral noir, dessus bleu-noir métallisé.<br /><br /><strong>Voix:</strong> le cri est un «tsivitt». Chant: long gazouillis cristallin entrecoupé d\'imitations et de trilles.<br /><br /><strong>Distribution:</strong> milieu cultivé ouvert et villages. Comportement migratoire comme hirondelle de fenêtre.<br /><br /><strong>Nourriture:</strong> insectes attrapés en vol mais également araignées.<br /><br /><strong>Nidification:</strong> niche à l\'intérieur de granges et d\'étables. Le nid est constitué de plus de 1000 boulettes de boue. 4-6  juvéniles sont élevés chaque année.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird138->pictures()->save($rauchschwalbe_1);
        $bird138->pictures()->save($rauchschwalbe_2);
        $bird138->habitats()->attach($aecker_und_feldflur);
        $bird138->habitats()->attach($wiesen_und_weiden);
        $bird138->habitats()->attach($siedlungsraum);
        $bird138->habitats()->attach($gewaesser);
        $bird138->family()->associate($hirundinidae);
        $bird138->order()->associate($passeri);
        $bird138->plumageColors()->save($schwarz);
        $bird138->plumageColors()->save($weiss);
        $bird138->plumageColors()->save($beige);
        $bird138->plumageColors()->save($orange);
        $bird138->plumageColors()->save($rot);
        $bird138->legsColors()->save($schwarz);
        $bird138->legsColors()->save($braun);
        $bird138->beakColors()->save($schwarz);
        $bird138->beakShapes()->attach($kurz_duenn);
        $bird138->sizes()->attach($_spatz);
        $bird138->sizes()->attach($spatz_amsel);
        $bird138->save();

        $bird139 = Bird::create( [
            'name' => 'Delichon urbicum',
            'name_de' => '',
            'name_fr' => 'Hirondelle de fenêtre',
            'name_it' => 'Balestruccio',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> hirondelle à queue courte, ventre blanc, croupion blanc et dessus bleu-noir métallisé.<br /><br /><strong>Voix:</strong> le cri est un «trrit» clair et roulé, le chant un gazouillis.<br /><br /><strong>Distribution:</strong> niche en colonies sur des bu00e2timents dans les villes et les villages. Se rassemblent en troupes nombreuses en automne et passent l\'hiver en Afrique centrale et du Sud.<br /><br /><strong>Nourriture:</strong> divers insectes attrapés en vol.<br /><br /><strong>Nidification:</strong> 2-6 u0153ufs sont couvés dans un nid de boue fixé sous un avant-toit. L\'installation de planchettes à fientes évite la salissure des fau00e7ades.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird139->pictures()->save($mehlschwalbe_1);
        $bird139->pictures()->save($mehlschwalbe_3);
        $bird139->pictures()->save($mehlschwalbe_2);
        $bird139->habitats()->attach($aecker_und_feldflur);
        $bird139->habitats()->attach($siedlungsraum);
        $bird139->habitats()->attach($gewaesser);
        $bird139->habitats()->attach($gebirge);
        $bird139->family()->associate($hirundinidae);
        $bird139->order()->associate($passeri);
        $bird139->plumageColors()->save($schwarz);
        $bird139->plumageColors()->save($weiss);
        $bird139->plumageColors()->save($blau);
        $bird139->legsColors()->save($schwarz);
        $bird139->legsColors()->save($weiss);
        $bird139->beakColors()->save($schwarz);
        $bird139->beakShapes()->attach($kurz_duenn);
        $bird139->sizes()->attach($_spatz);
        $bird139->save();

        $bird140 = Bird::create( [
            'name' => 'Anthus campestris',
            'name_de' => '',
            'name_fr' => 'Pipit rousseline',
            'name_it' => 'Calandro',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird140->pictures()->save($brachpieper_1);
        $bird140->habitats()->attach($aecker_und_feldflur);
        $bird140->habitats()->attach($wiesen_und_weiden);
        $bird140->family()->associate($motacillidae);
        $bird140->order()->associate($passeri);
        $bird140->plumageColors()->save($weiss);
        $bird140->plumageColors()->save($beige);
        $bird140->plumageColors()->save($braun);
        $bird140->legsColors()->save($rosa);
        $bird140->beakColors()->save($schwarz);
        $bird140->beakColors()->save($grau);
        $bird140->beakColors()->save($rosa);
        $bird140->beakShapes()->attach($normal);
        $bird140->beakShapes()->attach($kurz_duenn);
        $bird140->sizes()->attach($_spatz);
        $bird140->sizes()->attach($spatz_amsel);
        $bird140->save();

        $bird141 = Bird::create( [
            'name' => 'Anthus spinoletta',
            'name_de' => '',
            'name_fr' => 'Pipit spioncelle ',
            'name_it' => 'Spioncello',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird141->pictures()->save($bergpieper_1);
        $bird141->habitats()->attach($wiesen_und_weiden);
        $bird141->habitats()->attach($gewaesser);
        $bird141->habitats()->attach($gebirge);
        $bird141->family()->associate($motacillidae);
        $bird141->order()->associate($passeri);
        $bird141->plumageColors()->save($grau);
        $bird141->plumageColors()->save($weiss);
        $bird141->plumageColors()->save($beige);
        $bird141->plumageColors()->save($braun);
        $bird141->plumageColors()->save($rosa);
        $bird141->legsColors()->save($schwarz);
        $bird141->legsColors()->save($braun);
        $bird141->beakColors()->save($schwarz);
        $bird141->beakShapes()->attach($normal);
        $bird141->beakShapes()->attach($kurz_duenn);
        $bird141->sizes()->attach($_spatz);
        $bird141->sizes()->attach($spatz_amsel);
        $bird141->save();

        $bird142 = Bird::create( [
            'name' => 'Anthus pratensis',
            'name_de' => '',
            'name_fr' => 'Pipit farlouse',
            'name_it' => 'Pispola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird142->pictures()->save($wiesenpieper_1);
        $bird142->habitats()->attach($aecker_und_feldflur);
        $bird142->habitats()->attach($wiesen_und_weiden);
        $bird142->habitats()->attach($gewaesser);
        $bird142->family()->associate($motacillidae);
        $bird142->order()->associate($passeri);
        $bird142->plumageColors()->save($grau);
        $bird142->plumageColors()->save($weiss);
        $bird142->plumageColors()->save($beige);
        $bird142->plumageColors()->save($braun);
        $bird142->plumageColors()->save($rosa);
        $bird142->legsColors()->save($braun);
        $bird142->legsColors()->save($rot);
        $bird142->beakColors()->save($schwarz);
        $bird142->beakColors()->save($braun);
        $bird142->beakColors()->save($rot);
        $bird142->beakShapes()->attach($normal);
        $bird142->beakShapes()->attach($kurz_duenn);
        $bird142->sizes()->attach($spatz_amsel);
        $bird142->save();

        $bird143 = Bird::create( [
            'name' => 'Anthus trivialis',
            'name_de' => '',
            'name_fr' => 'Pipit des arbres',
            'name_it' => 'Prispolone',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird143->pictures()->save($baumpieper_1);
        $bird143->habitats()->attach($wiesen_und_weiden);
        $bird143->habitats()->attach($gebirge);
        $bird143->family()->associate($motacillidae);
        $bird143->order()->associate($passeri);
        $bird143->plumageColors()->save($schwarz);
        $bird143->plumageColors()->save($grau);
        $bird143->plumageColors()->save($weiss);
        $bird143->plumageColors()->save($beige);
        $bird143->plumageColors()->save($braun);
        $bird143->legsColors()->save($rot);
        $bird143->beakColors()->save($schwarz);
        $bird143->beakColors()->save($braun);
        $bird143->beakShapes()->attach($normal);
        $bird143->beakShapes()->attach($kurz_duenn);
        $bird143->sizes()->attach($_spatz);
        $bird143->sizes()->attach($spatz_amsel);
        $bird143->save();

        $bird144 = Bird::create( [
            'name' => 'Motacilla alba',
            'name_de' => '',
            'name_fr' => 'Bergeronnette grise',
            'name_it' => 'Ballerina bianca',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau noir-gris-blanc à longue queue, impossible à confondre, de la taille d\'un pinson. Juvénile  gris plus uniforme.<br /><br /><strong>Voix:</strong> le cri est un «tchiri» ou «tsilip».<br /><br /><strong>Distribution:</strong> dans divers milieux ouverts, souvent à proximité de l\'eau ou des habitations. Hiverne en partie chez nous, mais la plupart des bergeronnettes grises partent en Europe du Sud-Ouest ou en Afrique du Nord.<br /><br /><strong>Nourriture:</strong> chasse les insectes et les araignées au sol en terrain ouvert.<br /><br /><strong>Nidification:</strong> niche souvent dans une anfractuosité de mur, sur un bord de fenêtre ou une poutre. Les sites de nidification naturels sont les bords de fossés et les talus. Nid avec 5-7 u0153ufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird144->pictures()->save($bachstelze_1);
        $bird144->pictures()->save($bachstelze_2);
        $bird144->habitats()->attach($meere_und_kuesten);
        $bird144->habitats()->attach($aecker_und_feldflur);
        $bird144->habitats()->attach($wiesen_und_weiden);
        $bird144->habitats()->attach($heidelandschaft);
        $bird144->habitats()->attach($gebirge);
        $bird144->habitats()->attach($siedlungsraum);
        $bird144->habitats()->attach($gewaesser);
        $bird144->family()->associate($motacillidae);
        $bird144->order()->associate($passeri);
        $bird144->plumageColors()->save($schwarz);
        $bird144->plumageColors()->save($grau);
        $bird144->plumageColors()->save($weiss);
        $bird144->legsColors()->save($schwarz);
        $bird144->beakColors()->save($schwarz);
        $bird144->beakShapes()->attach($kurz_duenn);
        $bird144->beakShapes()->attach($normal);
        $bird144->sizes()->attach($_spatz);
        $bird144->sizes()->attach($spatz_amsel);
        $bird144->save();

        $bird145 = Bird::create( [
            'name' => 'Motacilla flava',
            'name_de' => '',
            'name_fr' => 'Bergeronnette printanière',
            'name_it' => 'Cutrettola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird145->pictures()->save($schafstelze_1);
        $bird145->pictures()->save($schafstelze_2);
        $bird145->habitats()->attach($aecker_und_feldflur);
        $bird145->habitats()->attach($wiesen_und_weiden);
        $bird145->habitats()->attach($gewaesser);
        $bird145->family()->associate($motacillidae);
        $bird145->order()->associate($passeri);
        $bird145->plumageColors()->save($schwarz);
        $bird145->plumageColors()->save($grau);
        $bird145->plumageColors()->save($weiss);
        $bird145->plumageColors()->save($beige);
        $bird145->plumageColors()->save($braun);
        $bird145->plumageColors()->save($gelb);
        $bird145->plumageColors()->save($gruen);
        $bird145->legsColors()->save($schwarz);
        $bird145->beakColors()->save($schwarz);
        $bird145->beakShapes()->attach($normal);
        $bird145->beakShapes()->attach($kurz_duenn);
        $bird145->sizes()->attach($_spatz);
        $bird145->sizes()->attach($spatz_amsel);
        $bird145->save();

        $bird146 = Bird::create( [
            'name' => 'Motacilla cinerea',
            'name_de' => '',
            'name_fr' => 'Bergeronnette des ruisseaux',
            'name_it' => 'Ballerina gialla',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird146->pictures()->save($gebirgsstelze);
        $bird146->habitats()->attach($gebirge);
        $bird146->habitats()->attach($siedlungsraum);
        $bird146->habitats()->attach($gewaesser);
        $bird146->family()->associate($motacillidae);
        $bird146->order()->associate($passeri);
        $bird146->plumageColors()->save($schwarz);
        $bird146->plumageColors()->save($grau);
        $bird146->plumageColors()->save($weiss);
        $bird146->plumageColors()->save($gelb);
        $bird146->legsColors()->save($braun);
        $bird146->legsColors()->save($rot);
        $bird146->beakColors()->save($schwarz);
        $bird146->beakShapes()->attach($normal);
        $bird146->beakShapes()->attach($kurz_duenn);
        $bird146->sizes()->attach($_spatz);
        $bird146->sizes()->attach($spatz_amsel);
        $bird146->save();

        $bird147 = Bird::create( [
            'name' => 'Troglodytes troglodytes',
            'name_de' => '',
            'name_fr' => 'Troglodyte mignon',
            'name_it' => 'Scricciolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> l\'un des oiseaux les plus petits, mais aussi les plus bruyants de notre pays. Oiseau brun-roux rayé, corps rondelet et queue souvent dressée. En cas d\'inquiétude, fait des mouvements brusques, parau00eet nerveux.<br /><br /><strong>Voix:</strong> chant puissant et prolongé composé de trilles aigus. Cri: «trr trr trr».<br /><br /><strong>Distribution:</strong> vit toute l\'année chez nous, dans les boisements denses et les buissons, généralement à proximité du sol. Souvent proche des cours d\'eau. Défend son territoire en chantant, également pendant l\'hiver.<br /><br /><strong>Nourriture:</strong> insectes, araignées.<br /><br /><strong>Nidification:</strong> 5-7 u0153ufs sont déposés dans un nid élaboré en forme de boule, à proximité du sol.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird147->pictures()->save($zaunkoenig_1);
        $bird147->habitats()->attach($aecker_und_feldflur);
        $bird147->habitats()->attach($siedlungsraum);
        $bird147->habitats()->attach($wald);
        $bird147->family()->associate($troglodytidae);
        $bird147->order()->associate($passeri);
        $bird147->plumageColors()->save($weiss);
        $bird147->plumageColors()->save($beige);
        $bird147->plumageColors()->save($braun);
        $bird147->legsColors()->save($braun);
        $bird147->legsColors()->save($rot);
        $bird147->beakColors()->save($schwarz);
        $bird147->beakShapes()->attach($kurz_duenn);
        $bird147->beakShapes()->attach($normal);
        $bird147->sizes()->attach($_spatz);
        $bird147->save();

        $bird148 = Bird::create( [
            'name' => 'Cinclus cinclus',
            'name_de' => '',
            'name_fr' => 'Cincle plogeur',
            'name_it' => 'Merlo acquaiolo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird148->pictures()->save($wasseramsel_1);
        $bird148->habitats()->attach($gebirge);
        $bird148->habitats()->attach($gewaesser);
        $bird148->family()->associate($cinclidae);
        $bird148->order()->associate($passeri);
        $bird148->plumageColors()->save($schwarz);
        $bird148->plumageColors()->save($grau);
        $bird148->plumageColors()->save($weiss);
        $bird148->plumageColors()->save($braun);
        $bird148->legsColors()->save($braun);
        $bird148->legsColors()->save($rot);
        $bird148->beakColors()->save($schwarz);
        $bird148->beakShapes()->attach($normal);
        $bird148->sizes()->attach($spatz_amsel);
        $bird148->save();

        $bird149 = Bird::create( [
            'name' => 'Bombycilla garrulus',
            'name_de' => '',
            'name_fr' => 'Jaseur boréal',
            'name_it' => 'Beccofrusone',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird149->pictures()->save($seidenschwanz_1);
        $bird149->habitats()->attach($aecker_und_feldflur);
        $bird149->habitats()->attach($siedlungsraum);
        $bird149->family()->associate($bombycillidae);
        $bird149->order()->associate($passeri);
        $bird149->plumageColors()->save($schwarz);
        $bird149->plumageColors()->save($grau);
        $bird149->plumageColors()->save($weiss);
        $bird149->plumageColors()->save($beige);
        $bird149->plumageColors()->save($braun);
        $bird149->plumageColors()->save($gelb);
        $bird149->legsColors()->save($schwarz);
        $bird149->legsColors()->save($grau);
        $bird149->beakColors()->save($schwarz);
        $bird149->beakColors()->save($grau);
        $bird149->beakShapes()->attach($normal);
        $bird149->sizes()->attach($spatz_amsel);
        $bird149->save();

        $bird150 = Bird::create( [
            'name' => 'Prunella modularis',
            'name_de' => '',
            'name_fr' => 'Accenteur mouchet',
            'name_it' => 'Passera scopaiola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird150->pictures()->save($heckenbraunelle_1);
        $bird150->habitats()->attach($aecker_und_feldflur);
        $bird150->habitats()->attach($wiesen_und_weiden);
        $bird150->habitats()->attach($siedlungsraum);
        $bird150->habitats()->attach($wald);
        $bird150->family()->associate($prunellidae);
        $bird150->order()->associate($passeri);
        $bird150->plumageColors()->save($schwarz);
        $bird150->plumageColors()->save($grau);
        $bird150->plumageColors()->save($braun);
        $bird150->legsColors()->save($braun);
        $bird150->legsColors()->save($rot);
        $bird150->beakColors()->save($schwarz);
        $bird150->beakShapes()->attach($kurz_duenn);
        $bird150->beakShapes()->attach($normal);
        $bird150->sizes()->attach($_spatz);
        $bird150->save();

        $bird151 = Bird::create( [
            'name' => 'Prunella collaris',
            'name_de' => '',
            'name_fr' => 'Accenteur alpin',
            'name_it' => 'Sordone',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird151->pictures()->save($alpenbraunelle_1);
        $bird151->pictures()->save($alpenbraunelle_2);
        $bird151->habitats()->attach($gebirge);
        $bird151->family()->associate($prunellidae);
        $bird151->order()->associate($passeri);
        $bird151->plumageColors()->save($schwarz);
        $bird151->plumageColors()->save($grau);
        $bird151->plumageColors()->save($weiss);
        $bird151->plumageColors()->save($braun);
        $bird151->plumageColors()->save($rot);
        $bird151->legsColors()->save($braun);
        $bird151->beakColors()->save($schwarz);
        $bird151->beakColors()->save($braun);
        $bird151->beakColors()->save($gelb);
        $bird151->beakShapes()->attach($kurz_duenn);
        $bird151->beakShapes()->attach($normal);
        $bird151->sizes()->attach($_spatz);
        $bird151->sizes()->attach($spatz_amsel);
        $bird151->save();

        $bird152 = Bird::create( [
            'name' => 'Erithacus rubecula',
            'name_de' => '',
            'name_fr' => 'Rougegorge familier',
            'name_it' => 'Pettirosso',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> plumage brunu00e2tre avec plastron orange couvrant la poitrine et la face jusqu&rsquo;au front, le rendant  impossible à confondre. <br /><br /><strong>Voix:</strong> chant variable, débutant par des sons élevés fins, puis strophe mélodieuse, mélancolique plus grave. Chante souvent à l&rsquo;aube et au crépuscule, aussi en automne et en hiver. Cris: rapides séries de «tik-ik-ik-ik...».<br /><br /><strong>Distribution:</strong> présent toute l&rsquo;année dans toutes les forêts, mais aussi parcs et jardins.<br /><br /><strong>Nourriture:</strong> insectes, araignées, baies. Fréquente souvent les mangeoires en hiver. <br /><br /><strong>Nidification:</strong> niche au sol (75% des nids) ou dans un buisson ou un mur à proximité du sol.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird152->pictures()->save($rotkehlchen_1);
        $bird152->habitats()->attach($aecker_und_feldflur);
        $bird152->habitats()->attach($siedlungsraum);
        $bird152->habitats()->attach($wald);
        $bird152->family()->associate($saxicolinae);
        $bird152->order()->associate($passeri);
        $bird152->plumageColors()->save($weiss);
        $bird152->plumageColors()->save($beige);
        $bird152->plumageColors()->save($braun);
        $bird152->plumageColors()->save($orange);
        $bird152->plumageColors()->save($rot);
        $bird152->legsColors()->save($braun);
        $bird152->legsColors()->save($rot);
        $bird152->beakColors()->save($schwarz);
        $bird152->beakShapes()->attach($normal);
        $bird152->beakShapes()->attach($kurz_duenn);
        $bird152->sizes()->attach($_spatz);
        $bird152->save();

        $bird153 = Bird::create( [
            'name' => 'Luscinia megarhynchos',
            'name_de' => '',
            'name_fr' => 'Rossignol philomèle',
            'name_it' => 'Usignolo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird153->pictures()->save($nachtigall_1);
        $bird153->habitats()->attach($wiesen_und_weiden);
        $bird153->habitats()->attach($gewaesser);
        $bird153->habitats()->attach($wald);
        $bird153->family()->associate($saxicolinae);
        $bird153->order()->associate($passeri);
        $bird153->plumageColors()->save($weiss);
        $bird153->plumageColors()->save($beige);
        $bird153->plumageColors()->save($braun);
        $bird153->legsColors()->save($rot);
        $bird153->beakColors()->save($schwarz);
        $bird153->beakColors()->save($braun);
        $bird153->beakShapes()->attach($normal);
        $bird153->sizes()->attach($spatz_amsel);
        $bird153->save();

        $bird154 = Bird::create( [
            'name' => 'Luscinia svecica',
            'name_de' => '',
            'name_fr' => 'Gorgebleue à miroir',
            'name_it' => 'Pettazzurro',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird154->pictures()->save($blaukehlchen_1);
        $bird154->pictures()->save($blaukehlchen_2);
        $bird154->pictures()->save($blaukehlchen_3);
        $bird154->habitats()->attach($gebirge);
        $bird154->habitats()->attach($gewaesser);
        $bird154->family()->associate($saxicolinae);
        $bird154->order()->associate($passeri);
        $bird154->plumageColors()->save($weiss);
        $bird154->plumageColors()->save($braun);
        $bird154->plumageColors()->save($orange);
        $bird154->plumageColors()->save($rot);
        $bird154->plumageColors()->save($blau);
        $bird154->legsColors()->save($schwarz);
        $bird154->legsColors()->save($braun);
        $bird154->beakColors()->save($schwarz);
        $bird154->beakColors()->save($braun);
        $bird154->beakShapes()->attach($normal);
        $bird154->beakShapes()->attach($kurz_duenn);
        $bird154->sizes()->attach($_spatz);
        $bird154->save();

        $bird155 = Bird::create( [
            'name' => 'Phoenicurus phoenicurus',
            'name_de' => '',
            'name_fr' => 'Rougequeue à front blanc',
            'name_it' => 'Codirosso comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau de la taille d&rsquo;un pinson, mu00e2le  aux couleurs contrastées avec haut du front blanc et poitrine orangée. La femelle est brunu00e2tre, plus claire que la femelle du rougequeue noir, queue rousse.r<br /><br /><strong>Voix:</strong> chant doux et mélancolique.r<br /><br /><strong>Distribution:</strong> migrateur au long cours qui hiverne dans la zone du Sahel. Habite les paysages semi-ouverts, les vergers, les parcs. Se tient volontiers sur un poste exposé, un poteau ou une branche qui dépasse. Est devenu très rare en milieu construit.r<br /><br /><strong>Nourriture:</strong> insectes, araignées.r<br /><br /><strong>Nidification:</strong> couvée avec 3-9 u0153ufs, dans une cavité plus ou moins fermée ou un nichoir.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird155->pictures()->save($gartenrotschwanz_1);
        $bird155->pictures()->save($gartenrotschwanz_2);
        $bird155->habitats()->attach($aecker_und_feldflur);
        $bird155->habitats()->attach($siedlungsraum);
        $bird155->habitats()->attach($wald);
        $bird155->family()->associate($saxicolinae);
        $bird155->order()->associate($passeri);
        $bird155->plumageColors()->save($schwarz);
        $bird155->plumageColors()->save($grau);
        $bird155->plumageColors()->save($weiss);
        $bird155->plumageColors()->save($beige);
        $bird155->plumageColors()->save($braun);
        $bird155->plumageColors()->save($orange);
        $bird155->legsColors()->save($schwarz);
        $bird155->legsColors()->save($braun);
        $bird155->beakColors()->save($schwarz);
        $bird155->beakShapes()->attach($kurz_duenn);
        $bird155->sizes()->attach($_spatz);
        $bird155->save();

        $bird156 = Bird::create( [
            'name' => 'Phoenicurus ochruros',
            'name_de' => '',
            'name_fr' => 'Rougequeue noir',
            'name_it' => 'Codirosso spazzacamino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> se tient souvent droit, sur un poste élevé, un fau00eete de toit par exemple, d&rsquo;ou00f9 il chante et chasse les insectes volants. Mu00e2le  gris noiru00e2tre avec nette tache alaire blanche, femelle  gris brunu00e2tre sale.<br /><br /><strong>Voix:</strong> en cas d&rsquo;inquiétude cris répétés «vist-tk-tk-tk». Chant sonore comprenant deux phases de sifflements entrecoupées d&rsquo;un «bruit de verre pilé». <br /><br /><strong>Distribution:</strong> en montagne sur les pentes rocheuses ou dans les villes et villages à basse altitude. Hiverne en région méditerranéenne.<br /><br /><strong>Nourriture:</strong> divers insectes.<br /><br /><strong>Nidification:</strong> nid dans une anfractuosité de rocher ou une niche de bu00e2timent.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird156->pictures()->save($hausrotschwanz_1);
        $bird156->pictures()->save($hausrotschwanz_2);
        $bird156->habitats()->attach($aecker_und_feldflur);
        $bird156->habitats()->attach($siedlungsraum);
        $bird156->habitats()->attach($gebirge);
        $bird156->family()->associate($saxicolinae);
        $bird156->order()->associate($passeri);
        $bird156->plumageColors()->save($schwarz);
        $bird156->plumageColors()->save($grau);
        $bird156->plumageColors()->save($weiss);
        $bird156->plumageColors()->save($braun);
        $bird156->plumageColors()->save($orange);
        $bird156->legsColors()->save($schwarz);
        $bird156->legsColors()->save($braun);
        $bird156->beakColors()->save($schwarz);
        $bird156->beakShapes()->attach($kurz_duenn);
        $bird156->sizes()->attach($_spatz);
        $bird156->save();

        $bird157 = Bird::create( [
            'name' => 'Oenanthe oenanthe',
            'name_de' => '',
            'name_fr' => 'Traquet motteux',
            'name_it' => 'Culbianco',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird157->pictures()->save($steinschmaetzer_1);
        $bird157->pictures()->save($steinschmaetzer_2);
        $bird157->pictures()->save($steinschmaetzer_3);
        $bird157->habitats()->attach($aecker_und_feldflur);
        $bird157->habitats()->attach($wiesen_und_weiden);
        $bird157->habitats()->attach($gebirge);
        $bird157->family()->associate($saxicolinae);
        $bird157->order()->associate($passeri);
        $bird157->plumageColors()->save($schwarz);
        $bird157->plumageColors()->save($grau);
        $bird157->plumageColors()->save($weiss);
        $bird157->plumageColors()->save($beige);
        $bird157->plumageColors()->save($braun);
        $bird157->legsColors()->save($schwarz);
        $bird157->beakColors()->save($schwarz);
        $bird157->beakShapes()->attach($kurz_duenn);
        $bird157->beakShapes()->attach($normal);
        $bird157->sizes()->attach($_spatz);
        $bird157->sizes()->attach($spatz_amsel);
        $bird157->save();

        $bird158 = Bird::create( [
            'name' => 'Saxicola rubetra',
            'name_de' => '',
            'name_fr' => 'Tarier des prés',
            'name_it' => 'Stiaccino',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird158->pictures()->save($braunkehlchen_1);
        $bird158->pictures()->save($braunkehlchen_2);
        $bird158->habitats()->attach($aecker_und_feldflur);
        $bird158->habitats()->attach($wiesen_und_weiden);
        $bird158->habitats()->attach($gebirge);
        $bird158->family()->associate($saxicolinae);
        $bird158->order()->associate($passeri);
        $bird158->plumageColors()->save($schwarz);
        $bird158->plumageColors()->save($weiss);
        $bird158->plumageColors()->save($beige);
        $bird158->plumageColors()->save($braun);
        $bird158->plumageColors()->save($orange);
        $bird158->legsColors()->save($schwarz);
        $bird158->beakColors()->save($schwarz);
        $bird158->beakShapes()->attach($normal);
        $bird158->beakShapes()->attach($kurz_duenn);
        $bird158->sizes()->attach($_spatz);
        $bird158->save();

        $bird159 = Bird::create( [
            'name' => 'Saxicola rubicola',
            'name_de' => '',
            'name_fr' => 'Tarier pu00e2tre',
            'name_it' => 'Saltimpalo',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird159->pictures()->save($schwarzkehlchen_1);
        $bird159->habitats()->attach($aecker_und_feldflur);
        $bird159->habitats()->attach($wiesen_und_weiden);
        $bird159->habitats()->attach($gewaesser);
        $bird159->family()->associate($saxicolinae);
        $bird159->order()->associate($passeri);
        $bird159->plumageColors()->save($grau);
        $bird159->plumageColors()->save($weiss);
        $bird159->plumageColors()->save($beige);
        $bird159->plumageColors()->save($braun);
        $bird159->plumageColors()->save($orange);
        $bird159->legsColors()->save($schwarz);
        $bird159->legsColors()->save($braun);
        $bird159->beakColors()->save($schwarz);
        $bird159->beakShapes()->attach($normal);
        $bird159->beakShapes()->attach($kurz_duenn);
        $bird159->sizes()->attach($_spatz);
        $bird159->save();

        $bird160 = Bird::create( [
            'name' => 'Monticola solitarius',
            'name_de' => '',
            'name_fr' => 'Monticole bleu',
            'name_it' => 'Passero solitario',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird160->pictures()->save($blaumerle_1);
        $bird160->pictures()->save($blaumerle_2);
        $bird160->habitats()->attach($gebirge);
        $bird160->family()->associate($saxicolinae);
        $bird160->order()->associate($passeri);
        $bird160->plumageColors()->save($schwarz);
        $bird160->plumageColors()->save($beige);
        $bird160->plumageColors()->save($braun);
        $bird160->plumageColors()->save($blau);
        $bird160->legsColors()->save($schwarz);
        $bird160->legsColors()->save($grau);
        $bird160->beakColors()->save($schwarz);
        $bird160->beakShapes()->attach($normal);
        $bird160->sizes()->attach($spatz_amsel);
        $bird160->save();

        $bird161 = Bird::create( [
            'name' => 'Monticola saxatilis',
            'name_de' => '',
            'name_fr' => 'Monticole de roche',
            'name_it' => 'Codirossone',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird161->pictures()->save($steinroetel_1);
        $bird161->habitats()->attach($gebirge);
        $bird161->plumageColors()->save($schwarz);
        $bird161->plumageColors()->save($grau);
        $bird161->plumageColors()->save($weiss);
        $bird161->plumageColors()->save($beige);
        $bird161->plumageColors()->save($braun);
        $bird161->plumageColors()->save($orange);
        $bird161->plumageColors()->save($blau);
        $bird161->legsColors()->save($schwarz);
        $bird161->legsColors()->save($grau);
        $bird161->beakColors()->save($schwarz);
        $bird161->beakShapes()->attach($normal);
        $bird161->sizes()->attach($spatz_amsel);
        $bird161->save();

        $bird162 = Bird::create( [
            'name' => 'Turdus philomelos',
            'name_de' => '',
            'name_fr' => 'Grive musicienne',
            'name_it' => 'Tordo bottaccio',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petite grive brune avec poitrine mouchetée régulièrement. <br /><br /><strong>Voix:</strong> chant varié avec notes douces et flu00fbtées, chaque phrase est répétée 2-4 fois. Cris d\'alarme pénétrant «tixtixtix», cri fin «tsip».<br /><br /><strong>Distribution:</strong> forêts, parcs et jardins munis d\'arbres. Migrateur à courte distance, hiverne en région méditerranéenne, en plaine parfois aussi chez nous.<br /><br /><strong>Nourriture:</strong> vers, escargots et insectes.<br /><br /><strong>Nidification:</strong> nid bien camouflé dans les boisements avec 3-5 u0153ufs. A l\'intérieur, le nid est tapissé de bois décomposé et d\'argile.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird162->pictures()->save($singdrossel_1);
        $bird162->habitats()->attach($aecker_und_feldflur);
        $bird162->habitats()->attach($wiesen_und_weiden);
        $bird162->habitats()->attach($siedlungsraum);
        $bird162->habitats()->attach($wald);
        $bird162->family()->associate($turdidae);
        $bird162->order()->associate($passeri);
        $bird162->plumageColors()->save($schwarz);
        $bird162->plumageColors()->save($weiss);
        $bird162->plumageColors()->save($beige);
        $bird162->plumageColors()->save($braun);
        $bird162->legsColors()->save($braun);
        $bird162->legsColors()->save($rot);
        $bird162->beakColors()->save($schwarz);
        $bird162->beakShapes()->attach($normal);
        $bird162->sizes()->attach($spatz_amsel);
        $bird162->save();

        $bird163 = Bird::create( [
            'name' => 'Turdus iliacus',
            'name_de' => '',
            'name_fr' => 'Grive mauvis ',
            'name_it' => 'Tordo sassello',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird163->pictures()->save($rotdrossel_1);
        $bird163->habitats()->attach($aecker_und_feldflur);
        $bird163->habitats()->attach($wiesen_und_weiden);
        $bird163->family()->associate($turdidae);
        $bird163->order()->associate($passeri);
        $bird163->plumageColors()->save($grau);
        $bird163->plumageColors()->save($weiss);
        $bird163->plumageColors()->save($rot);
        $bird163->plumageColors()->save($braun);
        $bird163->legsColors()->save($rosa);
        $bird163->beakColors()->save($schwarz);
        $bird163->beakColors()->save($gelb);
        $bird163->beakShapes()->attach($normal);
        $bird163->sizes()->attach($spatz_amsel);
        $bird163->save();

        $bird164 = Bird::create( [
            'name' => 'Turdus viscivorus',
            'name_de' => '',
            'name_fr' => 'Grive draine',
            'name_it' => 'Tordela',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird164->pictures()->save($misteldrossel_1);
        $bird164->habitats()->attach($aecker_und_feldflur);
        $bird164->habitats()->attach($wiesen_und_weiden);
        $bird164->habitats()->attach($wald);
        $bird164->family()->associate($turdidae);
        $bird164->order()->associate($passeri);
        $bird164->plumageColors()->save($grau);
        $bird164->plumageColors()->save($weiss);
        $bird164->plumageColors()->save($beige);
        $bird164->plumageColors()->save($braun);
        $bird164->legsColors()->save($braun);
        $bird164->legsColors()->save($rot);
        $bird164->beakColors()->save($schwarz);
        $bird164->beakShapes()->attach($normal);
        $bird164->sizes()->attach($amsel_taube);
        $bird164->save();

        $bird165 = Bird::create( [
            'name' => 'Turdus pilaris',
            'name_de' => '',
            'name_fr' => 'Grive litorne',
            'name_it' => 'Cesena',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> grande grive à longue queue, dessus de la tête, nuque et croupion gris. Dessous tacheté.<br /><br /><strong>Voix:</strong> cri «tchac-tchac-tchac», le chant est un babil peu sonore souvent émis en vol nuptial.<br /><br /><strong>Distribution:</strong> forêts feuillues et mixtes ouvertes, bosquets, parcs et jardins. Généralement en petites colonies. Chasse les prédateurs comme les rapaces de fau00e7on véhémente. Cette grive a immigré en Europe centrale depuis la Sibérie au début du 20ème siècle, en diminution marquée en Suisse.<br /><br /><strong>Nourriture:</strong> vers, insectes, baies.<br /><br /><strong>Nidification:</strong> nichée avec 5-6 u0153ufs, nid dans un arbre.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird165->pictures()->save($wacholderdrossel_1);
        $bird165->habitats()->attach($aecker_und_feldflur);
        $bird165->habitats()->attach($wiesen_und_weiden);
        $bird165->habitats()->attach($siedlungsraum);
        $bird165->habitats()->attach($wald);
        $bird165->family()->associate($turdidae);
        $bird165->order()->associate($passeri);
        $bird165->plumageColors()->save($schwarz);
        $bird165->plumageColors()->save($grau);
        $bird165->plumageColors()->save($weiss);
        $bird165->plumageColors()->save($braun);
        $bird165->plumageColors()->save($orange);
        $bird165->legsColors()->save($schwarz);
        $bird165->legsColors()->save($braun);
        $bird165->beakColors()->save($schwarz);
        $bird165->beakColors()->save($gelb);
        $bird165->beakShapes()->attach($normal);
        $bird165->sizes()->attach($spatz_amsel);
        $bird165->sizes()->attach($amsel_taube);
        $bird165->save();

        $bird166 = Bird::create( [
            'name' => 'Turdus merula',
            'name_de' => '',
            'name_fr' => 'Merle noir',
            'name_it' => 'Merlo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> mu00e2le  noir avec bec jaune, femelle  d\'un brun discret.<br /><br /><strong>Voix:</strong> chant mélodieux avec sons flu00fbtés et sonores, souvent émis depuis un poste élevé à l\'aube et au crépuscule. Cri «poc» bas, cri d\'alarme «tixtixtixtixtix».<br /><br /><strong>Distribution:</strong> présent toute l\'année, largement répandu jusqu\'à la limite supérieure des arbres. Vit en forêt, dans les jardins et les parcs. Autrefois oiseau farouche des forêts, a pénétré en milieu urbain il y a une centaine d\'années.<br /><br /><strong>Nourriture:</strong> insectes, vers, fruits, baies.<br /><br /><strong>Nidification:</strong> nid avec 3-5 u0153ufs dans les buissons, les espaliers, sur les poutres du toit ou même dans les bacs à fleurs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird166->pictures()->save($amsel_1);
        $bird166->pictures()->save($amsel_2);
        $bird166->habitats()->attach($aecker_und_feldflur);
        $bird166->habitats()->attach($wiesen_und_weiden);
        $bird166->habitats()->attach($siedlungsraum);
        $bird166->habitats()->attach($wald);
        $bird166->family()->associate($turdidae);
        $bird166->order()->associate($passeri);
        $bird166->plumageColors()->save($schwarz);
        $bird166->plumageColors()->save($braun);
        $bird166->legsColors()->save($schwarz);
        $bird166->legsColors()->save($braun);
        $bird166->beakColors()->save($braun);
        $bird166->beakColors()->save($gelb);
        $bird166->beakColors()->save($orange);
        $bird166->beakShapes()->attach($normal);
        $bird166->sizes()->attach($spatz_amsel);
        $bird166->save();

        $bird167 = Bird::create( [
            'name' => 'Turdus torquatus',
            'name_de' => '',
            'name_fr' => 'Merle à plastron',
            'name_it' => 'Merlo dal collare',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird167->pictures()->save($ringdrossel_1);
        $bird167->habitats()->attach($gebirge);
        $bird167->family()->associate($turdidae);
        $bird167->order()->associate($passeri);
        $bird167->plumageColors()->save($schwarz);
        $bird167->plumageColors()->save($grau);
        $bird167->plumageColors()->save($weiss);
        $bird167->plumageColors()->save($braun);
        $bird167->legsColors()->save($schwarz);
        $bird167->legsColors()->save($braun);
        $bird167->beakColors()->save($schwarz);
        $bird167->beakColors()->save($gelb);
        $bird167->beakShapes()->attach($normal);
        $bird167->sizes()->attach($spatz_amsel);
        $bird167->sizes()->attach($amsel_taube);
        $bird167->save();

        $bird168 = Bird::create( [
            'name' => 'Sylvia borin',
            'name_de' => '',
            'name_fr' => 'Fauvette des jardins',
            'name_it' => 'Beccafico',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird168->pictures()->save($gartengrasmuecke_1);
        $bird168->habitats()->attach($aecker_und_feldflur);
        $bird168->habitats()->attach($siedlungsraum);
        $bird168->habitats()->attach($wald);
        $bird168->family()->associate($sylviidae);
        $bird168->order()->associate($passeri);
        $bird168->plumageColors()->save($grau);
        $bird168->plumageColors()->save($beige);
        $bird168->plumageColors()->save($braun);
        $bird168->legsColors()->save($schwarz);
        $bird168->beakColors()->save($schwarz);
        $bird168->beakColors()->save($grau);
        $bird168->beakShapes()->attach($normal);
        $bird168->beakShapes()->attach($kurz_duenn);
        $bird168->sizes()->attach($_spatz);
        $bird168->save();

        $bird169 = Bird::create( [
            'name' => 'Sylvia nisoria',
            'name_de' => '',
            'name_fr' => 'Fauvette épervière',
            'name_it' => 'Bigia padovana',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird169->pictures()->save($sperbergrasmuecke_1);
        $bird169->habitats()->attach($aecker_und_feldflur);
        $bird169->habitats()->attach($wiesen_und_weiden);
        $bird169->family()->associate($sylviidae);
        $bird169->order()->associate($passeri);
        $bird169->plumageColors()->save($grau);
        $bird169->plumageColors()->save($weiss);
        $bird169->plumageColors()->save($beige);
        $bird169->legsColors()->save($grau);
        $bird169->beakColors()->save($schwarz);
        $bird169->beakColors()->save($grau);
        $bird169->beakColors()->save($orange);
        $bird169->beakShapes()->attach($normal);
        $bird169->beakShapes()->attach($kurz_duenn);
        $bird169->sizes()->attach($_spatz);
        $bird169->sizes()->attach($spatz_amsel);
        $bird169->save();

        $bird170 = Bird::create( [
            'name' => 'Sylvia atricapilla',
            'name_de' => '',
            'name_fr' => 'Fauvette à tête noire',
            'name_it' => 'Capinera',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau gris-brun peu coloré, taille d&rsquo;un pinson. Dessus de la tête noir chez le mu00e2le , brun-roux chez la femelle . <br /><br /><strong>Voix:</strong> chant flu00fbté gazouillant avec fin typique «u2026die-die-die». Cris d&rsquo;alarme claquants p. ex. «tèk», répétés en série en cas d&rsquo;inquiétude. <br /><br /><strong>Distribution:</strong> vit dans les forêts, les parcs et les grands jardins. Hiverne généralement en région méditerranéenne, une partie migre en direction du nord-ouest vers la Mer du Nord et l&rsquo;Angleterre.<br /><br /><strong>Nourriture:</strong> insectes, baies et fruits.<br /><br /><strong>Nidification:</strong> le nid est construit à l&rsquo;abri d&rsquo;épais buissons, 3-6 jeunes par nichée s&rsquo;envolant après moins de deux semaines déjà.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird170->pictures()->save($moenchsgrasmuecke_1);
        $bird170->pictures()->save($moenchsgrasmuecke_2);
        $bird170->habitats()->attach($aecker_und_feldflur);
        $bird170->habitats()->attach($siedlungsraum);
        $bird170->habitats()->attach($wald);
        $bird170->family()->associate($sylviidae);
        $bird170->order()->associate($passeri);
        $bird170->plumageColors()->save($schwarz);
        $bird170->plumageColors()->save($grau);
        $bird170->plumageColors()->save($beige);
        $bird170->plumageColors()->save($braun);
        $bird170->legsColors()->save($schwarz);
        $bird170->legsColors()->save($braun);
        $bird170->beakColors()->save($schwarz);
        $bird170->beakColors()->save($grau);
        $bird170->beakShapes()->attach($normal);
        $bird170->beakShapes()->attach($kurz_duenn);
        $bird170->sizes()->attach($_spatz);
        $bird170->save();

        $bird171 = Bird::create( [
            'name' => 'Sylvia curruca',
            'name_de' => '',
            'name_fr' => 'Fauvette babillarde',
            'name_it' => 'Bigiarella',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird171->pictures()->save($klappergrasmuecke_1);
        $bird171->habitats()->attach($aecker_und_feldflur);
        $bird171->habitats()->attach($wiesen_und_weiden);
        $bird171->habitats()->attach($wald);
        $bird171->family()->associate($sylviidae);
        $bird171->order()->associate($passeri);
        $bird171->plumageColors()->save($schwarz);
        $bird171->plumageColors()->save($grau);
        $bird171->plumageColors()->save($weiss);
        $bird171->plumageColors()->save($beige);
        $bird171->plumageColors()->save($braun);
        $bird171->legsColors()->save($schwarz);
        $bird171->legsColors()->save($braun);
        $bird171->beakColors()->save($schwarz);
        $bird171->beakColors()->save($grau);
        $bird171->beakShapes()->attach($normal);
        $bird171->beakShapes()->attach($kurz_duenn);
        $bird171->sizes()->attach($_spatz);
        $bird171->save();

        $bird172 = Bird::create( [
            'name' => 'Sylvia communis',
            'name_de' => '',
            'name_fr' => 'Fauvette grisette',
            'name_it' => 'Sterpazzola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird172->pictures()->save($dorngrasmuecke_1);
        $bird172->habitats()->attach($aecker_und_feldflur);
        $bird172->habitats()->attach($wiesen_und_weiden);
        $bird172->family()->associate($sylviidae);
        $bird172->order()->associate($passeri);
        $bird172->plumageColors()->save($grau);
        $bird172->plumageColors()->save($weiss);
        $bird172->plumageColors()->save($beige);
        $bird172->plumageColors()->save($braun);
        $bird172->plumageColors()->save($orange);
        $bird172->plumageColors()->save($rosa);
        $bird172->legsColors()->save($rot);
        $bird172->beakColors()->save($schwarz);
        $bird172->beakColors()->save($grau);
        $bird172->beakShapes()->attach($normal);
        $bird172->beakShapes()->attach($kurz_duenn);
        $bird172->sizes()->attach($_spatz);
        $bird172->save();

        $bird173 = Bird::create( [
            'name' => 'Acrocephalus schoenobaenus',
            'name_de' => '',
            'name_fr' => 'Phragmite des joncs',
            'name_it' => 'Forapaglie comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird173->pictures()->save($schilfrohrsaenger_1);
        $bird173->habitats()->attach($gewaesser);
        $bird173->family()->associate($sylviidae);
        $bird173->order()->associate($passeri);
        $bird173->plumageColors()->save($schwarz);
        $bird173->plumageColors()->save($weiss);
        $bird173->plumageColors()->save($beige);
        $bird173->plumageColors()->save($braun);
        $bird173->legsColors()->save($braun);
        $bird173->legsColors()->save($rot);
        $bird173->beakColors()->save($schwarz);
        $bird173->beakShapes()->attach($normal);
        $bird173->beakShapes()->attach($kurz_duenn);
        $bird173->sizes()->attach($_spatz);
        $bird173->save();

        $bird174 = Bird::create( [
            'name' => 'Acrocephalus scirpaceus',
            'name_de' => '',
            'name_fr' => 'Rousserolle effarvatte',
            'name_it' => 'Cannaiola comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird174->pictures()->save($teichrohrsaenger_1);
        $bird174->habitats()->attach($gewaesser);
        $bird174->family()->associate($sylviidae);
        $bird174->order()->associate($passeri);
        $bird174->plumageColors()->save($weiss);
        $bird174->plumageColors()->save($beige);
        $bird174->plumageColors()->save($braun);
        $bird174->legsColors()->save($braun);
        $bird174->legsColors()->save($rot);
        $bird174->beakColors()->save($schwarz);
        $bird174->beakShapes()->attach($normal);
        $bird174->beakShapes()->attach($kurz_duenn);
        $bird174->sizes()->attach($_spatz);
        $bird174->save();

        $bird175 = Bird::create( [
            'name' => 'Acrocephalus palustris',
            'name_de' => '',
            'name_fr' => 'Rousserolle verderolle',
            'name_it' => 'Cannaiola verdognola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird175->pictures()->save($sumpfrohrsaenger_1);
        $bird175->habitats()->attach($aecker_und_feldflur);
        $bird175->habitats()->attach($wiesen_und_weiden);
        $bird175->habitats()->attach($gewaesser);
        $bird175->family()->associate($sylviidae);
        $bird175->order()->associate($passeri);
        $bird175->plumageColors()->save($weiss);
        $bird175->plumageColors()->save($beige);
        $bird175->plumageColors()->save($braun);
        $bird175->legsColors()->save($braun);
        $bird175->legsColors()->save($gelb);
        $bird175->legsColors()->save($rot);
        $bird175->beakColors()->save($braun);
        $bird175->beakColors()->save($orange);
        $bird175->beakShapes()->attach($kurz_duenn);
        $bird175->beakShapes()->attach($normal);
        $bird175->sizes()->attach($_spatz);
        $bird175->save();

        $bird176 = Bird::create( [
            'name' => 'Acrocephalus arundinaceus',
            'name_de' => '',
            'name_fr' => 'Rousserolle turdou00efde',
            'name_it' => 'Cannareccione',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird176->pictures()->save($drosselrohrsaenger_1);
        $bird176->habitats()->attach($gewaesser);
        $bird176->family()->associate($sylviidae);
        $bird176->order()->associate($passeri);
        $bird176->plumageColors()->save($beige);
        $bird176->plumageColors()->save($braun);
        $bird176->legsColors()->save($schwarz);
        $bird176->legsColors()->save($grau);
        $bird176->beakColors()->save($braun);
        $bird176->beakShapes()->attach($normal);
        $bird176->sizes()->attach($spatz_amsel);
        $bird176->save();

        $bird177 = Bird::create( [
            'name' => 'Locustella naevia',
            'name_de' => '',
            'name_fr' => 'Locustelle tachetée',
            'name_it' => 'Forapaglie macchiettato',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird177->pictures()->save($feldschwirl_1);
        $bird177->habitats()->attach($wiesen_und_weiden);
        $bird177->habitats()->attach($gewaesser);
        $bird177->family()->associate($sylviidae);
        $bird177->order()->associate($passeri);
        $bird177->plumageColors()->save($weiss);
        $bird177->plumageColors()->save($beige);
        $bird177->plumageColors()->save($braun);
        $bird177->legsColors()->save($rot);
        $bird177->beakColors()->save($schwarz);
        $bird177->beakColors()->save($gelb);
        $bird177->beakShapes()->attach($normal);
        $bird177->beakShapes()->attach($kurz_duenn);
        $bird177->sizes()->attach($_spatz);
        $bird177->save();

        $bird178 = Bird::create( [
            'name' => 'Locustella luscinioides',
            'name_de' => '',
            'name_fr' => 'Locustelle lusciniou00efde',
            'name_it' => 'Salciaiola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird178->pictures()->save($rohrschwirl_1);
        $bird178->habitats()->attach($gewaesser);
        $bird178->family()->associate($sylviidae);
        $bird178->order()->associate($passeri);
        $bird178->plumageColors()->save($braun);
        $bird178->legsColors()->save($grau);
        $bird178->legsColors()->save($braun);
        $bird178->legsColors()->save($orange);
        $bird178->beakColors()->save($braun);
        $bird178->beakShapes()->attach($normal);
        $bird178->sizes()->attach($_spatz);
        $bird178->save();

        $bird179 = Bird::create( [
            'name' => 'Hippolais icterina',
            'name_de' => '',
            'name_fr' => 'Hypolau00efs ictérine',
            'name_it' => 'Canapino maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird179->pictures()->save($gelbspoetter_1);
        $bird179->habitats()->attach($gewaesser);
        $bird179->habitats()->attach($aecker_und_feldflur);
        $bird179->habitats()->attach($wald);
        $bird179->family()->associate($sylviidae);
        $bird179->order()->associate($passeri);
        $bird179->plumageColors()->save($grau);
        $bird179->plumageColors()->save($gelb);
        $bird179->plumageColors()->save($braun);
        $bird179->legsColors()->save($grau);
        $bird179->beakColors()->save($grau);
        $bird179->beakColors()->save($braun);
        $bird179->beakShapes()->attach($kurz_duenn);
        $bird179->sizes()->attach($_spatz);
        $bird179->save();

        $bird180 = Bird::create( [
            'name' => 'Hippolais polyglotta',
            'name_de' => '',
            'name_fr' => 'Hypolau00efs polyglotte',
            'name_it' => 'Canapino comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird180->pictures()->save($orpheusspoetter_1);
        $bird180->habitats()->attach($aecker_und_feldflur);
        $bird180->habitats()->attach($wiesen_und_weiden);
        $bird180->habitats()->attach($wald);
        $bird180->family()->associate($sylviidae);
        $bird180->order()->associate($passeri);
        $bird180->plumageColors()->save($grau);
        $bird180->plumageColors()->save($gelb);
        $bird180->plumageColors()->save($braun);
        $bird180->legsColors()->save($grau);
        $bird180->legsColors()->save($braun);
        $bird180->beakColors()->save($grau);
        $bird180->beakColors()->save($braun);
        $bird180->beakShapes()->attach($kurz_duenn);
        $bird180->sizes()->attach($_spatz);
        $bird180->save();

        $bird181 = Bird::create( [
            'name' => 'Phylloscopus trochilus',
            'name_de' => '',
            'name_fr' => 'Pouillot fitis',
            'name_it' => 'Luu00ec grosso',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird181->pictures()->save($fitis_1);
        $bird181->habitats()->attach($siedlungsraum);
        $bird181->habitats()->attach($wald);
        $bird181->habitats()->attach($gewaesser);
        $bird181->family()->associate($sylviidae);
        $bird181->order()->associate($passeri);
        $bird181->plumageColors()->save($beige);
        $bird181->plumageColors()->save($braun);
        $bird181->plumageColors()->save($gelb);
        $bird181->plumageColors()->save($gruen);
        $bird181->legsColors()->save($braun);
        $bird181->legsColors()->save($rot);
        $bird181->beakColors()->save($schwarz);
        $bird181->beakShapes()->attach($kurz_duenn);
        $bird181->sizes()->attach($_spatz);
        $bird181->save();

        $bird182 = Bird::create( [
            'name' => 'Phylloscopus sibilatrix',
            'name_de' => '',
            'name_fr' => 'Pouillot siffleur',
            'name_it' => 'Luu00ec verde',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird182->pictures()->save($waldlaubsaenger_1);
        $bird182->habitats()->attach($wald);
        $bird182->family()->associate($sylviidae);
        $bird182->order()->associate($passeri);
        $bird182->plumageColors()->save($weiss);
        $bird182->plumageColors()->save($beige);
        $bird182->plumageColors()->save($braun);
        $bird182->plumageColors()->save($gelb);
        $bird182->plumageColors()->save($gruen);
        $bird182->legsColors()->save($braun);
        $bird182->legsColors()->save($rot);
        $bird182->beakColors()->save($schwarz);
        $bird182->beakShapes()->attach($kurz_duenn);
        $bird182->beakShapes()->attach($normal);
        $bird182->sizes()->attach($_spatz);
        $bird182->save();

        $bird183 = Bird::create( [
            'name' => 'Phylloscopus bonelli',
            'name_de' => '',
            'name_fr' => 'Pouillot de Bronelli',
            'name_it' => 'Luu00ec bianco',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird183->pictures()->save($berglaubsaenger_1);
        $bird183->habitats()->attach($gebirge);
        $bird183->habitats()->attach($wald);
        $bird183->family()->associate($sylviidae);
        $bird183->order()->associate($passeri);
        $bird183->plumageColors()->save($weiss);
        $bird183->plumageColors()->save($gelb);
        $bird183->plumageColors()->save($gruen);
        $bird183->plumageColors()->save($beige);
        $bird183->plumageColors()->save($braun);
        $bird183->legsColors()->save($schwarz);
        $bird183->legsColors()->save($braun);
        $bird183->beakColors()->save($grau);
        $bird183->beakColors()->save($braun);
        $bird183->beakShapes()->attach($kurz_duenn);
        $bird183->sizes()->attach($_spatz);
        $bird183->save();

        $bird184 = Bird::create( [
            'name' => 'Phylloscopus collybita',
            'name_de' => '',
            'name_fr' => 'Pouillot véloce',
            'name_it' => 'Luu00ec piccolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit oiseau brunu00e2tre, peu coloré. Est le plus facile à reconnau00eetre à son chant.r<br /><br /><strong>Voix:</strong> chant typique composé d\'une série de sons sur 2 ou 3 tons «tsip tsap tsip tsap tsup tsip».r<br /><br /><strong>Distribution:</strong> vit dans les forêts au sous-bois dense, dans les buissons, aussi dans les villes et les villages.r<br /><br /><strong>Nourriture:</strong> insectes et araignées, en automne parfois des baies.r<br /><br /><strong>Nidification:</strong> nid couvert avec entrée latérale, posé au sol ou à faible hauteur dans la végétation. 5-7 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird184->pictures()->save($zilpzalp_1);
        $bird184->habitats()->attach($aecker_und_feldflur);
        $bird184->habitats()->attach($siedlungsraum);
        $bird184->habitats()->attach($wald);
        $bird184->family()->associate($sylviidae);
        $bird184->order()->associate($passeri);
        $bird184->plumageColors()->save($beige);
        $bird184->plumageColors()->save($braun);
        $bird184->plumageColors()->save($gelb);
        $bird184->plumageColors()->save($grau);
        $bird184->legsColors()->save($schwarz);
        $bird184->legsColors()->save($braun);
        $bird184->beakColors()->save($schwarz);
        $bird184->beakShapes()->attach($kurz_duenn);
        $bird184->sizes()->attach($_spatz);
        $bird184->save();

        $bird185 = Bird::create( [
            'name' => 'Regulus regulus',
            'name_de' => '',
            'name_fr' => 'Roitelet huppé',
            'name_it' => 'Regolo',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> le plus petit oiseau indigène. Plumage verdu00e2tre avec bande jaune ou orange sur la tête, entourée de bandes noires de chaque cu00f4té.r<br /><br /><strong>Voix:</strong> le chant est un motif aigu montant et descendant, répété 4 à 6 fois «Siseri-siseri-siseri-siseri-si».r<br /><br /><strong>Distribution:</strong> vit dans les forêts de conifères et les forêts mixtes, ainsi que dans les jardins et les parcs avec conifères. Reste généralement toute l\'année chez nous.r<br /><br /><strong>Nourriture:</strong> petits insectes et araignées.r<br /><br /><strong>Nidification:</strong> le nid est généralement fixé sous une branche d\'épicéa. 8-11 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird185->pictures()->save($wintergoldhaehnchen_1);
        $bird185->habitats()->attach($siedlungsraum);
        $bird185->habitats()->attach($wald);
        $bird185->family()->associate($regulidae);
        $bird185->order()->associate($passeri);
        $bird185->plumageColors()->save($schwarz);
        $bird185->plumageColors()->save($grau);
        $bird185->plumageColors()->save($weiss);
        $bird185->plumageColors()->save($beige);
        $bird185->plumageColors()->save($braun);
        $bird185->plumageColors()->save($gelb);
        $bird185->plumageColors()->save($orange);
        $bird185->plumageColors()->save($gruen);
        $bird185->legsColors()->save($braun);
        $bird185->legsColors()->save($rot);
        $bird185->beakColors()->save($schwarz);
        $bird185->beakShapes()->attach($kurz_duenn);
        $bird185->sizes()->attach($_spatz);
        $bird185->save();

        $bird186 = Bird::create( [
            'name' => 'Regulus ignicapillus',
            'name_de' => '',
            'name_fr' => 'Roitelet à triple bandeau',
            'name_it' => 'Fiorrancino',
            'gender_de' => 'S',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> très petit oiseau, toujours en activité. Dessus verdu00e2tre, tête rayée et bande jaune à orange sur la calotte.r<br /><br /><strong>Voix:</strong> chant fin et haut, montant et s\'accélérant vers la fin « i si-si-si-sirrr».r<br /><br /><strong>Distribution:</strong> forêts mixtes, jardins et parcs avec arbres (conifères). La plupart des roitelets triple bandeau quittent la Suisse en hiver.r<br /><br /><strong>Nourriture:</strong> petits insectes et araignées.r<br /><br /><strong>Nidification:</strong> le nid est généralement fixé sous une branche d\'épicéa. 7-11 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird186->pictures()->save($sommergoldhaehnchen_1);
        $bird186->habitats()->attach($siedlungsraum);
        $bird186->habitats()->attach($wald);
        $bird186->family()->associate($regulidae);
        $bird186->order()->associate($passeri);
        $bird186->plumageColors()->save($schwarz);
        $bird186->plumageColors()->save($grau);
        $bird186->plumageColors()->save($weiss);
        $bird186->plumageColors()->save($braun);
        $bird186->plumageColors()->save($gelb);
        $bird186->plumageColors()->save($orange);
        $bird186->plumageColors()->save($rot);
        $bird186->plumageColors()->save($gruen);
        $bird186->legsColors()->save($braun);
        $bird186->legsColors()->save($rot);
        $bird186->beakColors()->save($schwarz);
        $bird186->beakShapes()->attach($kurz_duenn);
        $bird186->sizes()->attach($_spatz);
        $bird186->save();

        $bird187 = Bird::create( [
            'name' => 'Muscicapa striata',
            'name_de' => '',
            'name_fr' => 'Gobemouche gris',
            'name_it' => 'Pigliamosche',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau brun-gris de la taille d\'un pinson avec poitrine rayée.  <br /><br /><strong>Voix:</strong> le cri est un «tsit» fin, le chant insignifiant consiste en quelques notes inspirées des cris.<br /><br /><strong>Distribution:</strong> dans les jardins, les parcs et les forêts ouvertes. Se tient souvent dressé sur un perchoir dégagé, duquel il part à la chasse aux insectes volants. Hiverne au sud du Sahara.<br /><br /><strong>Nourriture:</strong> divers insectes, parfois des baies.<br /><br /><strong>Nidification:</strong> nid avec 2-6 u0153ufs dans une semi-cavité: trou d\'arbre ou de mur, poutraison des toits, bacs à fleur.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird187->pictures()->save($grauschnaepper_1);
        $bird187->habitats()->attach($siedlungsraum);
        $bird187->habitats()->attach($wald);
        $bird187->family()->associate($muscicapidae);
        $bird187->order()->associate($passeri);
        $bird187->plumageColors()->save($grau);
        $bird187->plumageColors()->save($weiss);
        $bird187->plumageColors()->save($beige);
        $bird187->plumageColors()->save($braun);
        $bird187->legsColors()->save($schwarz);
        $bird187->legsColors()->save($braun);
        $bird187->beakColors()->save($schwarz);
        $bird187->beakShapes()->attach($kurz_duenn);
        $bird187->sizes()->attach($_spatz);
        $bird187->save();

        $bird188 = Bird::create( [
            'name' => 'Ficedula hypoleuca',
            'name_de' => '',
            'name_fr' => 'Gobemouche noir',
            'name_it' => 'Balia nera',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> mu00e2le  en plumage nuptial noir-gris sur le dessus, blanc dessous, grande tache alaire blanche. Femelle  et mu00e2le en plumage d\'éclipse d\'un brun discret, mais aussi tache alaire blanche.<br /><br /><strong>Voix:</strong> phrase métallique un peu mélancolique de 2 secondes «titi-tu-titi» répété, cri «pitt» ou «tic» claquant.<br /><br /><strong>Distribution:</strong> parcs et forêts feuillues et mixtes ouvertes. Hiverne au sud du Sahara.<br /><br /><strong>Nourriture:</strong> chasse les insectes en vol.<br /><br /><strong>Nidification:</strong> les 5-8 u0153ufs sont couvés dans un trou d\'arbre ou un nichoir.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird188->pictures()->save($trauerschnaepper_1);
        $bird188->pictures()->save($trauerschnaepper_2);
        $bird188->habitats()->attach($siedlungsraum);
        $bird188->habitats()->attach($wald);
        $bird188->family()->associate($muscicapidae);
        $bird188->order()->associate($passeri);
        $bird188->plumageColors()->save($schwarz);
        $bird188->plumageColors()->save($grau);
        $bird188->plumageColors()->save($weiss);
        $bird188->plumageColors()->save($beige);
        $bird188->plumageColors()->save($braun);
        $bird188->legsColors()->save($schwarz);
        $bird188->legsColors()->save($braun);
        $bird188->beakColors()->save($schwarz);
        $bird188->beakShapes()->attach($kurz_duenn);
        $bird188->sizes()->attach($_spatz);
        $bird188->save();

        $bird189 = Bird::create( [
            'name' => 'Ficedula albicollis',
            'name_de' => '',
            'name_fr' => 'Gobemouche à collier',
            'name_it' => 'Balia dal collare',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird189->pictures()->save($halsbandschnaepper_1);
        $bird189->pictures()->save($halsbandschnaepper_2);
        $bird189->habitats()->attach($wald);
        $bird189->family()->associate($muscicapidae);
        $bird189->order()->associate($passeri);
        $bird189->plumageColors()->save($schwarz);
        $bird189->plumageColors()->save($grau);
        $bird189->plumageColors()->save($weiss);
        $bird189->legsColors()->save($schwarz);
        $bird189->beakColors()->save($schwarz);
        $bird189->beakShapes()->attach($kurz_duenn);
        $bird189->sizes()->attach($_spatz);
        $bird189->save();

        $bird190 = Bird::create( [
            'name' => 'Parus major',
            'name_de' => '',
            'name_fr' => 'Mésange charbonnière',
            'name_it' => 'Cinciallegra',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> grande mésange à tête noire et blanche, ventre jaune avec bande médiane noire. Les deux sexes ont un plumage presque identique.<br /><br /><strong>Voix:</strong> grande variété de cris et de strophes, notamment «pink-pink», «si yutti yutti» ou «ti-ta ti-ta ti-ta...». Les motifs sont souvent répétés.<br /><br /><strong>Distribution:</strong> présente toute l&rsquo;année partout jusqu&rsquo;à la limite supérieure des forêts. L&rsquo;un des oiseaux nicheurs les plus fréquents de Suisse en raison de ses fortes capacités d&rsquo;adaptation. Fréquente aux mangeoires en hiver.<br /><br /><strong>Nourriture:</strong> insectes et graines.<br /><br /><strong>Nidification:</strong> dans une cavité, souvent un nichoir, 6-12 jeunes par nichée.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird190->pictures()->save($kohlmeise_1);
        $bird190->habitats()->attach($aecker_und_feldflur);
        $bird190->habitats()->attach($siedlungsraum);
        $bird190->habitats()->attach($wald);
        $bird190->family()->associate($paridae);
        $bird190->order()->associate($passeri);
        $bird190->plumageColors()->save($schwarz);
        $bird190->plumageColors()->save($grau);
        $bird190->plumageColors()->save($weiss);
        $bird190->plumageColors()->save($gelb);
        $bird190->plumageColors()->save($gruen);
        $bird190->legsColors()->save($schwarz);
        $bird190->beakColors()->save($schwarz);
        $bird190->beakShapes()->attach($normal);
        $bird190->beakShapes()->attach($kurz_duenn);
        $bird190->sizes()->attach($_spatz);
        $bird190->save();

        $bird191 = Bird::create( [
            'name' => 'Parus ater',
            'name_de' => '',
            'name_fr' => 'Mésange noire',
            'name_it' => 'Cincia mora',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird191->pictures()->save($tannenmeise_1);
        $bird191->habitats()->attach($siedlungsraum);
        $bird191->habitats()->attach($wald);
        $bird191->family()->associate($paridae);
        $bird191->order()->associate($passeri);
        $bird191->plumageColors()->save($schwarz);
        $bird191->plumageColors()->save($grau);
        $bird191->plumageColors()->save($weiss);
        $bird191->plumageColors()->save($beige);
        $bird191->plumageColors()->save($braun);
        $bird191->plumageColors()->save($gelb);
        $bird191->legsColors()->save($schwarz);
        $bird191->beakColors()->save($schwarz);
        $bird191->beakShapes()->attach($normal);
        $bird191->beakShapes()->attach($kurz_duenn);
        $bird191->sizes()->attach($_spatz);
        $bird191->save();

        $bird192 = Bird::create( [
            'name' => 'Cyanistes caeruleus',
            'name_de' => '',
            'name_fr' => 'Mésange bleue',
            'name_it' => 'Cinciarella',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit passereau bleu et jaune. Mu00e2le et femelle ont un plumage identique dans le spectre des rayons visibles, mais différences dans les UV, visibles pour les mésanges.<br /><br /><strong>Voix:</strong> «sississi» fin ou «kèr&rsquo;r&rsquo;r&rsquo;r&rsquo;r&rsquo;èk-èk-èk» irrité.  Chant avec 3-8 types de strophes, p. ex. un «si-si-suyrrr» aigu.<br /><br /><strong>Distribution:</strong> toute l&rsquo;année dans les forêts de feuillus et mixtes, les parcs et les jardins. Fréquente aux boules de graines en hiver.<br /><br /><strong>Nourriture:</strong> insectes et araignées, aussi graines en dehors de la saison de reproduction.<br /><br /><strong>Nidification:</strong> nid en mousse plus élaboré que celui de la mésange charbonnière, souvent en nichoir, 6-12 jeunes par nichée.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird192->pictures()->save($blaumeise_1);
        $bird192->pictures()->save($blaumeise_2);
        $bird192->habitats()->attach($aecker_und_feldflur);
        $bird192->habitats()->attach($siedlungsraum);
        $bird192->habitats()->attach($wald);
        $bird192->family()->associate($paridae);
        $bird192->order()->associate($passeri);
        $bird192->plumageColors()->save($schwarz);
        $bird192->plumageColors()->save($weiss);
        $bird192->plumageColors()->save($gelb);
        $bird192->plumageColors()->save($blau);
        $bird192->plumageColors()->save($gruen);
        $bird192->legsColors()->save($schwarz);
        $bird192->beakColors()->save($schwarz);
        $bird192->beakShapes()->attach($kurz_duenn);
        $bird192->beakShapes()->attach($normal);
        $bird192->sizes()->attach($_spatz);
        $bird192->save();

        $bird193 = Bird::create( [
            'name' => 'Lophophanes cristatus',
            'name_de' => '',
            'name_fr' => 'Mésange huppée',
            'name_it' => 'Cincia dal ciuffo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird193->pictures()->save($haubenmeise_1);
        $bird193->habitats()->attach($wald);
        $bird193->habitats()->attach($siedlungsraum);
        $bird193->family()->associate($paridae);
        $bird193->order()->associate($passeri);
        $bird193->plumageColors()->save($schwarz);
        $bird193->plumageColors()->save($grau);
        $bird193->plumageColors()->save($weiss);
        $bird193->plumageColors()->save($beige);
        $bird193->plumageColors()->save($braun);
        $bird193->legsColors()->save($schwarz);
        $bird193->beakColors()->save($schwarz);
        $bird193->beakColors()->save($braun);
        $bird193->beakShapes()->attach($normal);
        $bird193->beakShapes()->attach($kurz_duenn);
        $bird193->sizes()->attach($_spatz);
        $bird193->save();

        $bird194 = Bird::create( [
            'name' => 'Parus montanus',
            'name_de' => '',
            'name_fr' => 'Mésange boréale',
            'name_it' => 'Cincia bigia alpestre',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird194->pictures()->save($weidenmeise_1);
        $bird194->habitats()->attach($gebirge);
        $bird194->habitats()->attach($wald);
        $bird194->habitats()->attach($gewaesser);
        $bird194->family()->associate($paridae);
        $bird194->order()->associate($passeri);
        $bird194->plumageColors()->save($schwarz);
        $bird194->plumageColors()->save($grau);
        $bird194->plumageColors()->save($weiss);
        $bird194->plumageColors()->save($beige);
        $bird194->plumageColors()->save($braun);
        $bird194->legsColors()->save($schwarz);
        $bird194->legsColors()->save($braun);
        $bird194->beakColors()->save($schwarz);
        $bird194->beakShapes()->attach($normal);
        $bird194->beakShapes()->attach($kurz_duenn);
        $bird194->sizes()->attach($_spatz);
        $bird194->save();

        $bird195 = Bird::create( [
            'name' => 'Poecile palustris',
            'name_de' => '',
            'name_fr' => 'Mésange nonnette',
            'name_it' => 'Cincia bigia',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petite mésange gris-brun avec joues blanches, calotte noire et petite bavette noire.r<br /><br /><strong>Voix:</strong> chant monotone composé d\'une seule note répétée «tchuu00efp tchuu00efp tchuu00efp», le cri est un «pitchè» explosif.r<br /><br /><strong>Distribution:</strong> dans les forêts feuillues et mixtes avec vieux arbres et bois mort, forêts alluviales et riveraines, surfaces vertes avec arbres dans les villes et les villages.r<br /><br /><strong>Nourriture:</strong> insectes, araignées et petites graines. Fréquente souvent les mangeoires en hiver.r<br /><br /><strong>Nidification:</strong> pond 7-10 oeufs dans un trou d\'arbre ou un nichoir.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird195->pictures()->save($sumpfmeise_1);
        $bird195->habitats()->attach($siedlungsraum);
        $bird195->habitats()->attach($wald);
        $bird195->family()->associate($paridae);
        $bird195->order()->associate($passeri);
        $bird195->plumageColors()->save($schwarz);
        $bird195->plumageColors()->save($grau);
        $bird195->plumageColors()->save($weiss);
        $bird195->plumageColors()->save($beige);
        $bird195->plumageColors()->save($braun);
        $bird195->legsColors()->save($schwarz);
        $bird195->legsColors()->save($braun);
        $bird195->beakColors()->save($schwarz);
        $bird195->beakShapes()->attach($normal);
        $bird195->beakShapes()->attach($kurz_duenn);
        $bird195->sizes()->attach($_spatz);
        $bird195->save();

        $bird196 = Bird::create( [
            'name' => 'Aegithalos caudatus',
            'name_de' => '',
            'name_fr' => 'Mésange à longue queue',
            'name_it' => 'Codibugnolo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit oiseau rond avec queue très longue. Le plumage est blanc, noir et rose.r<br /><br /><strong>Voix:</strong> «srih-srih-sriht» peru00e7ants et «tzèrrrr» bourdonnant.r<br /><br /><strong>Distribution:</strong> vit dans les forêts clairsemées riches en buissons et dans les jardins et zones humides avec nombreux buissons et arbres.r<br /><br /><strong>Nourriture:</strong> petits insectes et araignées, récoltés sur les branches et les feuilles.r<br /><br /><strong>Nidification:</strong> nid élaboré en forme de boule avec entrée latérale, composé de mousses et de lichens et garni de plumes à l\'intérieur. Il est construit dans les arbres à proximité du tronc. Pond 6-12 oeufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird196->pictures()->save($schwanzmeise_1);
        $bird196->habitats()->attach($aecker_und_feldflur);
        $bird196->habitats()->attach($siedlungsraum);
        $bird196->habitats()->attach($wald);
        $bird196->family()->associate($aegithalidae);
        $bird196->order()->associate($passeri);
        $bird196->plumageColors()->save($schwarz);
        $bird196->plumageColors()->save($weiss);
        $bird196->plumageColors()->save($beige);
        $bird196->plumageColors()->save($braun);
        $bird196->plumageColors()->save($rosa);
        $bird196->legsColors()->save($schwarz);
        $bird196->legsColors()->save($braun);
        $bird196->beakColors()->save($schwarz);
        $bird196->beakShapes()->attach($kurz_dick);
        $bird196->sizes()->attach($_spatz);
        $bird196->save();

        $bird197 = Bird::create( [
            'name' => 'Remiz pendulinus',
            'name_de' => '',
            'name_fr' => 'Rémiz penduline',
            'name_it' => 'Pendolino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird197->pictures()->save($beutelmeise_1);
        $bird197->pictures()->save($beutelmeise_2);
        $bird197->habitats()->attach($gewaesser);
        $bird197->family()->associate($remizidae);
        $bird197->order()->associate($passeri);
        $bird197->plumageColors()->save($schwarz);
        $bird197->plumageColors()->save($grau);
        $bird197->plumageColors()->save($weiss);
        $bird197->plumageColors()->save($beige);
        $bird197->plumageColors()->save($braun);
        $bird197->legsColors()->save($schwarz);
        $bird197->beakColors()->save($schwarz);
        $bird197->beakColors()->save($grau);
        $bird197->beakShapes()->attach($kurz_dick);
        $bird197->sizes()->attach($_spatz);
        $bird197->save();

        $bird198 = Bird::create( [
            'name' => 'Panurus biarmicus',
            'name_de' => '',
            'name_fr' => 'Panure à moustaches',
            'name_it' => 'Basettino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird198->pictures()->save($bartmeise_1);
        $bird198->pictures()->save($bartmeise_2);
        $bird198->habitats()->attach($gewaesser);
        $bird198->family()->associate($panuridae);
        $bird198->order()->associate($passeri);
        $bird198->plumageColors()->save($schwarz);
        $bird198->plumageColors()->save($weiss);
        $bird198->plumageColors()->save($beige);
        $bird198->plumageColors()->save($braun);
        $bird198->plumageColors()->save($orange);
        $bird198->plumageColors()->save($blau);
        $bird198->legsColors()->save($schwarz);
        $bird198->beakColors()->save($schwarz);
        $bird198->beakColors()->save($orange);
        $bird198->beakColors()->save($gelb);
        $bird198->beakShapes()->attach($normal);
        $bird198->beakShapes()->attach($kurz_duenn);
        $bird198->sizes()->attach($spatz_amsel);
        $bird198->save();

        $bird199 = Bird::create( [
            'name' => 'Sitta europaea',
            'name_de' => '',
            'name_fr' => 'Sittelle torchepot',
            'name_it' => 'Picchio muratore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau de la taille d\'un moineau, dessus bleu-gris, dessous chamois roussu00e2tre, bandeau noir sur les yeux. Seul oiseau pouvant descendre un tronc la tête en bas.<br /><br /><strong>Voix:</strong> cris sonores sifflés «tuit-tuit», chant «tuu00ee-tuu00ee-tuu00ee» sonore ou trille plus rapide.<br /><br /><strong>Distribution:</strong> toute l\'année dans les forêts, les parcs et les jardins, jusqu\'à la limite supérieure des arbres. Les oiseaux des montagnes descendent en plaine en hiver.<br /><br /><strong>Nourriture:</strong> graines et noix qu\'elle coince dans l\'écorce pour les ouvrir avec son bec puissant.<br /><br /><strong>Nidification:</strong> trous d\'arbre et nichoirs. Les ouvertures trop grandes sont rétrécies avec de l\'argile.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird199->pictures()->save($kleiber_1);
        $bird199->habitats()->attach($siedlungsraum);
        $bird199->habitats()->attach($wald);
        $bird199->family()->associate($sittidae);
        $bird199->order()->associate($passeri);
        $bird199->plumageColors()->save($schwarz);
        $bird199->plumageColors()->save($grau);
        $bird199->plumageColors()->save($weiss);
        $bird199->plumageColors()->save($orange);
        $bird199->plumageColors()->save($blau);
        $bird199->legsColors()->save($braun);
        $bird199->legsColors()->save($rot);
        $bird199->beakColors()->save($schwarz);
        $bird199->beakShapes()->attach($meisselfoermig);
        $bird199->beakShapes()->attach($normal);
        $bird199->sizes()->attach($_spatz);
        $bird199->save();

        $bird200 = Bird::create( [
            'name' => 'Tichodroma muraria',
            'name_de' => '',
            'name_fr' => 'Tichodrome échelette',
            'name_it' => 'Picchio muraiolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird200->pictures()->save($mauerlaeufer_1);
        $bird200->habitats()->attach($gebirge);
        $bird200->family()->associate($tichodromadinae);
        $bird200->order()->associate($passeri);
        $bird200->plumageColors()->save($schwarz);
        $bird200->plumageColors()->save($grau);
        $bird200->plumageColors()->save($rot);
        $bird200->legsColors()->save($schwarz);
        $bird200->beakColors()->save($schwarz);
        $bird200->beakColors()->save($grau);
        $bird200->beakShapes()->attach($lang_duenn);
        $bird200->sizes()->attach($_spatz);
        $bird200->sizes()->attach($spatz_amsel);
        $bird200->save();

        $bird201 = Bird::create( [
            'name' => 'Certhia familiaris',
            'name_de' => '',
            'name_fr' => 'Grimpereau des bois',
            'name_it' => 'Rampichino alpestre',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird201->pictures()->save($waldbaumlaeufer_1);
        $bird201->habitats()->attach($wald);
        $bird201->family()->associate($certhiidae);
        $bird201->order()->associate($passeri);
        $bird201->plumageColors()->save($schwarz);
        $bird201->plumageColors()->save($weiss);
        $bird201->plumageColors()->save($beige);
        $bird201->plumageColors()->save($braun);
        $bird201->legsColors()->save($braun);
        $bird201->legsColors()->save($rot);
        $bird201->beakColors()->save($schwarz);
        $bird201->beakShapes()->attach($lang_duenn);
        $bird201->sizes()->attach($_spatz);
        $bird201->save();

        $bird202 = Bird::create( [
            'name' => 'Certhia brachydactyla',
            'name_de' => '',
            'name_fr' => 'Grimpereau des jardins',
            'name_it' => 'Rampichino comune',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit oiseau strié de brun, dessous clair, long bec recourbé. Grimpe en spirale le long des troncs d\'arbre, arrivé en haut vole de nouveau vers le bas et recommence sa recherche de nourriture dans les crevasses de l\'écorce.<br /><br /><strong>Voix:</strong> le cri est un «ti» aigu, chant en ritournelle aigu00fce «tit-tit-titirou00ef-itit».<br /><br /><strong>Distribution:</strong> toute l\'année dans les forêts feuillues, les parcs et les jardins. Recherche les arbres aux écorces crevassées.<br /><br /><strong>Nourriture:</strong> insectes, araignées et larves qu\'il extrait de l\'écorce. En hiver surtout semences.<br /><br /><strong>Nidification:</strong> 5-6 u0153ufs dans une cavité d\'arbre.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird202->pictures()->save($gartenbaumlaeufer_1);
        $bird202->habitats()->attach($siedlungsraum);
        $bird202->habitats()->attach($wald);
        $bird202->family()->associate($certhiidae);
        $bird202->order()->associate($passeri);
        $bird202->plumageColors()->save($weiss);
        $bird202->plumageColors()->save($beige);
        $bird202->plumageColors()->save($braun);
        $bird202->legsColors()->save($braun);
        $bird202->beakColors()->save($braun);
        $bird202->beakShapes()->attach($lang_duenn);
        $bird202->sizes()->attach($_spatz);
        $bird202->save();

        $bird203 = Bird::create( [
            'name' => 'Lanius collurio',
            'name_de' => '',
            'name_fr' => 'Pie-grièche écorcheur',
            'name_it' => 'Averla piccola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird203->pictures()->save($neuntoeter_1);
        $bird203->pictures()->save($neuntoeter_2);
        $bird203->habitats()->attach($meere_und_kuesten);
        $bird203->habitats()->attach($aecker_und_feldflur);
        $bird203->habitats()->attach($wiesen_und_weiden);
        $bird203->habitats()->attach($heidelandschaft);
        $bird203->habitats()->attach($wald);
        $bird203->family()->associate($laniidae);
        $bird203->order()->associate($passeri);
        $bird203->plumageColors()->save($schwarz);
        $bird203->plumageColors()->save($grau);
        $bird203->plumageColors()->save($weiss);
        $bird203->plumageColors()->save($beige);
        $bird203->plumageColors()->save($braun);
        $bird203->plumageColors()->save($rot);
        $bird203->legsColors()->save($schwarz);
        $bird203->legsColors()->save($braun);
        $bird203->beakColors()->save($schwarz);
        $bird203->beakColors()->save($braun);
        $bird203->beakShapes()->attach($kurz_hakenfoermig);
        $bird203->beakShapes()->attach($kurz_dick);
        $bird203->beakShapes()->attach($normal);
        $bird203->sizes()->attach($spatz_amsel);
        $bird203->save();

        $bird204 = Bird::create( [
            'name' => 'Lanius senator',
            'name_de' => '',
            'name_fr' => 'Pie-grièche à tête rousse',
            'name_it' => 'Averla capirossa',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird204->pictures()->save($rotkopfwuerger_1);
        $bird204->habitats()->attach($aecker_und_feldflur);
        $bird204->habitats()->attach($wiesen_und_weiden);
        $bird204->family()->associate($laniidae);
        $bird204->order()->associate($passeri);
        $bird204->plumageColors()->save($schwarz);
        $bird204->plumageColors()->save($weiss);
        $bird204->plumageColors()->save($rot);
        $bird204->plumageColors()->save($grau);
        $bird204->legsColors()->save($schwarz);
        $bird204->beakColors()->save($schwarz);
        $bird204->beakShapes()->attach($kurz_hakenfoermig);
        $bird204->beakShapes()->attach($kurz_dick);
        $bird204->beakShapes()->attach($normal);
        $bird204->sizes()->attach($spatz_amsel);
        $bird204->save();

        $bird205 = Bird::create( [
            'name' => 'Lanius excubitor',
            'name_de' => '',
            'name_fr' => 'Pie-grièche grise',
            'name_it' => 'Averla maggiore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird205->pictures()->save($raubwuerger_1);
        $bird205->habitats()->attach($aecker_und_feldflur);
        $bird205->habitats()->attach($wiesen_und_weiden);
        $bird205->habitats()->attach($gewaesser);
        $bird205->family()->associate($laniidae);
        $bird205->order()->associate($passeri);
        $bird205->plumageColors()->save($schwarz);
        $bird205->plumageColors()->save($grau);
        $bird205->plumageColors()->save($weiss);
        $bird205->legsColors()->save($schwarz);
        $bird205->beakColors()->save($schwarz);
        $bird205->beakShapes()->attach($kurz_hakenfoermig);
        $bird205->beakShapes()->attach($kurz_dick);
        $bird205->beakShapes()->attach($normal);
        $bird205->sizes()->attach($spatz_amsel);
        $bird205->save();

        $bird206 = Bird::create( [
            'name' => 'Pica pica',
            'name_de' => '',
            'name_fr' => 'Pie bavarde',
            'name_it' => 'Gazza',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> corvidé noir et blanc à longue queue. Une des espèces d&rsquo;oiseaux les plus intelligentes, peut p. ex. reconnau00eetre son reflet dans un miroir. Depuis le Moyen-Age, associée à la déesse de la mort et donc au malheur. En Asie, elle est considérée comme porte-bonheur. <br /><br /><strong>Voix:</strong> cris sonores «tché-tché-tché-tché...».<br /><br /><strong>Distribution:</strong> toute l&rsquo;année, partout jusqu&rsquo;à la limite supérieure des arbres, sauf dans les forêts denses. Volontiers dans les villes et villages.<br /><br /><strong>Nourriture:</strong> 95% de la nourriture est constitué d&rsquo;animaux pouvant atteindre la taille d&rsquo;une souris. <br /><br /><strong>Nidification:</strong> nid rond caractéristique avec toit fermé et entrée latérale, 4-7 jeunes.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird206->pictures()->save($elster_1);
        $bird206->pictures()->save($elster_2);
        $bird206->habitats()->attach($aecker_und_feldflur);
        $bird206->habitats()->attach($wiesen_und_weiden);
        $bird206->habitats()->attach($siedlungsraum);
        $bird206->habitats()->attach($wald);
        $bird206->family()->associate($corvidae);
        $bird206->order()->associate($passeri);
        $bird206->plumageColors()->save($schwarz);
        $bird206->plumageColors()->save($weiss);
        $bird206->plumageColors()->save($blau);
        $bird206->plumageColors()->save($gruen);
        $bird206->legsColors()->save($schwarz);
        $bird206->beakColors()->save($schwarz);
        $bird206->beakShapes()->attach($normal);
        $bird206->sizes()->attach($amsel_taube);
        $bird206->sizes()->attach($taube_stockente);
        $bird206->save();

        $bird207 = Bird::create( [
            'name' => 'Garrulus glandarius',
            'name_de' => '',
            'name_fr' => 'Geai des chênes',
            'name_it' => 'Ghiandaia',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> en vol, reconnaissable à ses courtes ailes rondes avec plumes bleues et son croupion blanc. r<br /><br /><strong>Voix:</strong> le cri est un «kchèèch!» sonore, imite les cris d&rsquo;autres oiseaux, p. ex. le «piuyèh» plaintif de la buse. Chant composé d&rsquo;un mélange de sons, portant peu.r<br /><br /><strong>Distribution:</strong> toute l&rsquo;année dans les forêts mixtes, les bosquets et les parcs, jusqu&rsquo;à environ 1500 m d&rsquo;altitude. Certains hivers invasions d&rsquo;individus venus du nord-est de l&rsquo;Europe.r<br /><br /><strong>Nourriture:</strong> en été surtout animaux (insectes, oisillons, u0153ufs, souris). Cache des glands, noisettes et chu00e2taignes pour l&rsquo;hiver.r<br /><br /><strong>Nidification:</strong> nid ouvert sur un arbre, 5-6 u0153ufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird207->pictures()->save($eichelhaeher_1);
        $bird207->pictures()->save($eichelhaeher_2);
        $bird207->habitats()->attach($aecker_und_feldflur);
        $bird207->habitats()->attach($siedlungsraum);
        $bird207->habitats()->attach($wald);
        $bird207->family()->associate($corvidae);
        $bird207->order()->associate($passeri);
        $bird207->plumageColors()->save($schwarz);
        $bird207->plumageColors()->save($weiss);
        $bird207->plumageColors()->save($beige);
        $bird207->plumageColors()->save($braun);
        $bird207->plumageColors()->save($blau);
        $bird207->legsColors()->save($braun);
        $bird207->legsColors()->save($rosa);
        $bird207->beakColors()->save($schwarz);
        $bird207->beakShapes()->attach($kurz_dick);
        $bird207->beakShapes()->attach($normal);
        $bird207->sizes()->attach($amsel_taube);
        $bird207->sizes()->attach($taube_stockente);
        $bird207->save();

        $bird208 = Bird::create( [
            'name' => 'Nucifraga caryocatactes',
            'name_de' => '',
            'name_fr' => 'Cassenoix moucheté',
            'name_it' => 'Nocciolaia',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird208->pictures()->save($tannenhaeher_1);
        $bird208->pictures()->save($tannenhaeher_2);
        $bird208->habitats()->attach($wald);
        $bird208->habitats()->attach($gebirge);
        $bird208->family()->associate($corvidae);
        $bird208->order()->associate($passeri);
        $bird208->plumageColors()->save($schwarz);
        $bird208->plumageColors()->save($weiss);
        $bird208->plumageColors()->save($braun);
        $bird208->legsColors()->save($schwarz);
        $bird208->legsColors()->save($grau);
        $bird208->beakColors()->save($schwarz);
        $bird208->beakColors()->save($grau);
        $bird208->beakShapes()->attach($normal);
        $bird208->beakShapes()->attach($lang_dolchfoermig);
        $bird208->sizes()->attach($amsel_taube);
        $bird208->save();

        $bird209 = Bird::create( [
            'name' => 'Pyrrhocorax pyrrhocorax',
            'name_de' => '',
            'name_fr' => 'Crave à bec rouge',
            'name_it' => 'Gracchio corallino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird209->pictures()->save($alpenkraehe_1);
        $bird209->pictures()->save($alpenkraehe_2);
        $bird209->habitats()->attach($gebirge);
        $bird209->habitats()->attach($aecker_und_feldflur);
        $bird209->habitats()->attach($wiesen_und_weiden);
        $bird209->family()->associate($corvidae);
        $bird209->order()->associate($passeri);
        $bird209->plumageColors()->save($schwarz);
        $bird209->legsColors()->save($rot);
        $bird209->beakColors()->save($rot);
        $bird209->beakShapes()->attach($normal);
        $bird209->beakShapes()->attach($lang_duenn);
        $bird209->sizes()->attach($amsel_taube);
        $bird209->save();

        $bird210 = Bird::create( [
            'name' => 'Pyrrhocorax graculus',
            'name_de' => '',
            'name_fr' => 'Chocard à bec jaune',
            'name_it' => 'Gracchio alpino',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird210->pictures()->save($alpendohle_1);
        $bird210->pictures()->save($alpendohle_2);
        $bird210->habitats()->attach($gebirge);
        $bird210->habitats()->attach($siedlungsraum);
        $bird210->family()->associate($corvidae);
        $bird210->order()->associate($passeri);
        $bird210->plumageColors()->save($schwarz);
        $bird210->legsColors()->save($rosa);
        $bird210->legsColors()->save($rot);
        $bird210->beakColors()->save($gelb);
        $bird210->beakShapes()->attach($normal);
        $bird210->beakShapes()->attach($lang_duenn);
        $bird210->sizes()->attach($amsel_taube);
        $bird210->save();

        $bird211 = Bird::create( [
            'name' => 'Corvus monedula',
            'name_de' => '',
            'name_fr' => 'Choucas des tours',
            'name_it' => 'Taccola',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit corvidé à la nuque grise et aux yeux pu00e2les. Oiseau grégaire, vols acrobatiques au printemps. <br /><br /><strong>Voix:</strong> bruyants, «kya», souvent répété en série ou «kyak!» plus dur.<br /><br /><strong>Distribution:</strong> toute l&rsquo;année dans les forêts feuillues, les zones construites, les jardins, les parcs, parfois en plein milieu des villes. Forme des groupes assez importants en automne.<br /><br /><strong>Nourriture:</strong> omnivore, aussi déchets.<br /><br /><strong>Nidification:</strong> vit en colonies, partenaires réunis pour la vie. Niche dans d&rsquo;anciennes loges de pic noir dans les forêts feuillues, mais également dans les bu00e2timents, les clochers d&rsquo;église et les anfractuosités de rochers. 3-6 jeunes par année.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird211->pictures()->save($dohle_1);
        $bird211->pictures()->save($dohle_2);
        $bird211->habitats()->attach($aecker_und_feldflur);
        $bird211->habitats()->attach($wiesen_und_weiden);
        $bird211->habitats()->attach($siedlungsraum);
        $bird211->habitats()->attach($wald);
        $bird211->family()->associate($corvidae);
        $bird211->order()->associate($passeri);
        $bird211->plumageColors()->save($schwarz);
        $bird211->plumageColors()->save($grau);
        $bird211->legsColors()->save($schwarz);
        $bird211->beakColors()->save($schwarz);
        $bird211->beakColors()->save($grau);
        $bird211->beakShapes()->attach($normal);
        $bird211->sizes()->attach($amsel_taube);
        $bird211->sizes()->attach($taube_stockente);
        $bird211->save();

        $bird212 = Bird::create( [
            'name' => 'Corvus frugilegus',
            'name_de' => '',
            'name_fr' => 'Corbeau freux',
            'name_it' => 'Corvo comune',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird212->pictures()->save($saatkraehe_1);
        $bird212->habitats()->attach($aecker_und_feldflur);
        $bird212->habitats()->attach($wiesen_und_weiden);
        $bird212->habitats()->attach($siedlungsraum);
        $bird212->habitats()->attach($wald);
        $bird212->family()->associate($corvidae);
        $bird212->order()->associate($passeri);
        $bird212->plumageColors()->save($schwarz);
        $bird212->legsColors()->save($schwarz);
        $bird212->legsColors()->save($grau);
        $bird212->beakColors()->save($schwarz);
        $bird212->beakColors()->save($grau);
        $bird212->beakShapes()->attach($normal);
        $bird212->beakShapes()->attach($lang_dolchfoermig);
        $bird212->sizes()->attach($taube_stockente);
        $bird212->save();

        $bird213 = Bird::create( [
            'name' => 'Corvus corone',
            'name_de' => '',
            'name_fr' => 'Corneille noire',
            'name_it' => 'Cornacchia nera',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> noire, vagues reflets métalliques. Oiseau intelligent, capable de s&rsquo;adapter et d&rsquo;apprendre. Vol habile et bon marcheur, domine les autres oiseaux dans les paysages cultivés. <br /><br /><strong>Voix:</strong> croassement rude «krra krra krra». <br /><br /><strong>Distribution:</strong> présente toute l&rsquo;année, largement répandue du Plateau suisse à la limite supérieure des arbres.<br /><br /><strong>Nourriture:</strong> omnivore: animaux jusqu&rsquo;à la taille d&rsquo;une souris, charognes, fruits, déchets, céréales, graines.<br /><br /><strong>Nidification:</strong> le nid est construit par les deux partenaires dans une fourche d\'un grand arbre, 4-5 jeunes par nichée. Les non-nicheurs sans territoire forment des troupes qui vagabondent.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird213->pictures()->save($rabenkraehe_1);
        $bird213->habitats()->attach($aecker_und_feldflur);
        $bird213->habitats()->attach($wiesen_und_weiden);
        $bird213->habitats()->attach($gebirge);
        $bird213->habitats()->attach($siedlungsraum);
        $bird213->habitats()->attach($wald);
        $bird213->family()->associate($corvidae);
        $bird213->order()->associate($passeri);
        $bird213->plumageColors()->save($schwarz);
        $bird213->legsColors()->save($schwarz);
        $bird213->beakColors()->save($schwarz);
        $bird213->beakShapes()->attach($normal);
        $bird213->sizes()->attach($taube_stockente);
        $bird213->save();

        $bird214 = Bird::create( [
            'name' => 'Corvus cornix',
            'name_de' => '',
            'name_fr' => 'Corneille mantelée',
            'name_it' => 'Cornacchia grigia',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird214->pictures()->save($nebelkraehe_1);
        $bird214->habitats()->attach($aecker_und_feldflur);
        $bird214->habitats()->attach($wiesen_und_weiden);
        $bird214->habitats()->attach($siedlungsraum);
        $bird214->habitats()->attach($wald);
        $bird214->family()->associate($corvidae);
        $bird214->order()->associate($passeri);
        $bird214->plumageColors()->save($schwarz);
        $bird214->plumageColors()->save($grau);
        $bird214->plumageColors()->save($braun);
        $bird214->legsColors()->save($schwarz);
        $bird214->beakColors()->save($schwarz);
        $bird214->beakShapes()->attach($normal);
        $bird214->sizes()->attach($taube_stockente);
        $bird214->save();

        $bird215 = Bird::create( [
            'name' => 'Corvus corax',
            'name_de' => '',
            'name_fr' => 'Grand Corbeau',
            'name_it' => 'Corvo imperiale',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird215->pictures()->save($kolkrabe_1);
        $bird215->habitats()->attach($aecker_und_feldflur);
        $bird215->habitats()->attach($gebirge);
        $bird215->habitats()->attach($siedlungsraum);
        $bird215->habitats()->attach($wald);
        $bird215->family()->associate($corvidae);
        $bird215->order()->associate($passeri);
        $bird215->plumageColors()->save($schwarz);
        $bird215->legsColors()->save($schwarz);
        $bird215->beakColors()->save($schwarz);
        $bird215->beakShapes()->attach($normal);
        $bird215->sizes()->attach($taube_stockente);
        $bird215->sizes()->attach($stockente_);
        $bird215->save();

        $bird216 = Bird::create( [
            'name' => 'Sturnus vulgaris',
            'name_de' => '',
            'name_fr' => 'Etourneau sansonnet',
            'name_it' => 'Storno',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau noir avec bec jaune, facilement différenciable du merle en raison de son plumage aux teintes métalliques et des points blancs.<br /><br /><strong>Voix:</strong> grand répertoire de cris. Chant composé de grincements, babillages, cliquètements et sifflements. Imite volontiers d\'autres espèces (loriot, buse) ou des bruits tels que les sonneries de téléphones portables. <br /><br /><strong>Distribution:</strong> milieux cultivés ouverts, jardins, parcs. Après la reproduction, formation d\'immenses troupes hivernant en région méditerranéenne. <br /><br /><strong>Nourriture:</strong> graines, fruits, insectes.<br /><br /><strong>Nidification:</strong> 4-6 u0153ufs couvés dans un trou d\'arbre, une niche de bu00e2timent ou un nichoir.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird216->pictures()->save($star_1);
        $bird216->pictures()->save($star_2);
        $bird216->habitats()->attach($aecker_und_feldflur);
        $bird216->habitats()->attach($wiesen_und_weiden);
        $bird216->habitats()->attach($siedlungsraum);
        $bird216->family()->associate($sturnidae);
        $bird216->order()->associate($passeri);
        $bird216->plumageColors()->save($schwarz);
        $bird216->plumageColors()->save($grau);
        $bird216->plumageColors()->save($weiss);
        $bird216->plumageColors()->save($beige);
        $bird216->plumageColors()->save($braun);
        $bird216->legsColors()->save($braun);
        $bird216->legsColors()->save($rot);
        $bird216->beakColors()->save($schwarz);
        $bird216->beakColors()->save($gelb);
        $bird216->beakShapes()->attach($normal);
        $bird216->sizes()->attach($spatz_amsel);
        $bird216->save();

        $bird217 = Bird::create( [
            'name' => 'Oriolus oriolus',
            'name_de' => '',
            'name_fr' => 'Loriot d`Europe',
            'name_it' => 'Rigogolo',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird217->habitats()->attach($wald);
        $bird217->family()->associate($oriolidae);
        $bird217->order()->associate($passeri);
        $bird217->plumageColors()->save($schwarz);
        $bird217->plumageColors()->save($beige);
        $bird217->plumageColors()->save($gelb);
        $bird217->plumageColors()->save($gruen);
        $bird217->legsColors()->save($schwarz);
        $bird217->legsColors()->save($braun);
        $bird217->beakColors()->save($rot);
        $bird217->beakColors()->save($rosa);
        $bird217->beakShapes()->attach($normal);
        $bird217->sizes()->attach($spatz_amsel);
        $bird217->save();

        $bird218 = Bird::create( [
            'name' => 'Passer domesticus',
            'name_de' => '',
            'name_fr' => 'Moineau domestique',
            'name_it' => 'Passera oltremontana',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> mu00e2le  avec joues grises et plastron noir s&rsquo;étendant sur le ventre. Femelle  brun-gris sale avec dos rayé de noir.<br /><br /><strong>Voix:</strong> cris pépiants «tchip» variables, en séries.<br /><br /><strong>Distribution:</strong> vit presque exclusivement à proximité des habitations humaines, a suivi l&rsquo;homme jusque dans les vallées alpines.<br /><br /><strong>Nourriture:</strong> nourriture végétale diversifiée, graines, baies, restes de repas.<br /><br /><strong>Nidification:</strong> il construit son nid sous les tuiles des toits, dans des conduits d&rsquo;aération ou des nichoirs. 2-3 nichées annuelles de 4-6 jeunes chacune.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird218->pictures()->save($haussperling_1);
        $bird218->pictures()->save($haussperling_2);
        $bird218->habitats()->attach($aecker_und_feldflur);
        $bird218->habitats()->attach($siedlungsraum);
        $bird218->family()->associate($passeridae);
        $bird218->order()->associate($passeri);
        $bird218->plumageColors()->save($schwarz);
        $bird218->plumageColors()->save($grau);
        $bird218->plumageColors()->save($weiss);
        $bird218->plumageColors()->save($beige);
        $bird218->plumageColors()->save($braun);
        $bird218->legsColors()->save($braun);
        $bird218->legsColors()->save($rot);
        $bird218->beakColors()->save($schwarz);
        $bird218->beakColors()->save($braun);
        $bird218->beakShapes()->attach($kurz_dick);
        $bird218->sizes()->attach($_spatz);
        $bird218->save();

        $bird219 = Bird::create( [
            'name' => 'Passer (hispaniolensis) italiae',
            'name_de' => '',
            'name_fr' => 'Moineau cisalpin',
            'name_it' => 'Passera d\'Italia',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird219->habitats()->attach($aecker_und_feldflur);
        $bird219->habitats()->attach($siedlungsraum);
        $bird219->family()->associate($passeridae);
        $bird219->order()->associate($passeri);
        $bird219->plumageColors()->save($schwarz);
        $bird219->plumageColors()->save($grau);
        $bird219->plumageColors()->save($weiss);
        $bird219->plumageColors()->save($beige);
        $bird219->plumageColors()->save($braun);
        $bird219->legsColors()->save($braun);
        $bird219->legsColors()->save($rot);
        $bird219->beakColors()->save($schwarz);
        $bird219->beakColors()->save($braun);
        $bird219->beakShapes()->attach($kurz_dick);
        $bird219->sizes()->attach($_spatz);
        $bird219->save();

        $bird220 = Bird::create( [
            'name' => 'Passer montanus',
            'name_de' => '',
            'name_fr' => 'Moineau friquet',
            'name_it' => 'Passera mattugia',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> facile à distinguer du moineau domestique gru00e2ce à la tache sombre sur la joue. Contrairement au moineau domestique, les moineaux friquets mu00e2les et femelles ont le même plumage.r<br /><br /><strong>Voix:</strong> le cri ressemble à celui du moineau domestique avec toutefois un «tsouvitt» typique. Chant: série rapide de «tsvit». r<br /><br /><strong>Distribution:</strong> grégaire, toute l&rsquo;année en petits groupes dans le paysage cultivé, les haies, les bosquets et les lisières.r<br /><br /><strong>Nourriture:</strong> graines de toutes sortes.r<br /><br /><strong>Nidification:</strong> ne défend pas de territoire. Les 4-6 u0153ufs sont couvés dans une cavité ou un nichoir.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird220->pictures()->save($feldsperling_1);
        $bird220->pictures()->save($feldsperling_2);
        $bird220->habitats()->attach($aecker_und_feldflur);
        $bird220->habitats()->attach($siedlungsraum);
        $bird220->family()->associate($passeridae);
        $bird220->order()->associate($passeri);
        $bird220->plumageColors()->save($schwarz);
        $bird220->plumageColors()->save($grau);
        $bird220->plumageColors()->save($weiss);
        $bird220->plumageColors()->save($beige);
        $bird220->plumageColors()->save($braun);
        $bird220->legsColors()->save($braun);
        $bird220->legsColors()->save($rosa);
        $bird220->beakColors()->save($schwarz);
        $bird220->beakColors()->save($braun);
        $bird220->beakColors()->save($grau);
        $bird220->beakShapes()->attach($kurz_dick);
        $bird220->sizes()->attach($_spatz);
        $bird220->save();

        $bird221 = Bird::create( [
            'name' => 'Montifringilla nivalis',
            'name_de' => '',
            'name_fr' => 'Niverolle alpine',
            'name_it' => 'Fringuello alpino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird221->pictures()->save($schneesperling_1);
        $bird221->habitats()->attach($gebirge);
        $bird221->family()->associate($passeridae);
        $bird221->order()->associate($passeri);
        $bird221->plumageColors()->save($schwarz);
        $bird221->plumageColors()->save($grau);
        $bird221->plumageColors()->save($weiss);
        $bird221->plumageColors()->save($braun);
        $bird221->legsColors()->save($schwarz);
        $bird221->beakColors()->save($schwarz);
        $bird221->beakColors()->save($gelb);
        $bird221->beakShapes()->attach($kurz_dick);
        $bird221->sizes()->attach($spatz_amsel);
        $bird221->save();

        $bird222 = Bird::create( [
            'name' => 'Fringilla coelebs',
            'name_de' => '',
            'name_fr' => 'Pinson des arbres',
            'name_it' => 'Fringuello',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> mu00e2le  impossible à conu00adfonu00addre avec sa calotte gris-bleu et sa poitrine rougeu00e2tre. La femelle  aux couleurs plus discrètes est reconnaissable à ses barres alaires claires.<br /><br /><strong>Voix:</strong> divers cris dont un «huit» ascendant. Chant: trille s\'accélérant et terminé par une fioriture typique.<br /><br /><strong>Distribution:</strong> avec environ 1 million de couples nicheurs, oiseau le plus répandu de Suisse. Toute l\'année partout ou00f9 il y a des arbres.<br /><br /><strong>Nourriture:</strong> graines, baies et fruits.<br /><br /><strong>Nidification:</strong> 4-6 jeunes sont élevés dans un nid sur un arbre, souvent dans une fourche de branches.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird222->pictures()->save($buchfink_1);
        $bird222->pictures()->save($buchfink_2);
        $bird222->pictures()->save($buchfink_3);
        $bird222->habitats()->attach($aecker_und_feldflur);
        $bird222->habitats()->attach($wiesen_und_weiden);
        $bird222->habitats()->attach($siedlungsraum);
        $bird222->habitats()->attach($wald);
        $bird222->family()->associate($fringillidae);
        $bird222->order()->associate($passeri);
        $bird222->plumageColors()->save($schwarz);
        $bird222->plumageColors()->save($grau);
        $bird222->plumageColors()->save($weiss);
        $bird222->plumageColors()->save($beige);
        $bird222->plumageColors()->save($braun);
        $bird222->plumageColors()->save($rot);
        $bird222->plumageColors()->save($rosa);
        $bird222->plumageColors()->save($blau);
        $bird222->plumageColors()->save($gruen);
        $bird222->legsColors()->save($schwarz);
        $bird222->legsColors()->save($braun);
        $bird222->legsColors()->save($rot);
        $bird222->beakColors()->save($grau);
        $bird222->beakColors()->save($braun);
        $bird222->beakColors()->save($blau);
        $bird222->beakShapes()->attach($kurz_dick);
        $bird222->beakShapes()->attach($normal);
        $bird222->sizes()->attach($_spatz);
        $bird222->sizes()->attach($spatz_amsel);
        $bird222->save();

        $bird223 = Bird::create( [
            'name' => 'Fringilla montifringilla',
            'name_de' => '',
            'name_fr' => 'Pinson du Nord',
            'name_it' => 'Peppola',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird223->pictures()->save($bergfink_1);
        $bird223->pictures()->save($bergfink_2);
        $bird223->habitats()->attach($aecker_und_feldflur);
        $bird223->habitats()->attach($siedlungsraum);
        $bird223->habitats()->attach($wald);
        $bird223->family()->associate($fringillidae);
        $bird223->order()->associate($passeri);
        $bird223->plumageColors()->save($schwarz);
        $bird223->plumageColors()->save($grau);
        $bird223->plumageColors()->save($weiss);
        $bird223->plumageColors()->save($beige);
        $bird223->plumageColors()->save($braun);
        $bird223->plumageColors()->save($orange);
        $bird223->legsColors()->save($schwarz);
        $bird223->legsColors()->save($braun);
        $bird223->legsColors()->save($rot);
        $bird223->beakColors()->save($schwarz);
        $bird223->beakColors()->save($gelb);
        $bird223->beakShapes()->attach($kurz_dick);
        $bird223->sizes()->attach($_spatz);
        $bird223->save();

        $bird224 = Bird::create( [
            'name' => 'Carduelis carduelis',
            'name_de' => '',
            'name_fr' => 'Chardonneret élégant ',
            'name_it' => 'Cardellino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> oiseau très coloré avec une face rouge, une coloration noire et blanche de la tête, une tache alaire jaune sur fond noir. r<br /><br /><strong>Voix:</strong> cri un «tikélitt» sautillant. Chant constitué de rapides trilles et d&rsquo;éléments gazouillants.r<br /><br /><strong>Distribution:</strong> milieu cultivé avec haies, vergers, parcs, jardins. Présent toute l&rsquo;année, se rassemble en petites troupes en automne et hiver. r<br /><br /><strong>Nourriture:</strong> graines et semences, en été et automne se tient volontiers sur les fructifications des chardons (d\'ou00f9 son nom) pour en picorer les graines. r<br /><br /><strong>Nidification:</strong> dépose 4-6 u0153ufs dans un nid construit sur un arbre, un arbuste ou une plante grimpante.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird224->pictures()->save($stieglitz_1);
        $bird224->pictures()->save($stieglitz_2);
        $bird224->habitats()->attach($aecker_und_feldflur);
        $bird224->habitats()->attach($siedlungsraum);
        $bird224->family()->associate($fringillidae);
        $bird224->order()->associate($passeri);
        $bird224->plumageColors()->save($schwarz);
        $bird224->plumageColors()->save($weiss);
        $bird224->plumageColors()->save($beige);
        $bird224->plumageColors()->save($braun);
        $bird224->plumageColors()->save($gelb);
        $bird224->plumageColors()->save($rot);
        $bird224->legsColors()->save($braun);
        $bird224->legsColors()->save($rot);
        $bird224->beakColors()->save($schwarz);
        $bird224->beakColors()->save($braun);
        $bird224->beakColors()->save($rot);
        $bird224->beakShapes()->attach($kurz_dick);
        $bird224->sizes()->attach($_spatz);
        $bird224->save();

        $bird225 = Bird::create( [
            'name' => 'Carduelis chloris',
            'name_de' => '',
            'name_fr' => 'Verdier d\'Europe',
            'name_it' => 'Verdone',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> gros fringille avec barre jaune sur les ailes. Le mu00e2le  est vert olive intense, la femelle  est plus grisu00e2tre et a de fines stries sur le dos.<br /><br /><strong>Voix:</strong> le cri est un «dyip» bref et grinu00e7ant, souvent répété en rapides séries. Chant: deux formes différentes, un «djjjiiiiiii» vibrant ou un agréable chant composé de trilles et de sifflements.<br /><br /><strong>Distribution:</strong> toute l&rsquo;année en lisière de forêt, dans les parcs, les jardins aussi au milieu des villes. En hiver, souvent mélangé à d&rsquo;autres fringilles pour picorer les graines dans les jachères. <br /><br /><strong>Nourriture:</strong> semences, graines, baies.<br /><br /><strong>Nidification:</strong> 4-6 jeunes, nid sur un arbre.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird225->pictures()->save($gruenfink_1);
        $bird225->pictures()->save($gruenfink_2);
        $bird225->pictures()->save($gruenfink_3);
        $bird225->habitats()->attach($aecker_und_feldflur);
        $bird225->habitats()->attach($siedlungsraum);
        $bird225->habitats()->attach($wald);
        $bird225->family()->associate($fringillidae);
        $bird225->order()->associate($passeri);
        $bird225->plumageColors()->save($schwarz);
        $bird225->plumageColors()->save($grau);
        $bird225->plumageColors()->save($weiss);
        $bird225->plumageColors()->save($beige);
        $bird225->plumageColors()->save($braun);
        $bird225->plumageColors()->save($gelb);
        $bird225->plumageColors()->save($gruen);
        $bird225->legsColors()->save($braun);
        $bird225->legsColors()->save($rot);
        $bird225->beakColors()->save($schwarz);
        $bird225->beakColors()->save($grau);
        $bird225->beakColors()->save($braun);
        $bird225->beakColors()->save($rosa);
        $bird225->beakShapes()->attach($kurz_dick);
        $bird225->sizes()->attach($_spatz);
        $bird225->sizes()->attach($spatz_amsel);
        $bird225->save();

        $bird226 = Bird::create( [
            'name' => 'Carduelis cannabina',
            'name_de' => '',
            'name_fr' => 'Linotte mélodieuse',
            'name_it' => 'Fanello',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird226->pictures()->save($bluthaenfling_1);
        $bird226->pictures()->save($bluthaenfling_2);
        $bird226->habitats()->attach($aecker_und_feldflur);
        $bird226->habitats()->attach($wiesen_und_weiden);
        $bird226->habitats()->attach($gebirge);
        $bird226->habitats()->attach($siedlungsraum);
        $bird226->family()->associate($fringillidae);
        $bird226->order()->associate($passeri);
        $bird226->plumageColors()->save($schwarz);
        $bird226->plumageColors()->save($grau);
        $bird226->plumageColors()->save($weiss);
        $bird226->plumageColors()->save($beige);
        $bird226->plumageColors()->save($braun);
        $bird226->plumageColors()->save($rot);
        $bird226->plumageColors()->save($rosa);
        $bird226->legsColors()->save($schwarz);
        $bird226->legsColors()->save($braun);
        $bird226->beakColors()->save($schwarz);
        $bird226->beakColors()->save($grau);
        $bird226->beakColors()->save($braun);
        $bird226->beakShapes()->attach($kurz_dick);
        $bird226->sizes()->attach($_spatz);
        $bird226->save();

        $bird227 = Bird::create( [
            'name' => 'Carduelis spinus',
            'name_de' => '',
            'name_fr' => 'Tarin des aulnes',
            'name_it' => 'Lucherino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird227->pictures()->save($erlenzeisig_1);
        $bird227->pictures()->save($erlenzeisig_2);
        $bird227->pictures()->save($erlenzeisig_3);
        $bird227->habitats()->attach($siedlungsraum);
        $bird227->habitats()->attach($wald);
        $bird227->habitats()->attach($gebirge);
        $bird227->family()->associate($fringillidae);
        $bird227->order()->associate($passeri);
        $bird227->plumageColors()->save($schwarz);
        $bird227->plumageColors()->save($weiss);
        $bird227->plumageColors()->save($braun);
        $bird227->plumageColors()->save($gelb);
        $bird227->legsColors()->save($schwarz);
        $bird227->legsColors()->save($braun);
        $bird227->legsColors()->save($rot);
        $bird227->beakColors()->save($schwarz);
        $bird227->beakColors()->save($braun);
        $bird227->beakShapes()->attach($kurz_dick);
        $bird227->sizes()->attach($_spatz);
        $bird227->save();

        $bird228 = Bird::create( [
            'name' => 'Carduelis flammea',
            'name_de' => '',
            'name_fr' => 'Sizerin flammé',
            'name_it' => 'Organetto minore',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird228->pictures()->save($birkenzeisig_1);
        $bird228->pictures()->save($birkenzeisig_2);
        $bird228->habitats()->attach($siedlungsraum);
        $bird228->habitats()->attach($wald);
        $bird228->habitats()->attach($gebirge);
        $bird228->family()->associate($fringillidae);
        $bird228->order()->associate($passeri);
        $bird228->plumageColors()->save($schwarz);
        $bird228->plumageColors()->save($grau);
        $bird228->plumageColors()->save($weiss);
        $bird228->plumageColors()->save($beige);
        $bird228->plumageColors()->save($braun);
        $bird228->plumageColors()->save($rot);
        $bird228->plumageColors()->save($rosa);
        $bird228->legsColors()->save($schwarz);
        $bird228->beakColors()->save($gelb);
        $bird228->beakShapes()->attach($kurz_dick);
        $bird228->sizes()->attach($_spatz);
        $bird228->save();

        $bird229 = Bird::create( [
            'name' => 'Carduelis citrinella',
            'name_de' => '',
            'name_fr' => 'Venturon montagnard',
            'name_it' => 'Venturone alpino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird229->pictures()->save($zitronenzeisig_1);
        $bird229->pictures()->save($zitronenzeisig_2);
        $bird229->habitats()->attach($wald);
        $bird229->habitats()->attach($gebirge);
        $bird229->family()->associate($fringillidae);
        $bird229->order()->associate($passeri);
        $bird229->plumageColors()->save($schwarz);
        $bird229->plumageColors()->save($grau);
        $bird229->plumageColors()->save($braun);
        $bird229->plumageColors()->save($gelb);
        $bird229->plumageColors()->save($gruen);
        $bird229->legsColors()->save($schwarz);
        $bird229->legsColors()->save($braun);
        $bird229->legsColors()->save($rot);
        $bird229->beakColors()->save($grau);
        $bird229->beakShapes()->attach($kurz_dick);
        $bird229->sizes()->attach($_spatz);
        $bird229->save();

        $bird230 = Bird::create( [
            'name' => 'Serinus serinus',
            'name_de' => '',
            'name_fr' => 'Serin cini',
            'name_it' => 'Verzellino',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> petit fringille jaune à stries noires. Se tient volontiers sur la cime des arbres ou sur des lignes électriques. La femelle est un peu plus pu00e2le que le mu00e2le.r<br /><br /><strong>Voix:</strong> chant: babil de sons frémissants, grinu00e7ants, sur un ton uniforme, souvent émis depuis des perchoirs élevés ou en vol. Cri: trille aigu «zir&rsquo;r&rsquo;rl». r<br /><br /><strong>Distribution:</strong> volontiers en zone construite dans les parcs, les jardins, les cimetières. La plupart des serins cinis migrent sur de courtes distances et passent l&rsquo;hiver en région méditerranéenne, rares hivernants chez nous. r<br /><br /><strong>Nourriture:</strong> diverses graines.r<br /><br /><strong>Nidification:</strong> 3-5 u0153ufs, nid dans un arbre ou un buisson.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird230->pictures()->save($girlitz_1);
        $bird230->habitats()->attach($aecker_und_feldflur);
        $bird230->habitats()->attach($siedlungsraum);
        $bird230->habitats()->attach($wald);
        $bird230->family()->associate($fringillidae);
        $bird230->order()->associate($passeri);
        $bird230->plumageColors()->save($grau);
        $bird230->plumageColors()->save($weiss);
        $bird230->plumageColors()->save($gelb);
        $bird230->legsColors()->save($braun);
        $bird230->beakColors()->save($grau);
        $bird230->beakShapes()->attach($kurz_dick);
        $bird230->sizes()->attach($_spatz);
        $bird230->save();

        $bird231 = Bird::create( [
            'name' => 'Loxia curvirostra',
            'name_de' => '',
            'name_fr' => 'Bec-croisé des sapins',
            'name_it' => 'Crociere',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird231->pictures()->save($fichtenkreuzschnabel_1);
        $bird231->pictures()->save($fichtenkreuzschnabel_2);
        $bird231->habitats()->attach($wald);
        $bird231->family()->associate($fringillidae);
        $bird231->order()->associate($passeri);
        $bird231->plumageColors()->save($grau);
        $bird231->plumageColors()->save($braun);
        $bird231->plumageColors()->save($orange);
        $bird231->plumageColors()->save($rot);
        $bird231->plumageColors()->save($gruen);
        $bird231->legsColors()->save($schwarz);
        $bird231->legsColors()->save($braun);
        $bird231->beakColors()->save($schwarz);
        $bird231->beakColors()->save($grau);
        $bird231->beakShapes()->attach($kurz_hakenfoermig);
        $bird231->beakShapes()->attach($kurz_dick);
        $bird231->sizes()->attach($spatz_amsel);
        $bird231->save();

        $bird232 = Bird::create( [
            'name' => 'Pyrrhula pyrrhula',
            'name_de' => '',
            'name_fr' => 'Bouvreuil pivoine',
            'name_it' => 'Ciuffolotto',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '<strong>Caractéristiques:</strong> mu00e2le  avec ventre rose-rouge vif, femelle  ventre beige-brun. En vol, croupion blanc bien visible. Oiseau discret se tenant dans le haut des arbres. r<br /><br /><strong>Voix:</strong> cri mélancolique, flu00fbté «pyu». Chant bas, doux et flu00fbté avec sons à demi étouffés, grinu00e7ants, ru00e2peux.r<br /><br /><strong>Distribution:</strong> vit toute l&rsquo;année dans les forêts mixtes, les parcs et les grands jardins.r<br /><br /><strong>Nourriture:</strong> son bec court au bord acéré lui sert à saisir des graines et des bourgeons. Fréquente parfois les mangeoires en hiver.r<br /><br /><strong>Nidification:</strong> nid sur un arbre ou un arbuste, 4-6 u0153ufs.',
            'description_it' => '',
            'garden' => true,
        ] );

        $bird232->pictures()->save($gimpel_1);
        $bird232->pictures()->save($gimpel_2);
        $bird232->habitats()->attach($aecker_und_feldflur);
        $bird232->habitats()->attach($siedlungsraum);
        $bird232->habitats()->attach($wald);
        $bird232->family()->associate($fringillidae);
        $bird232->order()->associate($passeri);
        $bird232->plumageColors()->save($schwarz);
        $bird232->plumageColors()->save($grau);
        $bird232->plumageColors()->save($weiss);
        $bird232->plumageColors()->save($beige);
        $bird232->plumageColors()->save($braun);
        $bird232->plumageColors()->save($orange);
        $bird232->plumageColors()->save($rot);
        $bird232->plumageColors()->save($rosa);
        $bird232->legsColors()->save($schwarz);
        $bird232->legsColors()->save($braun);
        $bird232->beakColors()->save($schwarz);
        $bird232->beakShapes()->attach($kurz_dick);
        $bird232->sizes()->attach($spatz_amsel);
        $bird232->save();

        $bird233 = Bird::create( [
            'name' => 'Carpodacus erythrinus',
            'name_de' => '',
            'name_fr' => 'Roselin cramoisi',
            'name_it' => 'Ciuffolotto scarlatto',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird233->pictures()->save($karmingimpel_1);
        $bird233->habitats()->attach($aecker_und_feldflur);
        $bird233->habitats()->attach($gewaesser);
        $bird233->family()->associate($fringillidae);
        $bird233->order()->associate($passeri);
        $bird233->plumageColors()->save($grau);
        $bird233->plumageColors()->save($beige);
        $bird233->plumageColors()->save($braun);
        $bird233->plumageColors()->save($rot);
        $bird233->legsColors()->save($schwarz);
        $bird233->legsColors()->save($braun);
        $bird233->beakColors()->save($grau);
        $bird233->beakColors()->save($braun);
        $bird233->beakShapes()->attach($kurz_dick);
        $bird233->sizes()->attach($_spatz);
        $bird233->save();

        $bird234 = Bird::create( [
            'name' => 'Coccothraustes coccothraustes',
            'name_de' => '',
            'name_fr' => 'Grosbec casse-noyaux',
            'name_it' => 'Frosone',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird234->pictures()->save($kernbeisser_1);
        $bird234->habitats()->attach($wald);
        $bird234->family()->associate($fringillidae);
        $bird234->order()->associate($passeri);
        $bird234->plumageColors()->save($schwarz);
        $bird234->plumageColors()->save($grau);
        $bird234->plumageColors()->save($weiss);
        $bird234->plumageColors()->save($beige);
        $bird234->plumageColors()->save($braun);
        $bird234->plumageColors()->save($orange);
        $bird234->plumageColors()->save($blau);
        $bird234->legsColors()->save($braun);
        $bird234->legsColors()->save($rot);
        $bird234->beakColors()->save($schwarz);
        $bird234->beakColors()->save($grau);
        $bird234->beakColors()->save($braun);
        $bird234->beakColors()->save($blau);
        $bird234->beakShapes()->attach($kurz_dick);
        $bird234->sizes()->attach($spatz_amsel);
        $bird234->save();

        $bird235 = Bird::create( [
            'name' => 'Emberiza schoeniclus',
            'name_de' => '',
            'name_fr' => 'Bruant des roseaux',
            'name_it' => 'Migliarino di palude',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird235->pictures()->save($rohrammer_1);
        $bird235->pictures()->save($rohrammer_2);
        $bird235->habitats()->attach($aecker_und_feldflur);
        $bird235->habitats()->attach($wiesen_und_weiden);
        $bird235->habitats()->attach($gewaesser);
        $bird235->family()->associate($emberizidae);
        $bird235->order()->associate($passeri);
        $bird235->plumageColors()->save($schwarz);
        $bird235->plumageColors()->save($grau);
        $bird235->plumageColors()->save($weiss);
        $bird235->plumageColors()->save($beige);
        $bird235->plumageColors()->save($braun);
        $bird235->legsColors()->save($braun);
        $bird235->legsColors()->save($rot);
        $bird235->beakColors()->save($schwarz);
        $bird235->beakShapes()->attach($kurz_dick);
        $bird235->sizes()->attach($_spatz);
        $bird235->sizes()->attach($spatz_amsel);
        $bird235->save();

        $bird236 = Bird::create( [
            'name' => 'Emberiza hortulana',
            'name_de' => '',
            'name_fr' => 'Bruant ortolan',
            'name_it' => 'Ortolano',
            'gender_de' => 'M',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird236->pictures()->save($ortolan_1);
        $bird236->habitats()->attach($aecker_und_feldflur);
        $bird236->habitats()->attach($wiesen_und_weiden);
        $bird236->family()->associate($emberizidae);
        $bird236->order()->associate($passeri);
        $bird236->plumageColors()->save($grau);
        $bird236->plumageColors()->save($braun);
        $bird236->plumageColors()->save($orange);
        $bird236->plumageColors()->save($gelb);
        $bird236->legsColors()->save($rot);
        $bird236->beakColors()->save($rosa);
        $bird236->beakShapes()->attach($kurz_dick);
        $bird236->sizes()->attach($_spatz);
        $bird236->sizes()->attach($spatz_amsel);
        $bird236->save();

        $bird237 = Bird::create( [
            'name' => 'Emberiza citrinella',
            'name_de' => '',
            'name_fr' => 'Bruant jaune',
            'name_it' => 'Zigolo giallo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird237->pictures()->save($goldammer_1);
        $bird237->pictures()->save($goldammer_2);
        $bird237->habitats()->attach($aecker_und_feldflur);
        $bird237->habitats()->attach($wiesen_und_weiden);
        $bird237->family()->associate($emberizidae);
        $bird237->order()->associate($passeri);
        $bird237->plumageColors()->save($schwarz);
        $bird237->plumageColors()->save($beige);
        $bird237->plumageColors()->save($braun);
        $bird237->plumageColors()->save($gelb);
        $bird237->legsColors()->save($braun);
        $bird237->legsColors()->save($rot);
        $bird237->beakColors()->save($schwarz);
        $bird237->beakColors()->save($grau);
        $bird237->beakColors()->save($braun);
        $bird237->beakShapes()->attach($kurz_dick);
        $bird237->sizes()->attach($_spatz);
        $bird237->sizes()->attach($spatz_amsel);
        $bird237->save();

        $bird238 = Bird::create( [
            'name' => 'Emberiza cirlus',
            'name_de' => '',
            'name_fr' => 'Bruant zizi',
            'name_it' => 'Zigolo nero',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird238->habitats()->attach($aecker_und_feldflur);
        $bird238->family()->associate($emberizidae);
        $bird238->order()->associate($passeri);
        $bird238->plumageColors()->save($schwarz);
        $bird238->plumageColors()->save($grau);
        $bird238->plumageColors()->save($beige);
        $bird238->plumageColors()->save($braun);
        $bird238->plumageColors()->save($gelb);
        $bird238->legsColors()->save($rot);
        $bird238->beakColors()->save($schwarz);
        $bird238->beakColors()->save($grau);
        $bird238->beakShapes()->attach($kurz_dick);
        $bird238->sizes()->attach($_spatz);
        $bird238->sizes()->attach($spatz_amsel);
        $bird238->save();

        $bird239 = Bird::create( [
            'name' => 'Emberiza calandra',
            'name_de' => '',
            'name_fr' => 'Bruant proyer',
            'name_it' => 'Strillozzo',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird239->pictures()->save($grauammer_1);
        $bird239->pictures()->save($grauammer_2);
        $bird239->habitats()->attach($aecker_und_feldflur);
        $bird239->habitats()->attach($wiesen_und_weiden);
        $bird239->family()->associate($emberizidae);
        $bird239->order()->associate($passeri);
        $bird239->plumageColors()->save($beige);
        $bird239->plumageColors()->save($braun);
        $bird239->legsColors()->save($braun);
        $bird239->legsColors()->save($rot);
        $bird239->beakColors()->save($schwarz);
        $bird239->beakColors()->save($braun);
        $bird239->beakShapes()->attach($kurz_dick);
        $bird239->sizes()->attach($_spatz);
        $bird239->sizes()->attach($spatz_amsel);
        $bird239->save();

        $bird240 = Bird::create( [
            'name' => 'Emberiza cia',
            'name_de' => '',
            'name_fr' => 'Bruant fou',
            'name_it' => 'Zigolo muciatto',
            'gender_de' => 'W',
            'description_de' => '',
            'description_fr' => '',
            'description_it' => '',
            'garden' => false,
        ] );

        $bird240->pictures()->save($zippammer_1);
        $bird240->habitats()->attach($aecker_und_feldflur);
        $bird240->habitats()->attach($wiesen_und_weiden);
        $bird240->habitats()->attach($gebirge);
        $bird240->family()->associate($emberizidae);
        $bird240->order()->associate($passeri);
        $bird240->plumageColors()->save($schwarz);
        $bird240->plumageColors()->save($grau);
        $bird240->plumageColors()->save($beige);
        $bird240->plumageColors()->save($braun);
        $bird240->plumageColors()->save($orange);
        $bird240->legsColors()->save($braun);
        $bird240->legsColors()->save($rot);
        $bird240->beakColors()->save($schwarz);
        $bird240->beakColors()->save($grau);
        $bird240->beakShapes()->attach($kurz_dick);
        $bird240->sizes()->attach($_spatz);
        $bird240->sizes()->attach($spatz_amsel);
        $bird240->save();
        //</editor-fold>
    }
}
