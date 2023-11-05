<?php

include 'view/header.php';




// Assume you have a database connection established
include './connect_db.php';

// Breadcrumb


// Kiểm tra xem có tham số product_id được truyền vào không
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Retrieve product details from the database based on the passed product_id
    $sql = "SELECT * FROM product WHERE ID = $product_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        // Lấy tất cả các giá trị size từ bảng Size
        $sqlSizes = "SELECT * FROM sizes";
        $resultSizes = mysqli_query($conn, $sqlSizes);
        $sizes = [];
        if (mysqli_num_rows($resultSizes) > 0) {
            while ($row = mysqli_fetch_assoc($resultSizes)) {
                $sizes[] = $row['SizeName'];
            }
        }

        // Lấy tất cả các giá trị color từ bảng Color
        $sqlColors = "SELECT * FROM colors";
        $resultColors = mysqli_query($conn, $sqlColors);
        $colors = [];
        if (mysqli_num_rows($resultColors) > 0) {
            while ($row = mysqli_fetch_assoc($resultColors)) {
                $colors[] = $row['ColorName'];
            }
        }
?>
        <!-- Product detail -->
        <div class="container-fluid pb-5">
            <div class="row px-xl-5">
                <div class="col-lg-5 mb-30">
                    <div class="product-detail-img row">
                        <img class="product-detail-img__represent h-100 w-100" src="uploads/<?php echo $product['Image']; ?>" alt="">
                        <!-- Additional product images can be added here -->
                    </div>
                </div>
                <div class="col-lg-7 mb-30">
                    <h3 class="text-dark"><?php echo $product['Name']; ?></h3>
                    <div class="d-flex mb-3">
                        <!-- Display star rating and reviews count -->
                    </div>
                    <h3 class="text-dark mb-4">$<?php echo $product['Price']; ?></h3>


                    <div class="d-flex mb-3">
                        <strong class="text-dark me-3">Sizes:</strong>
                        <?php
                        foreach ($sizes as $size) {
                            echo '<label class="badge bg-primary me-2">
            <input type="radio" name="size" value="' . $size . '">' . $size . '
        </label>';
                        }
                        ?>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark me-3">Colors:</strong>
                        <?php
                        foreach ($colors as $color) {
                            echo '<label class="badge bg-primary me-2">
            <input type="radio" name="color" value="' . $color . '">' . $color . '
        </label>';
                        }
                        ?>
                    </div>
                    <!-- Add to cart functionality with quantity input -->
                    <div class="d-flex mb-4 pt-2">
                        <div class="input-group product-quantity me-3">
                            <button class="btn btn-square btn-primary rounded-0" onclick="decreaseValue()">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" id="quantityInput" class="form-control shadow-none rounded-0" value="1">
                            <button class="btn btn-square btn-primary rounded-0" onclick="increaseValue()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <button class="btn btn-primary rounded-0 px-3">
                            <i class="fas fa-shopping-cart"></i>
                            Add To Cart
                        </button>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark me-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a href="#" class="text-dark px-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark px-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark px-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark px-2"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                </div>

                <div class="row px-xl-5">
                    <div class="product-detail bg-light h-100">
                        <p class="text-dark mb-4"><?php echo $product['Description']; ?></p>

                    </div>
                </div>

            </div>
        </div>
        <!-- Display product description and reviews tabs here -->

<?php }
} else {
    echo "Product not found.";
}

// Close the database connection
mysqli_close($conn);


include 'view/footer.php';

?>