<?php
include './connect_db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Shop</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <!-- Bootstrap -->
    <link href="./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animate -->
    <link rel="stylesheet" href="./assets/css/animate.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <!-- Header top -->
    <div class="header__top container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="header-top-left__item d-flex align-items-center h-100">
                    <a href="#" class="header-top-left__link">Giới thiệu</a>
                    <a href="#" class="header-top-left__link">Liên hệ</a>
                    <a href="#" class="header-top-left__link">Trợ giúp</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">

                <div class="d-inline-flex dropdown">

                    <button type="button" class="btn btn-sm btn-light dropdown-toggle rounded-0 shadow-none" id="userDropDownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo $_SESSION['username']; // Hiển thị tên người dùng nếu đã đăng nhập
                        } else {
                            echo 'Guest'; // Hiển thị 'Guest' nếu chưa đăng nhập
                        }
                        ?>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end rounded-0" aria-labelledby="userDropDownMenu">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <button type="button" class="dropdown-item">Tài khoản của tôi</button>
                            <button type="button" class="dropdown-item">Đơn mua</button>
                            <form method="post" action="/cntt6-k61/btlweb/productuser/DANGNHAP_DANGKY_DOIMATKHAU/logout.php">

                                <button type="submit" name="logout" class="dropdown-item">Đăng xuất</button>
                            </form>
                        <?php } else { ?>
                            <a class="dropdown-item" href="/CNTT6-K61/BTLWEB/productuser/DANGNHAP_DANGKY_DOIMATKHAU/login_register.php">Login_Register</a>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="d-inline-flex d-lg-none">
                <a href="#" class="ms-2 d-flex align-items-center">
                    <i class="fas fa-heart text-dark me-1"></i>
                    <span class="navbar-action-item__quantity text-dark border border-dark rounded-circle d-block">0</span>
                </a>
                <a href="#" class="ms-2 d-flex align-items-center">
                    <i class="fas fa-shopping-cart text-dark me-1"></i>
                    <span class="navbar-action-item__quantity text-dark border border-dark rounded-circle d-block">0</span>
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- Header mid -->
    <div class="header__mid container-fluid">
        <div class="row bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-4">
                <a href="./indexproduct.php" class="logo">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2">Shop</span>
                </a>
            </div>
            <div class="col-4">
                <form class="input-group" method="post" action='indexproduct.php'>
                    <input type="text" name="search_query" class="form-control shadow-none rounded-0" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit" name="search" class="header-search__btn btn shadow-none rounded-0">
                        <i class="fas fa-search"></i>
                    </button>
                </form>



            </div>
            <div class="col-4">
                <div class="header-mid__contact text-end">
                    <p>Dịch Vụ Khách Hàng</p>
                    <h5>+84 96 783 1727</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Header bottom -->
    <div class="header__bottom container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-3 position-relative d-none d-lg-block">
                <a class="navbar-category-wrap btn d-flex justify-content-between align-items-center bg-primary" data-bs-toggle="collapse" data-bs-target="#collapseNavbar" aria-expanded="false" aria-controls="collapseNavbar">
                    <h6>
                        <i class="fas fa-bars me-2"></i>
                        Danh mục
                    </h6>
                    <i class="fas fa-angle-down"></i>
                </a>
                <nav class="navbar-category navbar-light bg-light position-absolute collapse" id="collapseNavbar">
                    <div class="navbar-nav w-100">
                        <?php
                      

                        $sql_categories = "SELECT * FROM category WHERE ParentID=0 ORDER BY ID ASC";
                        $result_categories = $conn->query($sql_categories);

                        if ($result_categories->num_rows > 0) {
                            while ($row = $result_categories->fetch_assoc()) {
                                echo '<div class="nav-item dropend">';
                                echo '<a href="indexproduct.php?categoryId=' . $row["ID"] . '" class="dropend-toggle nav-link d-flex align-items-center justify-content-between w-100" data-bs-toggle="dropdown" aria-expanded="false">';
                                echo $row["Name"];
                                echo '<i class="fas fa-angle-right"></i>';
                                echo '</a>';
                                echo '<div class="dropdown-menu rounded-0 border-0">';

                                // Truy vấn danh mục con từ danh mục cha
                                $categoryId = $row["ID"];
                                $sql_child_categories = "SELECT * FROM category WHERE ParentID = $categoryId";
                                $result_child_categories = $conn->query($sql_child_categories);

                                if ($result_child_categories->num_rows > 0) {
                                    while ($child_row = $result_child_categories->fetch_assoc()) {
                                        echo '<a class="dropdown-item" href="indexproduct.php?categoryId=' . $child_row["ID"] . '">' . $child_row["Name"] . '</a>';
                                    }
                                } else {
                                    echo '<a class="dropdown-item" href="?categoryId=' . $row["ID"] . '">No child categories found.</a>';
                                }

                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "No categories found.";
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                </nav>

            </div>


            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 py-lg-0 h-100">
                    <a href="./indexproduct.php" class="logo d-md-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2">Shop</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-list collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="./indexproduct.php" class="nav-list_link py-1 nav-link active">Trang chủ</a>
                            <a href="#" class="nav-list_link py-1 nav-link">Bài viết</a>
                            <a href="#" class="nav-list_link py-1 nav-link">Liên hệ</a>
                        </div>
                        <div class="navbar-action navbar-nav d-none d-lg-flex">
                            <a href="#" class="navbar-action__item me-3 d-flex align-items-center">
                                <i class="fas fa-heart text-primary me-1"></i>
                                <span class="navbar-action-item__quantity text-light border border-secondary rounded-circle d-block">0</span>
                            </a>
                            <a href="#" class="navbar-action__item d-flex align-items-center">
                                <i class="fas fa-shopping-cart text-primary me-1"></i>
                                <span class="navbar-action-item__quantity text-light border border-secondary rounded-circle d-block">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>