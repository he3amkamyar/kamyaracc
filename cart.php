<!DOCTYPE html html>
<html lang="fa" dir="rtl">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کامیار اکانت</title>
    <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.rtl.css"/>-->
    <!--<link rel="stylesheet" href="mystyle/style-index.css"/>-->
    <style>
        @font-face {
            font-family: 'vazir';
            src: url('fonts/Vazir.eot');
        url('fonts/Vazir.woff') format('woff'),
        url('fonts/Vazir.ttf')  format('truetype');
        }

        body{
            font-family: 'vazir';
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="icon/mainlogo.jpg" alt="logo" style="width: 80px;height: 80px;"/>
                <small>«مرکز خرید و فروش انواع بازی»</small>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white" href="#" tabindex="-1" aria-disabled="true">ثبت رایگان آگهی</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link btn btn-info ms-5 text-center">
                            سبد خرید<img src="icon/basket.png" alt="basket image" style="width: 21px;"><span class="badge">2</span></span>
                        </a>
                    </li>
                </ul>
                <form class="d-flex mt-3">
                    <input class="form-control me-2" type="search" placeholder="کلمه مورد نظر + اینتر" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">جستجو</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row">
        <h1 class="bg-light text-center p-2">سبد خرید</h1>
    </div>
    <div class="row">
        <div class="col-lg-7 col-sm-6 col-md-6 col-xs-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>تصویر</th>
                    <th>محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>جمع جزء</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="pubg/02.jpg" alt="pung images" style="width: 60px;"></td>
                    <td>اکانت پابجی لول 89 کد 322</td>
                    <td>95,0000 تومان</td>
                    <td>1 عدد</td>
                    <td><b>95,0000 تومان</b></td>
                    <td><a href="" class="btn btn-outline-danger">حذف</a></td>
                </tr>
                </tbody>
            </table>
            <p class="lead text-danger fw-bolder bg-light p-1"><b>توجه توجه : </b>تنها شماره معتبر برای انجام معامله 09913656693 می‌باشد.</p>
        </div>
        <div class="col-lg-5 col-sm-6 col-md-6 col-xs-6">
            <div class="border border-1 text-center">
                <h2 class="mb-4">جمع کل سبد خرید</h2>
                <p class="lead"> <b>جمع جزء : </b> 95,000 تومان</p>
                <hr />
                <p class="lead"> <b>هزینه واسطه فروشگاه : </b> 10,000 تومان</p>
                <hr />
                <h4> <b>مجموع : </b><span style="color: #122b40;"><b>105,000 تومان</b></span></h4>
                <a href="checkout.php" class="btn btn-success btn-lg m-2">ادامه جهت تسویه حساب</a>
            </div>
        </div>
    </div>

    <div style="overflow: hidden;">
        <svg
            preserveAspectRatio="none"
            viewBox="0 0 1200 120"
            xmlns="http://www.w3.org/2000/svg"
            style="fill: #6c757d; width: 100%; height: 26px; transform: rotate(180deg);"
        >
            <path d="M1200 120L0 16.48V0h1200v120z" />
        </svg>
    </div>
    <div class="row">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span></span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h5 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i><b>کامیار اکانت</b>
                            </h5>
                            <p>
                                کامیار اکانت فعالیت خود را از سال 1402 آغاز کرد و تا به امروز بزرگترین مرجع درج آگهی اکانت بازی های آنلاین در ایران بوده است.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                اکانت ها
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">کلش</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">پابجی</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">کالاف</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">فری فایر</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                لینک دوستان
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">آریا کلش</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">کلن سل</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">ام اکانت</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">کلشه</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">آدرس</h6>
                            <p><i class="fas fa-home me-3 text-justify"></i> کرمان ،شهرستان شهربابک،بنیاد سفلی نبش عدالت 8</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@kamyaraccount.ir
                            </p>
                            <p><i class="fas fa-phone me-3"></i>09913656657</p>
                            <p><i class="fas fa-print me-3"></i>09913656693</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                تمامی حقوق برای کامیار اکانت محفوظ می باشد.     &nbsp;&copy; <?php echo date('Y');?>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</div>
</html>