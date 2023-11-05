<?php

include './connect_db.php';
include 'view/search.php';

include 'view/phantrang.php';
?>

<div class="container-fluid pt-5 pb-3">
    <h2 class="title position-relative text-dark text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pe-3"><?php echo $category_name; ?></span>
    </h2>
    <div class="row px-xl-5">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product_id = $row['ID']; // Assuming 'ID' is the product's unique identifier

        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img">
                            <a href="1chitetsanpham.php?product_id=<?php echo $product_id; ?>"> <!-- Add this link -->
                                <img class="w-100" src="uploads/<?php echo $row['Image']; ?>" alt="Product Image">
                            </a>
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square rounded-0" href="#"><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square rounded-0" href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4 product-info">
                            <a class="product-info__name" href="1chitetsanpham.php?product_id=<?php echo $product_id; ?>"> <!-- Add this link -->
                                <?php echo $row["Name"]; ?>
                            </a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5><?php echo $row["Price"]; ?></h5>
                                <!-- <h6 class="text-muted ms-2 text-decoration-line-through"><?php echo $row["GiaNhap"]; ?></h6> -->
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary me-1"></small>
                                <small class="fa fa-star text-primary me-1"></small>
                                <small class="fa fa-star text-primary me-1"></small>
                                <small class="fa fa-star text-primary me-1"></small>
                                <small class="fa fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No products found. 😔";
        }

        ?>
    </div>
</div>

<div class="container">
    <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>
    </ul>
</div>