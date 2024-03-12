//click to activation burger-menu
document.querySelector('.burger').addEventListener('click', function() {
   this.classList.toggle('active');
   document.querySelector('.nav').classList.toggle('open');
});



//varible*
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
