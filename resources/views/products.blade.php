<?php

$starImage = asset('storage/images/products/—Pngtree—vector complex star icon_4183954.png');
$starElement = html_entity_decode(str_repeat("<img alt=\"star\" src=\"$starImage\" width=\"15px\">", 5));

$bestForYourPetCardParameter = [
    [
        'product_image' => asset('storage/images/products/jamie-street-NxCUU0lujD8-unsplash.jpg'),
        'product_name' => 'Pet Nametag',
        'product_price' => '25',
        'product_description' => 'Name tag make you easier to recognize your pet.',
    ],
    [
        'product_image' => asset('storage/images/products/istockphoto-1368381255-612x612.jpg'),
        'product_name' => 'Food Dispenser',
        'product_price' => '5',
        'product_description' => 'Food dispenser enchance your pets appetite.',
    ],
    [
        'product_image' => asset('storage/images/products/istockphoto-1301672947-612x612.jpg'),
        'product_name' => 'Cat Sweater',
        'product_price' => '10',
        'product_description' => 'Cat sweater make your cat stay warm. Also make your cat confident.',
    ],
    [
        'product_image' => asset('storage/images/products/istockphoto-959094540-612x612.jpg'),
        'product_name' => 'Cat Litterbox',
        'product_price' => '15',
        'product_description' => 'Keep your cat hygiene. Let\'s buy some for your cat.',
    ],
];

$bestForYourPetCardTemplate = function ($parameter) use ($starElement) {
    return sprintf('
            <div class="best-product-card">
                <div class="best-product-card-information">
                    <img alt="%s" src="%s">
                    <div class="card-body">
                        <p class="card-title">%s</p>
                        <div class="star-container">%s</div>
                        <p class="card-price">$ • %s</p>
                        <p class="card-text">%s</p>
                        <a class="btn"  href="cart">ADD TO CART</a>
                    </div>
                </div>
            </div>',
        $parameter['product_name'], $parameter['product_image'], $parameter['product_name'], $starElement,
        $parameter['product_price'], $parameter['product_description']
    );
};

$oursFavouriteCardParameter = [
    [
        'product_image' => asset('storage/images/products/jamie-street-NxCUU0lujD8-unsplash.jpg'),
        'product_name' => 'Pet Nametag',
        'product_description' => 'Name tag make you easier to recognize your pet.',
    ],
    [
        'product_image' => asset('storage/images/products/istockphoto-1301672947-612x612.jpg'),
        'product_name' => 'Cat Sweater',
        'product_description' => 'Cat sweater make your cat stay warm. Also make your cat confident.',
    ],
    [
        'product_image' => asset('storage/images/products/istockphoto-959094540-612x612.jpg'),
        'product_name' => 'Cat Litterbox',
        'product_description' => 'Keep your cat hygiene. Let\'s buy some for your cat.',
    ],
];

$oursFavouriteCardTemplate = function ($parameter) {
    return sprintf('
                <div class="our-favourite-card">
                    <img alt="%s" height="211px" src="%s" width="288px">
                    <div class="card-body">
                        <p class="card-title">%s</p>
                        <p class="card-text">%s</p>
                    </div>
                </div>',
        $parameter['product_name'], $parameter['product_image'], $parameter['product_name'], $parameter['product_description']);
};

$petFoodCardParameter = [
    [
        'product_image' => asset('storage/images/products/whiskas-removebg-preview 1.png'),
        'product_name' => 'Whiskas',
        'product_description' => 'Delight your cat with the delicious meaty taste of WHISKAS. We have a whole rage that taste great and contain all of the nutrients, vitamin, etc',
        'product_price' => '100',
    ],
    [
        'product_image' => asset('storage/images/products/Rectangle 39.png'),
        'product_name' => 'Pedigree Chicken',
        'product_description' => 'Pedigree Chicken, Egg and Milk Flavour Puppy Dry Food',
        'product_price' => '35',
    ],
    [
        'product_image' => asset('storage/images/products/makanan bburung-removebg-preview 1.png'),
        'product_name' => 'Nature Plan',
        'product_description' => 'Nature Plan uses Anavarza branded real honey powder specially produced by Sezen Gıda in its products.',
        'product_price' => '64',
    ],
    [
        'product_image' => asset('storage/images/products/Rectangle 41.png'),
        'product_name' => 'Wagg Bunny',
        'product_description' => 'Wagg Bunny is a balanced formulation packed full of ingredients. We have included vitamin E to
                        help support a healthy immune system and calcium & vitamin D for strong teeth and bones.',
        'product_price' => '85',
    ],
];

$petFoodCardTemplate = function ($parameter) {
    return sprintf('
                <div class="pet-food-card">
                    <div class="image-wrapper" style="background: rgba(176, 36, 133, 0.15);">
                        <img alt="%s" src="%s" width="150px">
                    </div>
                    <p>%s</p>
                    <p>$ • %s</p>
                </div>',
        $parameter['product_name'], $parameter['product_image'], $parameter['product_description'], $parameter['product_price']);
};

$sectionParameter = [
    [
        'template' => $bestForYourPetCardTemplate,
        'parameter' => $bestForYourPetCardParameter,
        'title' => 'Best for your pet',
        'section_class_name' => 'best-product-card-container',
    ],
    [
        'template' => $oursFavouriteCardTemplate,
        'parameter' => $oursFavouriteCardParameter,
        'title' => 'Our\'s Favourite',
        'section_class_name' => 'our-favourite-card-container',
    ],
    [
        'template' => $petFoodCardTemplate,
        'parameter' => $petFoodCardParameter,
        'title' => 'Pet Food',
        'section_class_name' => 'pet-food-container',
    ],
];

$sectionRenderer = function (callable $template, array $parameter, $title, $sectionClassName) {
    $sectionChild = '';
    foreach ($parameter as $item) {
        $sectionChild .= $template($item);
    }

    return sprintf('
        <h2>%s</h2>
        <div class="%s">%s</div>',
        $title, $sectionClassName, $sectionChild);
};
?>
<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Blieblue - About Us</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}"/>
    <script async src="{{asset('storage/library/bootstrap.min.js')}}"></script>
</head>

<body>
<!-- Header loaded from assets/parts/header.html -->
<header>
    {{view('parts.header')}}
</header>
<main>
    <div class="container-fluid product-banner">
        <p>PRODUCTS</p>
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="best-product">
        <?php foreach ($sectionParameter as $parameter):
            echo $sectionRenderer(
                $parameter['template'],
                $parameter['parameter'],
                $parameter['title'],
                $parameter['section_class_name'],
            );
        endforeach; ?>
    </div>
</main>
<footer>
    {{view('parts.footer')}}
</footer>
</body>
