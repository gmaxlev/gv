<footer class="footer">
  <div class="box90">
    <div class="box3 contacts">
      <b>м. Львів
      </b>
      <br>пр-т Червоної Калини, 77 "Світ меблів"
      <br>
      <a href="tel:+380671773913">
        <i class="pswf-phone">
        </i> +38 067 177 3913
      </a>
      <br>
      <a href="tel:+380976026006">
        <i class="pswf-phone">
        </i>  +38 097 602 6006
      </a>
    </div>
    <div class="box3 contacts">
      <b>м. Червоноград
      </b>
      <br>вул. Сокальська 10, "Світ меблів"
      <br>
      <a href="tel:+380634321063">
        <i class="pswf-phone">
        </i> +38 063 432 1063
      </a>
    </div>
    <div  class="box3 contacts">
      <b>м. Нововолинськ
      </b>
      <br>бул. Шевченка, 21
      <br>
      <a href="tel:+380931707910">
        <i class="pswf-phone">
        </i> +38 093 170 7910
      </a>
    </div>
    <div class="box3 contacts">
      <b>смт. Жвирка
      </b>
      <br>вул. 1-го Травня, 1
      <br>
      <a href="tel:+380937373303">
        <i class="pswf-phone">
        </i> +38 093 737 3303
      </a>
    </div>
    <nav>
    <div class="container row">
      <ul class="footernav">
        <li>
          <a href="/">
            <span>Головна
            </span>
          </a>
        </li>
        <li class="active">
          <a href="/gallery.php">
            <span>Галерея
            </span>
          </a>
        </li>
        <li>
          <a href="/materials.php">
            <span>Про матеріали
            </span>
          </a>
        </li>
        <li>
          <a href="/form.php">
            <span>Розрахунок вартості
            </span>
          </a>
        </li>
        <li>
          <a href="/contacts.php">
            <span>Контакти
            </span>
          </a>
        </li>
      </ul>
  
    </div>
  </nav>
    <div class="creditline">  
      <b>© 2019. GV-kuhni. 
      </b>Усі права захищено.
      <br>Розробка: 
      <a href="https://tkachuk.pro/" target="_blank" class="red">tkachuk.pro
      </a>
    </div>
  </div>
</footer>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/sweetalert.min.js">
</script>
<script src="./js/main.js">
</script>
<script src="owlcarousel/owl.carousel.min.js">
</script>
<script >
  jQuery(document).ready(function(){
    jQuery('.owl-objects').owlCarousel({
      mouseDrag: false,
      nav: true,
      dots: true,
      rewind: true,
      autoplay: false,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      responsive : {
        0 : {
          items:1        }
        ,
        600 : {
          items:2        }
        ,
        950 : {
          items:3    }
      }
    }
                                      );
  }
                        );
</script>
<script >
  jQuery(document).ready(function(){
    jQuery('.owl-feed').owlCarousel({
      mouseDrag: false,
      nav: true,
      dots: true,
      rewind: true,
      autoplay: false,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      items:1 
    }
                                   );
  }
                        );
</script>
<script >
  jQuery(document).ready(function(){
    jQuery('.owl-materials').owlCarousel({
      mouseDrag: false,
      nav: true,
      dots: true,
      rewind: true,
      autoplay: false,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      responsive : {
        0 : {
          items:1        }
        ,
        600 : {
          items:2        }
        ,
        950 : {
          items:3    }
      }
    }
                                        );
  }
                        );
</script>
<script src="js/lightbox.js">
</script>
<script>
  // Отправка заявки 
  $(document).ready(function() {
    $('.form-contacts').submit(function() {
      $.ajax({
        type: "get",
        url: "mail3.php",
        data: $(this).serialize()
      }
            ).done(function() {
        swal("Заявка відправлена", "Скоро з вами зв’яжеться менеджер!", "success");
        setTimeout(function() {
          // Done Functions
          $(this).trigger('reset');
          $('.swal-overlay').fadeOut();
          $('.contacts-modal').fadeOut();
          $('body').removeClass('overflow-active');
        }
                   , 3500);
      }
                  );
      return false;
    }
                              );
  }
                   );
</script>
<script >
  (function(d, w, s) {
    var widgetHash = 'hqgu6cghglh8awea4scf', gcw = d.createElement(s);
    gcw.type = 'text/javascript';
    gcw.async = true;
    gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
    var sn = d.getElementsByTagName(s)[0];
    sn.parentNode.insertBefore(gcw, sn);
  }
  )(document, window, 'script');
</script>

<!--<script type="text/javascript">
(function($) {
$(function() {

  $('ul.tabs__caption').each(function() {
    $(this).find('li').each(function(i) {
      $(this).click(function(){
        $(this).addClass('active').siblings().removeClass('active')
          .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
      });
    });
  });

})
})($)
</script>-->