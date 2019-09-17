
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
                      320: {
                        slidesPerView: 2,
                        spaceBetween: 20
                      },
                   
                      480: {
                        slidesPerView: 3,
                        spaceBetween: 30
                      },
                    960: {
                      slidesPerView: 3,
                      spaceBetween: 30,
                    },
                    480: {
                      slidesPerView: 2,
                      spaceBetween: 20,
                    },

                  } 
 });