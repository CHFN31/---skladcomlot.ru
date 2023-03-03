$(document).ready(function() {
    
    
    $('.burger').click(function() {
        $(this).addClass('active');
        $('.menu').fadeIn();
    });

    $('.close-menu, .menu .nav a').click(function() {
        $('.menu').hide();
    });

    $('.go_to').on('click','a', function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

    $('.slider_1').slick({
        autoplay: false,
        arrows: true, 
        //fade: true,
        //cssEase: 'linear',
        dots: true
        
    });

    $('.capability-slider_1').slick({
        autoplay: false,
        arrows: true, 
        //fade: true,
        //cssEase: 'linear',
        dots: true,
        adaptiveHeight: true
        
    });

    $('.partners-carousel_1').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: true,
        autoplay: true,
        responsive: [
            {   
              breakpoint: 1331,
              settings: {
                slidesToShow: 3
              }
            },
            {   
              breakpoint: 769,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1
              }
            }   
        ]
    });


    $('.mask').mask('+7 (999) 999-99-99');
    
 

});

function modalOpen(element, modalName) {
    $('.btn-callback').on('click', function () {
        $('.modal_callback').fadeTo(300, 1);
    });
}


// Первый дочерний элемент popup !!!
// На входе: 
//     класс элемента, по которому нажимаем для закрытия с кнопки
//     уникальный класс модального окна
function modalClose_ButtonKeyArea(element, modalName) {
    // Закрытие по нажатию на крест
    $(element).on('click', function () {
        $(modalName).fadeOut(500);
    });

    // Закрытие по нажатию на Esc
    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $(modalName).fadeOut();
        }
    });

    // Закрытие по нажатию вне окна (по темному фону)
    $(modalName).click(function (e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();
        }
    });
}

modalOpen('.btn-callback', '.hidden');
modalClose_ButtonKeyArea('.close-popup', '.modal');
modalClose_ButtonKeyArea('.footer-cookie-x', '.footer-cookie');
modalClose_ButtonKeyArea('.footer-cookie-sgl', '.footer-cookie');

// SEND MAIL
// function sendFormModal(sendButton, inputName_Phone) {
//     $('[name = ' + sendButton + ']').on('click', function () {
//         phone = $(this).siblings('.form-group_big').find('[name = ' + inputName_Phone + ']').val();
//         console.log("🚀 ~ file: script.js ~ line 117 ~ phone", phone)

//         if (phone == '') {
//             alert('Заполните, пожалуйста, все поля');
//             return false;
//         } 
//         else {
//             $.ajax({
//                 type: 'POST',
//                 url: "/backend/mail.php",
//                 data: {
//                     "phone": phone
//                 }
//             }).done(function () {
//                 $('.modal_thanks').fadeTo(300, 1, 'linear').css('display', 'flex');
//                 setTimeout(function () {
//                     $('.modal').fadeOut(500);
//                 }, 2000);
//             });
//             return false;
//         }
//     });
// };

// sendFormModal('btn-send', 'phone');

// function sendFormIndex(sendButton, inputName_Phone) {
//     $('[name = ' + sendButton + ']').on('click', function () {
//         phone = $(this).siblings('[name = ' + inputName_Phone + ']').val();
//         console.log("🚀 ~ file: script.js ~ line 143 ~ phone", phone)

//         if (phone == '') {
//             alert('Заполните, пожалуйста, все поля');
//             return false;
//         } 
//         else {
//             $.ajax({
//                 type: 'POST',
//                 url: "/backend/mail.php",
//                 data: {
//                     "phone": phone
//                 }
//             }).done(function () {
//                 $('.modal_thanks').fadeTo(300, 1, 'linear').css('display', 'flex');
//                 setTimeout(function () {
//                     $('.modal').fadeOut(500);
//                 }, 2000);
//             });
//             return false;
//         }
//     });
// };

// sendFormIndex('btnSendIndex', 'phone');

    


