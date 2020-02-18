<header>
            <div class="inner">
                <div class="header flex_row">
                    <a href="/index.php" class="header__logo">
                        e-com
                    </a>
                    <div class="header__center"></div>
                    <div class="header__right-side">
                        <a href="<?php if ($_SESSION["loggued_on_user"] !== '' && $_SESSION["loggued_on_user"]) {
        echo "basket.php";
    } else {
        echo "login.php";
    } ?>" class="emp_order_online up inb vM rL">
                            <span class="image_block db abs l0">
                                <img class="img db w100 rL" src="img/ico_h5.svg" alt="">
                                <img class="img_hover" src="img/ico5.svg" alt="">
                            </span>заказать он-лайн
                        </a>
                    </div>
                </div>
            </div>
        </header>