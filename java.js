// Используем querySelector для добавления обработчика события на иконку бургера
document.querySelector('.burger').addEventListener('click', function() {
   this.classList.toggle('active');
   document.querySelector('.nav').classList.toggle('open');
});

// Используем const для объявления переменных, применяемые современные методы для получения элементов
const prevButton = document.getElementById('prev-slide');
const nextButton = document.getElementById('next-slide');
const imageList = document.querySelector('.image-list');

// Обработчик события для кнопки "назад"
prevButton.addEventListener('click', () => {
  imageList.scrollLeft -= 630;
});

// Обработчик события для кнопки "вперед"
nextButton.addEventListener('click', () => {
  imageList.scrollLeft += 630;
});

// Используем jQuery для установки обработчиков событий и методы on
$(document).ready(function() {
    const plusButtons = $('.plus');
    const minusButtons = $('.minus');

    plusButtons.on('click', function() {
        let input = $(this).siblings('input');
        input.val((i, val) => parseInt(val) + 1);
    });

    minusButtons.on('click', function() {
        let input = $(this).siblings('input');
        input.val((i, val) => parseInt(val) > 0 ? parseInt(val) - 1 : 0);
    });

    $(".product .image img").on("mouseenter", function() {
        $(this).parent().append('<span class="hover-text">Ваш текст</span>');
    });

    $(".product .image img").on("mouseleave", function() {
        $(this).parent().find('.hover-text').remove();
    });
});
