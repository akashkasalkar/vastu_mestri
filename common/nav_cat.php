<?php
// Define the dynamic menu data
include_once('./dbconn.php');
include_once('./function/controller.php');

// category query
$query = 'SELECT * FROM `category`';
$menus = [];

$result = getQueryResult($con, $query);
foreach ($result as $row) {
    // brand query
    $cat_id = $row["category_id"];
    $brand_query = "SELECT * FROM category c,brand b WHERE c.category_id=b.fk_category_id AND b.fk_category_id='$cat_id'";
    $brand_result = getQueryResult($con, $brand_query);
    $cat_name = $row['name'];
    $brand_arr = [];
    foreach ($brand_result as $brand_row) {
        $brand_name = $brand_row['brand_name'];
        $brand_id = $brand_row['brand_id'];

        $sub_cat_query = "SELECT * FROM brand b,sub_category sc WHERE b.brand_id=sc.fk_brand_id AND sc.fk_brand_id='$brand_id'";
        $sub_cat_result = getQueryResult($con, $sub_cat_query);

        $sub_cat_arr = [];
        foreach ($sub_cat_result as $sub_cat_row) {

        }
        // array_push($brand_arr,[
        //     $brand_name => ['Sub-category 1', 'Sub-category 2'],
        // ]);
    }
    foreach ($brand_arr as $b_row) {
    }
    array_push($menus, [
        'category' => $cat_name,
        'brands' => [
            'Brand 1' => ['Sub-category 1', 'Sub-category 2'],
        ]
    ]);

    // echo $row['column_name'] . "<br>";
}
// $menus = [
//     [
//         'category' => 'Category 1',
//         'brands' => [
//             'Brand 1' => ['Sub-category 1', 'Sub-category 2'],
//             'Brand 2' => ['Sub-category 3', 'Sub-category 4'],
//         ],
//     ],
//     [
//         'category' => 'Category 2',
//         'brands' => [
//             'Brand 3' => ['Sub-category 5', 'Sub-category 6'],
//             'Brand 4' => ['Sub-category 7', 'Sub-category 8'],
//         ],
//     ],
// ];
?>

<?php foreach ($menus as $menu) : ?>
    <div class="container">
        <div class="row">
            <div class="dropdown nav-link">
                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $menu['category']; ?>
                </a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <?php foreach ($menu['brands'] as $brand => $subCategories) : ?>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#"><?php echo $brand; ?></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($subCategories as $subCategory) : ?>
                                    <li><a class="dropdown-item" href="shop.php?sub_cat_id=1"><?php echo $subCategory; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach; ?>