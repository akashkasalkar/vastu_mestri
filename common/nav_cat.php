<?php
include_once('./dbconn.php');
include_once('./function/controller.php');

$query = 'SELECT * FROM `category`';
$menus = [];

$categoryQuery = "SELECT category_id, name FROM category";
$categoryResult = getQueryResult($con, $categoryQuery);

foreach ($categoryResult as $row) {
    $category_id = $row['category_id'];
    $category_name = $row['name'];

    $menus[$category_id]['category'] = $category_name;
    $menus[$category_id]['brands'] = [];

    $brandsQuery = "SELECT brand.brand_id, brand_name, name as subcategory_name , id as subcategory_id
                FROM brand 
                JOIN sub_category ON brand.brand_id = sub_category.fk_brand_id AND brand.fk_category_id = '$category_id'
                ORDER BY brand.brand_id, sub_category.id";

    $brandResult = getQueryResult($con, $brandsQuery);

    foreach ($brandResult as $b_row) {
        $brand_id = $b_row['brand_id'];
        $brand_name = $b_row['brand_name'];
        $subcategory_name = $b_row['subcategory_name'];
        $subcategory_id = $b_row['subcategory_id'];
        $menus[$category_id]['brands'][$brand_name][$subcategory_id] = $subcategory_name;
    }
}
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
                                <?php foreach ($subCategories as $subCategory_id => $subCategory) : ?>
                                    <li><a class="dropdown-item" href="shop.php?sub_cat_id=<?php echo $subCategory_id?>&name=<?php echo $subCategory?>"><?php echo $subCategory; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach; ?>