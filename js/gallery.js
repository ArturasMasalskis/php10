// Wallpaper slider
const wallpaperSlides = document.querySelectorAll(".slider2 .slide2");
const nextWallpaperSlide = document.querySelector(".slider2 .btn-next2");
const prevWallpaperSlide = document.querySelector(".slider2 .btn-prev2");
let curWallpaperSlide = 0;
const maxWallpaperSlide = wallpaperSlides.length;

nextWallpaperSlide.addEventListener("click", function () {
  curWallpaperSlide++;
  if (curWallpaperSlide === maxWallpaperSlide) {
    curWallpaperSlide = 0;
  }
  updateSlidePosition(wallpaperSlides, curWallpaperSlide);
});

prevWallpaperSlide.addEventListener("click", function () {
  curWallpaperSlide--;
  if (curWallpaperSlide < 0) {
    curWallpaperSlide = maxWallpaperSlide - 1;
  }
  updateSlidePosition(wallpaperSlides, curWallpaperSlide);
});

// Fan Art slider
const fanArtSlides = document.querySelectorAll(".slider .slide3");
const nextFanArtSlide = document.querySelector(".slider .btn-next3");
const prevFanArtSlide = document.querySelector(".slider .btn-prev3");
let curFanArtSlide = 0;
const maxFanArtSlide = fanArtSlides.length;

nextFanArtSlide.addEventListener("click", function () {
  curFanArtSlide++;
  if (curFanArtSlide === maxFanArtSlide) {
    curFanArtSlide = 0;
  }
  updateSlidePosition(fanArtSlides, curFanArtSlide);
});

prevFanArtSlide.addEventListener("click", function () {
  curFanArtSlide--;
  if (curFanArtSlide < 0) {
    curFanArtSlide = maxFanArtSlide - 1;
  }
  updateSlidePosition(fanArtSlides, curFanArtSlide);
});

// Gameplay slider
const gameplaySlides = document.querySelectorAll(".slider .slide");
const nextGameplaySlide = document.querySelector(".slider .btn-next");
const prevGameplaySlide = document.querySelector(".slider .btn-prev");
let curGameplaySlide = 0;
const maxGameplaySlide = gameplaySlides.length;

nextGameplaySlide.addEventListener("click", function () {
  curGameplaySlide++;
  if (curGameplaySlide === maxGameplaySlide) {
    curGameplaySlide = 0;
  }
  updateSlidePosition(gameplaySlides, curGameplaySlide);
});

prevGameplaySlide.addEventListener("click", function () {
  curGameplaySlide--;
  if (curGameplaySlide < 0) {
    curGameplaySlide = maxGameplaySlide - 1;
  }
  updateSlidePosition(gameplaySlides, curGameplaySlide);
});

// Function 
function updateSlidePosition(slides, curSlide) {
  slides.forEach((slide, index) => {
    slide.style.transform = `translateX(${100 * (index - curSlide)}%)`;
  });
}