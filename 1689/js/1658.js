
var swiper = new Swiper('.swiper-container', {
                    loop: true,
                    pagination: '.swiper-pagination',
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    slidesPerView: 5,
                    spaceBetween: 30,
                          pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                      },
                    
                    breakpoints: {
                    960: {
                      slidesPerView: 2,
                      spaceBetween: 30,
                    },
                    480: {
                      slidesPerView: 1,
                      spaceBetween: 20,
                    },

                  } 
                });