<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کامیار اکانت</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.rtl.css"/>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">کامیار اکانت</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">صفحه اصلی</a></li>
            <li><a href="ContactUs.php">تماس با ما</a></li>
            <li><a href="AboutUs.php">درباره ما</a></li>
        </ul>
        <button class="btn btn-success navbar-btn">ثبت رایگان آگهی</button>
        <form class="navbar-form navbar-right" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="کلمه مورد نظر + اینتر">
            </div>
            <button type="submit" class="btn btn-default">جستجو</button>
        </form>
    </nav>
    <div class="row" style="border: 4px solid #e7e7e7;padding: 10px;margin: 10px;background-color: #f8f8f8;">
        <div class="col-sm-4" style="margin-top: 10px;">
            <form class="navbar-form navbar-left" action="search.php" method="get">
                <div class="form-group">
                    <span> قیمت از : </span>
                    <select class="form-control" name="start" id="">
                        <option value="10">50 هزار تومان</option>
                        <option value="100">250 هزار تومان</option>
                        <option value="1000">500 هزار تومان</option>
                        <option value="10000">750 هزار تومان</option>
                    </select>
                </div>
                <span>تا</span>
                <div class="form-group">
                    <select class="form-control" name="end" id="">
                        <option value="100">250 هزار تومان</option>
                        <option value="1000">500 هزار تومان</option>
                        <option value="10000">750 هزار تومان</option>
                        <option value="100000">1 میلیون تومان</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">جستجو</button>
            </form>
        </div>
        <div class="col-sm-3" style="margin-top: 10px;">
            <form class="navbar-form navbar-left" action="search.php" method="get">
                <div class="form-group">
                    <span> مرتب سازی : </span>
                    <select class="form-control" name="start" id="">
                        <option value="10">جدید ترین</option>
                        <option value="100">قدیمی ترین</option>
                        <option value="1000">ارزان ترین</option>
                        <option value="10000">گران ترین</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">جستجو</button>
            </form>
        </div>
        <div class="col-sm-4" style="margin-top: 10px;">
            <span> دسته بندی ها : </span>
            <ul style="display: inline-block;">
                <li id="myli"><a href="">کلش</a></li>
                <li id="myli"><a href="">پابجی</a></li>
                <li id="myli"><a href="">کالاف</a></li>
                <li id="myli"><a href="">فری فایر</a></li>
            </ul>
        </div>
        <div class="col-sm-3 table-bordered" style="margin-top: 7px;width: 110px;">
            <a style="color: brown;" href="">مشاهده سبد خرید<img  title="مشاهده سبد خرید"
                                                                  style="width: 35px;height: 35px;display: inline-block !important;cursor: pointer;margin-right: 20px;"
                                                                  src="images/basket1.png" alt=""></a></div>
    </div>
    <style>
        #myli
        {
            list-style-type: none;
            display: inline-block;
            margin-top: 9px;
            width: 80px;
            border: 2px solid #e7e7e7;
            padding: 5px;
            text-align: center;
        }
    </style>
    <div class="row" style="border: 4px solid #e7e7e7;padding: 10px;margin: 10px;background-color: #f8f8f8;">
        <h2 style="text-align: center;">اکانت های کلش اف کلنز</h2>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
    </div>
    <div class="row" style="border: 4px solid #e7e7e7;padding: 10px;margin: 10px;background-color: #f8f8f8;">
        <h2 style="text-align: center;">اکانت های پابجی موبایل</h2>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
    </div>
    <div class="row" style="border: 4px solid #e7e7e7;padding: 10px;margin: 10px;background-color: #f8f8f8;">
        <h2 style="text-align: center;">اکانت های کالاف دیوتی موبایل</h2>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
    </div>
    <div class="row" style="border: 4px solid #e7e7e7;padding: 10px;margin: 10px;background-color: #f8f8f8;">
        <h2 style="text-align: center;">اکانت های فری فایر</h2>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
        <div class="col-sm-3">
            <a href="post.php?id=48">
                <img style="height: 250px;width: 355px;margin-top: 3pt;" class="img-responsive"
                     src="clash/01.jpg" alt="image-product" id="image-product"/>
            </a>
            <h4 style="padding: 10px;margin-top: 0;margin-bottom: 0;text-align: center;" class="text-primary bg-info">اکانت کلش اف کلنز لول 89 تاون هال 10</h4>
            <p style="padding: 10px;margin-top: 0;font-size: 16px;text-align: center;margin-bottom: 0;" class="text-primary bg-info"> قیمت :  1,200,000 تومان </p>
            <a href="post.php?id=48"><button style="margin-right: 100px;border: none;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top-right-radius: 0;border-top-left-radius: 0;" class="btn-success btn-lg" type="submit" id="btn-submit-product" name="buy">توضیحات و خرید</button></a>
        </div>
    </div>
    <div style="overflow: hidden;">
        <svg
            preserveAspectRatio="none"
            viewBox="0 0 1200 120"
            xmlns="http://www.w3.org/2000/svg"
            style="fill: #dbdbdb; width: 100%; height: 340px;"
        >
            <path
                d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                opacity=".25"
            />
            <path
                d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                opacity=".5"
            />
            <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
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
                            <p><i class="fas fa-home me-3"></i> کرمان ،شهرستان شهربابک،بنیاد سفلی نبش عدالت 8</p>
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