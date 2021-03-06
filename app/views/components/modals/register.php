<div class="model model--top model__register">
    <div class="model__container">
        <h1 class="model__title">إنشاء حساب </h1>
        <a id="close__register"><img src="../../images/icon/cancel.svg" alt=""></a>
        <div class="model__item">
            <form action="/register" method="POST" class="model__form">
                <div class="model__phone">
                    <div class="model__input">
                        <label for="phone">رقم الجوال</label>
                        <input type="text" name="phone" id="phone" >
                    </div>
                    <div>
                        <label for="country">رمز البلد</label>
                        <select name="country_code" id="country">
                            <option value=""><img src="../images/icon/country.svg">+967</option>
                            <option value="">+970</option>
                        </select>
                    </div>
                </div>
                <!-- <p>سوف نرسل لك <b>رمز التحقق عن طريق رسالة نصية</b></p>
                <button class="btn btn--md btn--darkgray btn--no-bottom">إرسال رمز التحقق</button> -->
                <div class="model__input">
                    <label for="first-name">الاسم </label>
                    <input type="text" name="" id="first-name" >
                </div>
                <!-- <div class="model__input">
                    <label for="last-name">اسم العائلة</label>
                    <input type="text" name="" id="last-name" >
                </div> -->
                <div class="model__input">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" name="" id="email" >
                </div>
                <div class="model__input">
                    <label for="password">كلمة السر</label>
                    <input type="password" name="" id="password" >
                </div>
                <div class="model__input">
                    <label for="confirm_password">تأكيد كلمة السر</label>
                    <input type="text" name="" id="confirm_password" >
                </div>
                <div class="model__policy">
                    <div>
                        <input type="checkbox">
                        <label for="">أوافق على</label><a href="#">الشروط والأحكام</a>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label for="">التسجيل للإنضمام للنشرة البريدية</label>
                    </div>
                </div>
                <button class="btn btn--md btn--darkgray">إنشاء الحساب</button>
            </form>
            <label class="model__label login"> لديك حساب؟ تسجيل الدخول</label>
        </div>
    </div>
</div>