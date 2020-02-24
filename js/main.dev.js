$(document).ready(function () {
    $(".question__buttons-calculate").click(function () {
        $(".calculate-modal")
            .css("display", "flex")
            .hide()
            .fadeIn();
        $("body").addClass("overflow-active");
    });

    $(".header__content-completed-project").click(function () {
        $(".project-modal")
            .css("display", "flex")
            .hide()
            .fadeIn();
        $("body").addClass("overflow-active");
    });

    $(".popup-call").on("click", function () {
        $(".contacts-modal")
            .css("display", "flex")
            .hide()
            .fadeIn();
        $("body").addClass("overflow-active");
    });

    $(".menu__burger").click(function () {
        $(this)
            .children()
            .toggleClass("active");
        $(this)
            .prev()
            .toggleClass("active");
        $("body").toggleClass("overflow-active");
    });

    $(".modal__close").click(function () {
        $(this)
            .parent()
            .parent()
            .parent()
            .fadeOut();
        $("body").removeClass("overflow-active");
    });

    $(".modal__overlay").click(function (e) {
        var clicked = $(e.target);
        if (clicked.is(".modal__block") || clicked.parents().is(".modal__block")) {
        } else {
            $(".modal__overlay").fadeOut();
            $("body").removeClass("overflow-active");
        }
    });

    var answerVariant = $(".question ul li");

    answerVariant.click(function () {
        $(this)
            .siblings()
            .removeClass("active");
        $(this).addClass("active");
        if (
            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .hasClass("question--first")
        ) {
            $("#q1_answer").val($(this).data("answer"));
        } else if (
            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .hasClass("question--third")
        ) {
            $("#q3_answer").val($(this).data("answer"));
        } else if (
            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .hasClass("question--fourth")
        ) {
            $("#q4_answer").val($(this).data("answer"));
        } else if (
            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .hasClass("question--fifth")
        ) {
            $("#q5_answer").val($(this).data("answer"));
        } else if (
            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .hasClass("question--sixth")
        ) {
            $("#q6_answer").val($(this).data("answer"));
        }
    }); // ввод данных, выбранных пользователем в скрытые инпуты

    $(".q2_1").focusout(function () {
        $("#q2_1_answer").val($(this).val());
    });

    $(".q2_2").focusout(function () {
        $("#q2_2_answer").val($(this).val());
    });

    $(".q2_4").focusout(function () {
        $("#q2_4_answer").val($(this).val());
    });

    $(".question__buttons-next").click(function () {
        if (
            $(this)
                .parent()
                .prev()
                .find(".active")
                .hasClass("active") ||
            $(".question--second").hasClass("active")
        ) {
            if (
                $(".question--first").hasClass("active") &&
                $(".question--first.active")
                    .find("li.active")
                    .data("answer") === "Острівна"
            ) {
                $(this)
                    .parent()
                    .parent()
                    .slideUp();
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .next()
                    .next()
                    .find(".question__toggle-block")
                    .slideDown();
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .removeClass("active");
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .next()
                    .next()
                    .addClass("active"); // Если выбран вариант в первом вопросе "островная" - пролистываемся к третьему вопросу
            } else {
                $(this)
                    .parent()
                    .parent()
                    .slideUp();
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .next()
                    .find(".question__toggle-block")
                    .slideDown();
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .removeClass("active");
                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .next()
                    .addClass("active"); // Прослистываемся к следующему вопросу, если речь не идет о первом вопросе.
            }
        } else {
            swal(
                "Ошибка",
                "Укажите необходимые данные прежде чем перейти к следующему шагу!",
                "error"
            );
        }
    }); // проверка, чтобы был выбран один из предложенных вариантов

    $(".question__buttons-prev").click(function () {
        if (
            $(".question--third").hasClass("active") &&
            $(".question--first")
                .find("li.active")
                .data("answer") === "Острівна"
        ) {
            $(this)
                .parent()
                .parent()
                .slideUp();
            $(this)
                .parent()
                .parent()
                .parent()
                .prev()
                .prev()
                .find(".question__toggle-block")
                .slideDown();
            $(this)
                .parent()
                .parent()
                .parent()
                .removeClass("active");
            $(this)
                .parent()
                .parent()
                .parent()
                .prev()
                .prev()
                .addClass("active"); // Если с третьего вопроса нажимаем назад и там выбрана островная кухня, возвращаемся к нему, а не ко второму вопросу.
        } else {
            $(this)
                .parent()
                .parent()
                .slideUp();
            $(this)
                .parent()
                .parent()
                .parent()
                .prev()
                .find(".question__toggle-block")
                .slideDown();
            $(this)
                .parent()
                .parent()
                .parent()
                .removeClass("active");
            $(this)
                .parent()
                .parent()
                .parent()
                .prev()
                .addClass("active"); // возвращаемся к предыдущему вопросу, если в первом варианте выбрана не островная кухня и не активный третий вопрос
        }
    });

    $(".question--first li").click(function () {
        $("#pryama").removeClass("choose");
        $("#pryama")
            .siblings()
            .removeClass("choose");
        if ($(this).data("answer") === "Пряма") {
            $("#pryama").addClass("choose");
        } else if ($(this).data("answer") === "Кутова") {
            $("#kutova").addClass("choose");
        } else if ($(this).data("answer") === "П-подібна") {
            $("#p-podibna").addClass("choose");
        } else if ($(this).data("answer") === "Острівна") {
            $("#ostrivna").addClass("choose");
        }
    }); // при клике на варианту из первого вопроса убираем класс .choose у варинатов во втором вопросе и ставим на выбранный вариант класс .choose

    // $('.question__title-block').click(function() {
    //     $(this).parent().siblings().removeClass('active');
    //     $(this).parent().addClass('active');
    // }); // клик по вопросу раскрывает варианты ответов

    $(".calculate-modal form").submit(function () {
        var data = {
            name: $(this)
                .find(".name")
                .val(),
            phone: $(this)
                .find(".phone")
                .val(),
            answer1: $(this)
                .find("#q1_answer")
                .val(),
            q2_1_answer: $(this)
                .find("#q2_1_answer")
                .val(),
            q2_2_answer: $(this)
                .find("#q2_2_answer")
                .val(),
            q2_4_answer: $(this)
                .find("#q2_4_answer")
                .val(),
            answer3: $(this)
                .find("#q3_answer")
                .val(),
            answer4: $(this)
                .find("#q4_answer")
                .val(),
            answer5: $(this)
                .find("#q5_answer")
                .val(),
            answer6: $(this)
                .find("#q6_answer")
                .val()
        };
        $.ajax({
            type: "get",
            url: "mail.php",
            data: data
        }).done(function () {
            swal(
                "Заявка відправлена",
                "Скоро з вами зв’яжеться менеджер!",
                "success"
            );
            setTimeout(function () {
                $(this).trigger("reset");
                $(".swal-overlay").fadeOut();
                $(".calculate-modal").fadeOut();
                $("body").removeClass("overflow-active");
            }, 3500);
        });
        return false;
    }); // отправка формы из модалки с калькулятором

    // $('.project-modal form').submit(function() {
    //     var data = {
    //         name: $(this).find('.name').val(),
    //         phone: $(this).find('.phone').val(),
    //         file: $(this).find('.file').val()
    //     };
    //     $.ajax({
    //         type: "get",
    //         url: "mail2.php",
    //         data: data,
    //         contentType: 'multipart/form-data',
    //     }).done(function() {
    //         swal("Заявка відправлена", "Скоро з вами свяжется менеджер!", "success");
    //         setTimeout(function() {
    //             $(this).trigger('reset');
    //             $('.swal-overlay').fadeOut();
    //             $('.project-modal').fadeOut();
    //             $('body').removeClass('overflow-active');
    //         }, 3500);
    //     });
    //     return false;
    // }); // отправка формы из модалки с калькулятором

    /* $(function () {
        document.getElementById("ajax-contact-form").addEventListener(
            "submit",
            function (evt) {
                var http = new XMLHttpRequest(),
                    f = this;
                var th = $(this);
                evt.preventDefault();
                http.open("POST", "mail2.php", true);
                http.onreadystatechange = function () {
                    if (http.readyState == 4 && http.status == 200) {
                        // alert(http.responseText);
                        th.trigger("reset");
                        swal(
                            "Заявка відправлена",
                            "Скоро з вами зв’яжеться менеджер!",
                            "success"
                        );
                        console.log("sended");
                        closeModal();
                        // if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поля формы, если в ответе первым словом будет имя отправителя (nameFF)
                        //     th.trigger("reset");
                        // }
                    }
                };
                http.onerror = function () {
                    alert("Ошибка, попробуйте еще раз");
                };
                http.send(new FormData(f));
            },
            false
        );
    }); */

    function closeModal() {
        setTimeout(() => {
            $(".swal-overlay.swal-overlay--show-modal").fadeOut();
            $(".project-modal.modal__overlay").fadeOut();
            $("body").removeClass("overflow-active");
            console.log("closed after sending");
        }, 5000);
    }
});


