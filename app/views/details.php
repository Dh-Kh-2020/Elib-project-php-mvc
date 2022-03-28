<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <?php include_once('./components/meta.php'); ?>
    <title>تفاصيل</title>
</head>
<body>
    
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

    <!-- link block -->
    <article>
        <ul class="link">
            <li class="link__item"><a href="#" class="link__link">الرئيسية</a></li>
            <li class="link__item"><a href="#" class="link__link">الكتب العربية</a></li>
            <li class="link__item"><a href="#" class="link__link">كتب إلكترونية</a></li>
            <li class="link__item"><a href="#" class="link__link">لأنك الله (كتاب إلكتروني)</a></li>
        </ul>
    </article>

    <main class="no-padding">
    
        <div class="grid">
            <!-- images book -->
            <section class="images-book">
                <div class="card card--shadow card--details card--86w">
                    <figure>
                        <img id="img-main" src="assets/images/product/book1.jpg" alt="" class="card__img">
                    </figure>
                    <div class="imges">
                        <img src="assets/images/product/book2.jpg" alt="" class="img__item img">
                        <img src="assets/images/product/book1.jpg" alt="" class="img__item img">
                        <img src="assets/images/product/book3.jpg" alt="" class="img__item img">
                    </div>
                </div>
            </section>

            <!-- details book -->
            <section class="details-book">
                <div class="details">
                    <div class="book-type book-type--start">
                        <h1>لأنك الله (كتاب إلكتروني)</h1>
                    </div>
                    <div class="book-link">
                        <a href="" class="book-link--cyan">عرض المزيد<img src="assets/images/icon/more.svg"></a>
                    </div>
                    <div class="book-price" style="margin-top: 0;">
                        <h3 class="book-price__price--large">24 <span class="book-price__currency--large">ر.س</span></h3>
                        <p class="book-price__tax">شامل الضرائب</p>
                    </div>
                    <div class="details__item">
                        <h4 class="details__text">وحدة البيع:Each</h4>
                        <div class="rating">
                            <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            <a href="" class="book-link--cyan">(15 المراجعات)</a>
                        </div>
                        <p class="details__text">رقم الصنف <b>JBB410156</b>رقم المنتج <b>4</b></p>
                    </div>

                    <div class="book-link">
                        <span class="book-link--blue">الصيغ المتوفرة:</span>
                        <div class="row">
                            <div class="row__item">
                                <span class="radio"></span>
                                <a href="" class="row__link">كتاب إلكتروني<img src="assets/images/icon/qus.svg"></a>
                            </div>
                            <div class="book-price">
                                <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                                <p class="book-price__tax">شامل الضرائب</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row__item">
                                <span class="radio"></span>
                                <a href="" class="row__link">كتاب مطبوع</a>
                            </div>
                            <div class="book-price">
                                <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                                <p class="book-price__tax">شامل الضرائب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- buy info  -->
            <section class="buy-info">
                <div class="card card--details card--shadow card--90w">
                    <div class="note">
                        <p><b>ملاحظة:</b>سيتم إضافة هذا الكتبا الإلكتروني إلى مكتبتك في قارئ جرير</p>
                        <a href="#">اقرأ المزيد</a>
                    </div>
                    <div class="form">
                        <form action="">
                            <button class="btn btn--select">1<img src="assets/images/icon/down.svg"></button>
                            <button class="btn btn--red btn--no-bottom btn--83w js-cart"><img src="assets/images/icon/cart-fff.svg" style="margin-left: 10px;">اضف الى السلة</button>
                        </form>    
                    </div>
                    <div class="info">
                        <a href="#"><img src="assets/images/icon/lock1.svg">تسوق آمن<img src="assets/images/icon/qus-2.svg"></a>
                        <a href="#"><img src="assets/images/icon/save2.svg">أصلي ومضمون<img src="assets/images/icon/qus-2.svg"></a>
                        <a href="#"><img src="assets/images/icon/fast.svg">شحن سريع ومجاني<img src="assets/images/icon/qus-2.svg"></a>
                    </div>
                    <div class="share">
                        <button class="btn"><img src="assets/images/icon/share1.svg">مشاركة</button>
                        <button class="btn"><img src="assets/images/icon/heart.svg">المفضلة</button>
                        <button class="btn"><img src="assets/images/icon/compare.svg">مقارنة</button>
                    </div>
                </div>
                <div class="card card--details card--shadow card--90w">
                    <div class="share share--top-border">
                        <button class="btn"><img src="assets/images/icon/share1.svg">مشاركة</button>
                        <button class="btn"><img src="assets/images/icon/heart.svg">المفضلة</button>
                        <button class="btn"><img src="assets/images/icon/compare.svg">مقارنة</button>
                    </div>
                </div>
            </section>

            <!-- short description -->
            <article class="description">
                <p>كتاب يتحدث عن بعض أسما الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف أن يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض والسليم</p>
            </article>
        </div>

        <!-- specifications -->
        <section>
            <header class="header">
                <h1 class="header__title--blue">المواصفات</h1>
            </header>
            <table class="specifications">
                <tr class="specifications__row">
                    <td class="specifications__td">رقم الصنف</td>
                    <th class="specifications__th">JBB410156</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">رقم المنتج</td>
                    <th class="specifications__th">4</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">المؤلف</td>
                    <th class="specifications__th">علي جابر الفيفي</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td"> الناشر</td>
                    <th class="specifications__th">دار الحضارة للنشر والتوزيع</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">تاريخ النشر</td>
                    <th class="specifications__th">2016</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">صيغة الكتاب</td>
                    <th class="specifications__th">Ebook</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">عدد الصفحات</td>
                    <th class="specifications__th">182</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">وزن الشحن (كجم)</td>
                    <th class="specifications__th">0.0100</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">صيغة الملف</td>
                    <th class="specifications__th">ePub</th>
                </tr>
                <tr class="specifications__row">
                    <td class="specifications__td">اللغة</td>
                    <th class="specifications__th">عربي</th>
                </tr>
            </table>
        </section>

        <!-- comments -->
        <section>
            <header class="header">
                <h1 class="header__title--blue">مراجعات العملاء</h1>
                <button class="btn btn--blue"><img src="assets/images/icon/plus.svg" alt="plus">اكتب مراجعتك</button>
            </header>
            <div class="comment">
                <div class="comment__item">
                    <h3 class="comment__title">good</h3>
                    <div class="comment__user">
                        <span>من قبل reem</span>
                        <span>2021/11/16</span>
                    </div>
                </div>
                <p class="comment__p">Good</p>
            </div>
            <div class="comment">
                <div class="comment__item">
                    <h3 class="comment__title">good</h3>
                    <div class="comment__user">
                        <span>من قبل reem</span>
                        <span>2021/11/16</span>
                    </div>
                </div>
                <p class="comment__p">Good</p>
            </div>
            
        </section>

        <!-- related book -->
        <section>
            <header class="header">
                <h1 class="header__title--blue">منتجات مشابهة</h1>
            </header>
            <div class="category category--gap-36">
                <div class="category__prev">
                    <a href="#"><img src="assets/images/icon/arrow.svg" alt="السابق"></a>
                </div>
                <article class="card card--shadow card--related">
                    <img src="assets/images/product/related1.jpg" class="card__img--min" alt="صورة الكتاب">
                    <div class="card__info card__info--min">
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price--min">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                    </div>
                </article>
                <article class="card card--shadow card--related">
                    <img src="assets/images/product/related1.jpg" class="card__img--min" alt="صورة الكتاب">
                    <div class="card__info card__info--min">
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price--min">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                    </div>
                </article>
                <article class="card card--shadow card--related">
                    <img src="assets/images/product/related1.jpg" class="card__img--min" alt="صورة الكتاب">
                    <div class="card__info card__info--min">
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price--min">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                    </div>
                </article>
                <article class="card card--shadow card--related">
                    <img src="assets/images/product/related1.jpg" class="card__img--min" alt="صورة الكتاب">
                    <div class="card__info card__info--min">
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price--min">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                    </div>
                </article>
                <article class="card card--shadow card--related">
                    <img src="assets/images/product/related1.jpg" class="card__img--min" alt="صورة الكتاب">
                    <div class="card__info card__info--min">
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price--min">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                    </div>
                </article>
                <article class="card card--shadow card--related">
                    <img src="assets/images/product/related1.jpg" class="card__img--min" alt="صورة الكتاب">
                    <div class="card__info card__info--min">
                        <div class="book-title">
                            <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
                        </div>
                        <div class="book-price">
                            <h3 class="book-price__price--min">24 <span class="book-price__currency">ر.س</span></h3>
                            <p class="book-price__tax">شامل الضرائب</p>
                        </div>
                    </div>
                </article>
                <div class="category__next">
                    <a href="#"><img src="assets/images/icon/arrow.svg" class="category__arrow--next" alt="التالي"></a>
                </div>
            </div>
        </section>

    </main>

    <?php     
        // Start Footer
        include_once('./components/footer.php');
        // End Footer

        // Start Register Model
        include_once('./components/modals/regiser.php'); 
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