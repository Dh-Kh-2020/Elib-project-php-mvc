<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <?php include_once('./components/meta.php'); ?>
    <title>مكتبة جرير</title>
</head>

<body onload="offerDate()">

    <?php 
        // Start Navigation
        include_once('./components/nav.php'); 
        // End Navigation
        
        // Start Header
        include_once('./components/header.php'); 
        // End Header

        // Start Banner
        include_once('./components/baner.php');
        // End Banner
    ?>

    <main>

        <!-- category slide section -->
        <section>
            <header class="header">
                <h1 class="header__title">تصفح حسب القسم</h1>
            </header>
            <div class="category">
                <div class="category__prev">
                    <a><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="category__item">
                    <img src="../../public/images/icon/debt.svg" class="category__img" alt="دين">
                    <a href="category.html" class="category__title category__title--brown">دين</a>
                </article>
                <article class="category__item">
                    <img src="../../public/images/icon/history.svg" class="category__img" alt="تاريخ">
                    <a href="category.html" class="category__title category__title--orange">تاريخ</a>
                </article>
                <article class="category__item">
                    <img src="../../public/images/icon/novels.svg" class="category__img" alt="روايات">
                    <a href="category.html" class="category__title category__title--purple">روايات</a>
                </article>
                <article class="category__item">
                    <img src="../../public/images/icon/policy.svg" class="category__img" alt="سياسة">
                    <a href="category.html" class="category__title category__title--fuchsia">سياسة</a>
                </article>
                <article class="category__item">
                    <img src="../../public/images/icon/economie.svg" class="category__img" alt="اقتصاد">
                    <a href="category.html" class="category__title category__title--blue">اقتصاد</a>
                </article>
                <article class="category__item">
                    <img src="../../public/images/icon/cooking.svg" class="category__img" alt="طبخ">
                    <a href="category.html" class="category__title category__title--green">طبخ</a>
                </article>
                <article class="category__item">
                    <img src="../../public/images/icon/education.svg" class="category__img" alt="تربية">
                    <a href="category.html" class="category__title category__title--pink">تربية</a>
                </article>
                <div class="category__next">
                    <a><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- advertisement section -->
        <section>
            <div class="advertisement">
                <article class="advertisement__item">
                    <a href="#"><img src="../../public/images/advertisement/1.jpg" class="advertisement__img" alt=""></a>
                </article>
                <article class="advertisement__item">
                    <a href="#"><img src="../../public/images/advertisement/2.jpg" class="advertisement__img" alt=""></a>
                </article>
                <article class="advertisement__item">
                    <a href="#"><img src="../../public/images/advertisement/3.jpg" class="advertisement__img" alt=""></a>
                </article>
                <article class="advertisement__item">
                    <a href="#"><img src="../../public/images/advertisement/4.jpg" class="advertisement__img" alt=""></a>
                </article>
                <article class="advertisement__item advertisement__item--main">
                    <a href="#"><img src="../../public/images/advertisement/5.jpg" class="advertisement__img" alt=""></a>
                </article>
            </div>
        </section>

        <!-- قسم العروض -->
        <section>
            <header class="header">
                <h1 class="header__title">العروض الحالية</h1>
                <a href="category.html" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="note note--green" id="product-1">
                            <p class="expired"></p>
                            <!-- <span class="secound"></span>
                            <span class="minut"></span>
                            <span class="hour"></span> -->
                            <span class="day"></span>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="note note--green" id="product-2">
                            <p class="expired"></p>
                            <!-- <span class="secound"></span>
                            <span class="minut"></span>
                            <span class="hour"></span> -->
                            <span class="day"></span>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">                    </a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="note note--green" id="product-3">
                            <p class="expired"></p>
                            <!-- <span class="secound"></span>
                            <span class="minut"></span>
                            <span class="hour"></span> -->
                            <span class="day"></span>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="note note--green" id="product-4">
                            <p class="expired"></p>
                            <!-- <span class="secound"></span>
                            <span class="minut"></span>
                            <span class="hour"></span> -->
                            <span class="day"></span>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="note note--green" id="product-5">
                            <p class="expired"></p>
                            <!-- <span class="secound"></span>
                            <span class="minut"></span>
                            <span class="hour"></span> -->
                            <span class="day"></span>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- قسم الكتب الدينيه -->
        <section>
            <header class="header">
                <h1 class="header__title">الكتب الدينية</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- قسم الكتب التاريخية -->
        <section>
            <header class="header">
                <h1 class="header__title">الكتب التاريخية</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" >
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- قسم الكتب السياسية -->
        <section>
            <header class="header">
                <h1 class="header__title">السياسة</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- قسم كتب الاقتصاد -->
        <section>
            <header class="header">
                <h1 class="header__title">الاقتصاد</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- قسم كتب الطبخ -->
        <section>
            <header class="header">
                <h1 class="header__title">الطبخ</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

        <!-- قسم كتب أفضل الروايات الرومانسية -->
        <section>
            <header class="header">
                <h1 class="header__title">أفضل الروايات الرومانسية</h1>
                <a href="#" class="header__link">عرض الكل</a>
            </header>
            <div class="category category--gap">
                <div class="category__prev">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book2.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book3.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book4.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <a href="details.html"><img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب"></a>
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <a href="details.html"><img src="../../public/images/product/book1.jpg" class="card__img" alt="صورة الكتاب"></a>
                    <div class="card__info">
                        <div class="book-type">
                            <img src="../../public/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                            <h1>كتاب إلكتروني</h1>
                        </div>
                        <div class="rating">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="../../public/images/icon/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="book-title">
                            <h1><a href="details.html" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                        <div class="book-link">
                            <span class="book-link--blue">صيغ أخرى:</span>
                            <a href="" class="book-link--cyan">كتاب مطبوع</a>
                        </div>
                        <div class="action">
                            <a href="#" class="action__item"><img src="../../public/images/icon/star.svg" alt="المفضلة" ></a>
                            <a class="action__item js-cart"><img src="../../public/images/icon/cart.svg" alt="السلة" ></a>
                            <a href="#" class="action__item"><img src="../../public/images/icon/share.svg" alt="مشاركة" ></a>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="../../public/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

    </main>

    <?php 
        // Start Footer
        include_once('./components/footer.php');
        // End Footer

        // Start Register Model
        include_once('./components/modals/register.php'); 
        // End Register Model

        // Start Login Model
        include_once('./components/modals/login.php');
        // End Login Model

        // Start Image Modal
        include_once('./components/modals/image.php');
        // End Image Modal
        
        // Start Scripts
        include_once('./components/scripts.php');
        // End Scripts
    ?>

</body>
</html>