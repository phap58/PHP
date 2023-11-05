  <!-- Banner -->
  <div class="container-fluid">
      <div class="row px-xl-5">
          <div class="col-xl-8">
              <div id="carouselIndicators" class="carousel slide carousel-fade mb-30 mb-xl-0" data-ride="carousel">
                  <div class="carousel-indicators">
                      <?php
                        // Kết nối đến cơ sở dữ liệu MySQL
                        include './connect_db.php';

                        // Truy vấn dữ liệu từ bảng Slider
                        $sql = "SELECT * FROM slider WHERE Status = 1 ORDER BY Orders ASC";
                        $result = mysqli_query($conn, $sql);

                        $active = true;

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<a role="button" data-bs-target="#carouselIndicators" data-bs-slide-to="' . $row['Orders'] . '" class="' . ($active ? 'active' : '') . '" aria-current="true" aria-label="' . $row['Name'] . '"></a>';
                            $active = false;
                        }
                        ?>
                  </div>
                  <div class="banner-left carousel-inner">
                      <?php
                        // Truy vấn dữ liệu từ bảng Slider
                        $result = mysqli_query($conn, $sql);

                        $active = true;

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="banner-left-item carousel-item ' . ($active ? 'active' : '') . '">';
                            echo '<img class="banner-left-item__img w-100 h-100" src="uploads/images/sliders/' . $row['Image'] . '" alt="' . $row['Name'] . '">';
                            echo '<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">';
                            echo '<div class="banner-left-content">';
                            echo '<h1 class="display-4 mb-3 animate__animated animate__fadeInDown">' . $row['Name'] . '</h1>';
                            // echo '<p class="mx-md-5 px-5 animate__animated animate__bounceIn">' . $row['Description'] . '</p>';
                            echo '<a href="' . $row['Url'] . '" class="btn btn-outline-light rounded-0 py-2 px-4 mt-3 animate__animated animate__fadeInUp">Shop Now</a>';
                            echo '</div></div></div>';
                            $active = false;
                        }

                        // Đóng kết nối đến cơ sở dữ liệu
                        mysqli_close($conn);
                        ?>
                  </div>
              </div>
          </div>

          <div class="col-xl-4">
              <div class="product-offer mb-30">
                  <img class="img-fluid" src="./assets/img/banner-right-1.jpg" alt="">
                  <div class="offer-text">
                      <h6 class="text-white text-uppercase">Save 20%</h6>
                      <h3 class="text-white mb-3">Special Offer</h3>
                      <a href="#" class="btn btn-primary shadow-none rounded-0">Shop Now</a>
                  </div>
              </div>
              <div class="product-offer mb-30">
                  <img class="img-fluid" src="./assets/img/banner-right-2.jpg" alt="">
                  <div class="offer-text">
                      <h6 class="text-white text-uppercase">Save 20%</h6>
                      <h3 class="text-white mb-3">Special Offer</h3>
                      <a href="#" class="btn btn-primary shadow-none rounded-0">Shop Now</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid pt-5">
      <div class="row px-xl-5 pb-3">
          <div class="col-lg-3 col-md-6 col-12 service">
              <div class="service__item bg-light">
                  <h1 class="fa fa-check text-primary"></h1>
                  <h5>Quality Product</h5>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 service">
              <div class="service__item bg-light">
                  <h1 class="fa fa-shipping-fast text-primary"></h1>
                  <h5>Free Shipping</h5>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 service">
              <div class="service__item bg-light">
                  <h1 class="fas fa-exchange-alt text-primary"></h1>
                  <h5>14-Day Return</h5>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 service">
              <div class="service__item bg-light">
                  <h1 class="fa fa-phone-volume text-primary"></h1>
                  <h5>24/7 Support</h5>
              </div>
          </div>
      </div>
  </div>