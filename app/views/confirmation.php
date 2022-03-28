<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <?php include_once('./components/meta.php'); ?>
    <title>تأكيدالطلب</title>
</head>
<body>
    
    <?php 
        // Start Navigation
        include_once('./components/nav.php'); 
        // End Navigation
        
        // Start Header
        include_once('./components/header.php'); 
        // End Header
    ?>

    <main>
        <section class="step">
            <div class="step-wrapper">
                <div class="step__item is-active">1</div>
                <div class="step__item">2</div>
                <div class="step__item">3</div>
                <div class="step__item not">4</div>                
            </div>
            <div class="step-wrapper">
                <span class="step__text">بياناتك الشخصية</span>
                <span class="step__text">منتجاتك</span>
                <span class="step__text">طريقة الدفع</span>
                <span class="step__text">تأكيد</span>
            </div>
            <div class="model__container is-active js-step">
                <div class="model__item">
                    <form action="" class="model__form">
                        <div class="model__input">
                            <label for="first-name">الاسم الاول</label>
                            <input type="text" name="" id="first-name" >
                        </div>
                        <div class="model__input">
                            <label for="last-name">اسم العائلة</label>
                            <input type="text" name="" id="last-name" >
                        </div>
                        <div class="model__phone">
                            <div class="model__input">
                                <label for="phone">رقم الجوال</label>
                                <input type="text" name="" id="phone" >
                            </div>
                            <div>
                                <label for="country">رمز البلد</label>
                                <select name="" id="country">
                                    <option value=""><img src="assets/images/icon/country.svg">+967</option>
                                    <option value="">+970</option>
                                </select>
                            </div>
                        </div>
                        <div class="model__input">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" name="" id="email" >
                        </div>
                    </form>
                </div>
            </div>
            <div class="model__container js-step">
                <article class="card card--shadow card--90w">
                    <div class="header flex">
                        <img src="assets/images/product/related1.jpg" alt="" style="width: 6%; margin-left: 10px;">
                        <div class="flex__right">
                            <h1 class="header__title--blue" style="margin-bottom: 10px;">البداية والنهاية الجزء الأول (كتاب إلكتروني)</h1>
                            <p><i>منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير</i></p>
                        </div>
                        <div class="book-price flex__left">
                            <h3 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h3>
                            <!-- <p class="book-price__tax">شامل الضرائب</p> -->
                        </div>
                    </div>
                    <div class="flex">
                        <div class="note flex__right" style="  margin-right: 6%;width: 67%;margin-top: 12px;">
                            <p><b>ملاحظة:</b>سيتم إضافة هذا الكتبا الإلكتروني إلى مكتبتك في قارئ جرير</p>
                            <a href="#">كيفية الحصول على المنتج؟</a>
                        </div>
                        <div class="card__counter">
                            <label for="">1</label>
                            <div>
                                <button class="counter__btn">+</button>
                                <button class="counter__btn">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="card__footer">
                        <a class="card__delete"><img src="assets/images/icon/delete.svg">احذف</a>
                    </div>
                </article>
            </div>
            <div class="model__container js-step">
                <div class="model__item">
                    <form action="" class="model__form">
                        <div class="model__credit">
                            <a><img src="assets/images/icon/visa.svg" alt=""></a><input type="radio">
                            <a><img src="assets/images/icon/master.svg" alt=""></a><input type="radio">
                            <a><img src="assets/images/icon/qitaf.svg" alt=""></a><input type="radio">
                            <a><img src="assets/images/icon/mada.svg" alt=""></a><input type="radio">
                        </div>
                        <div class="model__phone" style="gap: 20px;">
                            <div class="model__input" style="width: 60%;">
                                <label for="phone">card number</label>
                                <input type="text" name="" id="phone" >
                            </div>
                            <div class="model__input" style="width: 40%;">
                                <label for="phone">card holder</label>
                                <input type="text" name="" id="phone" >
                            </div>
                        </div>
                        <div class="model__phone" style="gap: 20px; margin-top: 10px;">
                            <div class="model__input" style="width: 30%;">
                                <label for="phone">Expiry date</label>
                                <input type="text" name="" id="phone" >
                            </div>
                            <div class="model__input" style="width: 60%;">
                                <label for="phone">CVC</label>
                                <input type="text" name="" id="phone" >
                            </div>
                        </div>
                    </form>
                    <div class="card card--90w" style="margin: 30px auto;">
                        <div class="flex"> 
                            <div class="book-price--blue">
                                <h4>المجموع</h4>
                            </div>
                            <div class="book-price--blue">
                                <h4 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h4>
                            </div>
                        </div>
                        <div class="flex"> 
                            <div class="book-price--blue">
                                <h4>تكاليف الشحن</h4>
                            </div>
                            <div class="book-price__price--free">
                                <h4>مجاني</h4>
                            </div>
                        </div>
                        <div class="flex"> 
                            <div class="book-price">
                                <h3> المجموع الكلي <span class="book-price--blue">شامل الضريبة</span></h3>
                            </div>
                            <div class="book-price">
                                <h4 class="book-price__price">24 <span class="book-price__currency">ر.س</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="note" style="width: 75%; margin: auto;">
                        <p>بالضغط على "انهاء التسوق" فانت توافق على <a href="#"> الشروط والأحكام </a>و<a href="#"> سياسةالخصوصية </a></p>
                    </div>
                </div>
            </div>
            <div  class="model__container js-step">
                <div class="card card--shadow card--90w done">
                    <img src="assets/images/icon/done.svg" alt="">
                    <h1>تمت العملية بنجاح</h1>
                </div>
            </div>
            <div class="model__container" style=" display: flex;justify-content: space-around;">
                <button class="btn btn--green js-previews-btn">السابق</button>
                <button class="btn btn--green js-next-btn">التالي</button>
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