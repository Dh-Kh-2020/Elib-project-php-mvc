<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <?php include_once('./components/meta.php'); ?>
    <title>صنف</title>
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

    <main>
        <div class="grid grid-category">
            <section>
                <div class="filter">
                    <h1 class="filter__title">
                        <span><img src="assets/images/icon/book.svg" alt="book"></span>
                        كتب إلكترونية
                    </h1>
                    <div class="filter__box">
                        <p class="filter__box-title">تصفية النتائج</p>
                        <a href="#" class="filter__item">
                            علامة تجارية
                            <span>-</span>
                        </a>
                        <a href="#" class="filter__item">
                            السعر
                            <span>-</span>
                        </a>
                        <div class="filter__collap">
                            <div class="prograssDetails">
                                <button></button>
                                <div></div>
                                <button></button>
                            </div>
                            <div class="priceDetaile">
                                <p>ر.س.0</p>
                                <p>ر.س.150</p>
                            </div>
                        </div>
                        <a href="#" class="filter__item">
                            صيغة الكتاب
                            <span>-</span>
                        </a>
                    </div>

                </div>
            </section>
            <section>
                <div class="select">
                    <!-- Search block -->
                    <form action="">
                        <div class="search">
                            <input id="search" onkeyup="searchBook()" type="text" class="search__input" placeholder="البحث">
                            <button class="search__btn"><img src="assets/images/icon/search.svg" alt="بحث"></button>
                        </div>
                    </form> 
                    <div>
                        <label for="categoriesSorting">الترتيب بحسب : </label>
                        <select name="categoriesSorting">
                            <option value="*">الرجاء الإختيار</option>
                            <option value="name">الاسم</option>
                            <option value="date">التاريخ</option>
                            <option value="price">السعر</option>
                        </select>
                    </div>
                </div>
                <div class="category category--gap" style="flex-wrap: wrap;" id="books">
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">كن أنت</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">أبابيل</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">نون النسوية</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book4.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">لأنك الله</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book2.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book3.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book4.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <img src="assets/images/product/book1.jpg" class="card__img" alt="صورة الكتاب">
                        <div class="card__info">
                            <div class="book-type">
                                <img src="assets/images/icon/type.svg" class="book-type__icon" alt="نوع الكتاب">
                                <h1>كتاب إلكتروني</h1>
                            </div>
                            <div class="rating">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                                <img src="assets/images/icon/rating.svg" class="rating__star" alt="">
                            </div>
                            <div class="book-title">
                                <h1><a href="#" class="book-title__item">وهوى (كتاب إلكتروني)</a></h1>
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
                                <a href="#" class="action__item"><img src="assets/images/icon/star.svg" alt="المفضلة" ></a>
                                <a href="#" class="action__item js-cart"><img src="assets/images/icon/cart.svg" alt="السلة" ></a>
                                <a href="#" class="action__item"><img src="assets/images/icon/share.svg" alt="مشاركة" ></a>
                            </div>
                        </div>
                    </article>
                </div>
                <footer style="display: flex;flex-direction: column;align-items: center;">
                    <button class="btn btn--blue btn--100w">عرض المزيد</button>
                    <a href="" class="link--green">اشتر من كتب إلكترونية على متجر جرير الإلكتروني</a>
                </footer>
            </section>
    
        </div>
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