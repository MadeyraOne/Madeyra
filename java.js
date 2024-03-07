document.querySelector('.burger').addEventListener('click', function() {
   this.classList.toggle('active');
   document.querySelector('.nav').classList.toggle('open');
});



const prevButton = document.getElementById('prev-slide');
const nextButton = document.getElementById('next-slide');
const imageList = document.querySelector('.image-list');

// Обработчик события для кнопки "назад"
prevButton.addEventListener('click', () => {
  imageList.scrollLeft -= 300; // Прокрутка влево на 300px (можно подстроить под ширину изображения)
});

// Обработчик события для кнопки "вперед"
nextButton.addEventListener('click', () => {
  imageList.scrollLeft += 300; // Прокрутка вправо на 300px (можно подстроить под ширину изображения)
});
