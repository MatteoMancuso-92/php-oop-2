<?php 

    include __DIR__. '/Models/Products.php';
    include __DIR__. '/Models/InfoFood.php';
    include __DIR__. '/Models/InfoObject.php';
    include __DIR__. '/Models/InfoPlay.php';

    // FOOD 

    $InfoFood_1 = new InfoFood('./img/product_base.jpg', 'Royal Canin Mini Adult', '43,99€', 'Cane', '545g', 'prosciutto, riso');
    $InfoFood_2 = new InfoFood('./img/product_base 2.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '44,99€', 'Cane', '600g', 'manzo, cereali');
    $InfoFood_3 = new InfoFood('./img/product_base 3.jpg', 'Almo Nature Cat Daily Lattina', '34,99€', 'Gatto', '400g', 'tonno, pollo, prosciutto');
    $InfoFood_4 = new InfoFood('./img/product_base 4.jpg', 'Mangime Per Pesci Guppy in Fiocchi', '2,95€', 'Pesce', '30g', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

    $InfoFoodArray = [$InfoFood_1, $InfoFood_2, $InfoFood_3, $InfoFood_4];

    // OBJECT

    $InfoObject_1 = new InfoObject('./img/product_base 5.jpg', 'Voliera Wilma in Legno', '184,99€', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
    $InfoObject_2 = new InfoObject('./img/product_base 6.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', '2,29€', 'Pesce', 'Materiale espanso', 'ND');

    $InfoObjectArray = [$InfoObject_1, $InfoObject_2];

    // PLAY

    $InfoPlay_1 = new InfoPlay('./img/product_base 7.jpg', 'Kong Classic', '13,49€', 'Cane', 'Galleggia e Rimbalza', '8,5 x 10cm');
    $InfoPlay_2 = new InfoPlay('./img/product_base 8.jpg', 'Topini di peluche Trixie', '4,99€', 'Gatto', 'Morbido con codina in corda', '8,5 x 10cm');

    $InfoPlayArray = [$InfoPlay_1, $InfoPlay_2];

    function addIcon($razza)
    {
        switch ($razza) {
            case 'Cane':
                return '<i class="fa-solid fa-dog"></i>';
                break;
            case 'Gatto':
                return '<i class="fa-solid fa-cat"></i>';
                break;
            case 'Pesce';
                return '<i class="fa-solid fa-fish-fins"></i>';
                break;
            default:
                return '<i class="fa-solid fa-kivi"></i>';
                break;     
        }
    }
?>

