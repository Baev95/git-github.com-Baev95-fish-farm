const pricesSliderCheck = document.querySelectorAll('.prices__slider');
if (pricesSliderCheck.length > 0) {
  const namesTabs = document.querySelector('.prices__slider').dataset.categories;
  const namesTabsArray = namesTabs.split(',');
  const pricesSlideTitle = document.querySelectorAll('.prices__slide-title');

  for (let i = 0; i < pricesSlideTitle.length; i += 1) {
    pricesSlideTitle[i].textContent = namesTabsArray[i];
  }

  const pricesSlider = new Swiper('.prices__slider', {
    autoHeight: true,
    pagination: {
      el: ".prices__slider-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<button class="btn work__btn prices__slider-btn ' + className + '">' + `<span class="btn__text">${namesTabsArray[index]}</span>` + "</button>";
      },
    },
    
    
 
  });
}

const specialistSliderCheck = document.querySelectorAll('.swiper__specialist');
if (specialistSliderCheck.length > 0) {
  specialistSliderCheck.forEach((slider) => {
    const swiperCommet = new Swiper(slider, {
      direction: 'horizontal',
  
      effect: 'slide',
      navigation: {
        nextEl: '.swiper-button-next--specialist',
        prevEl: '.swiper-button-prev--specialist',
      },
      spaceBetween: 10,
      slidesPerView: 1,
    
      scrollbar: {
        el: '.swiper-scrollbar--specialist',
        clickable: true,
        dragSize: 47,
        draggable: true,
      },
      breakpoints: {
        1250: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        900: {
          slidesPerView: 3,
          
        
        },
        650: {
          slidesPerView: 2,
          
        },
        330: {
          slidesPerView: 1.03,
          
        }
      },

    });
  });
}
const commentSliderCheck = document.querySelectorAll('.swiper__comment');
if (commentSliderCheck.length > 0) {
  commentSliderCheck.forEach((slider) => {
    const swiperCommet = new Swiper(slider, {
      direction: 'horizontal',
  
      effect: 'slide',
      navigation: {
        nextEl: '.swiper-button-next--comment',
        prevEl: '.swiper-button-prev--comment',
      },
      scrollbar: {
        el: '.swiper-scrollbar--comment',
        clickable: true,
        dragSize: 47,
        draggable: true,
      },
      spaceBetween: 40,
      slidesPerView: 1,
      autoHeight: true,
    
      breakpoints: {
        1250: {
          slidesPerView: 2.15,
        
        },
        900: {
          slidesPerView: 2,
        
        },
        650: {
          slidesPerView: 1.5,
        
        }
      },

    });
  });
}


const clinicSliderCheck = document.querySelectorAll('.swiper__clinic');
if (clinicSliderCheck.length > 0) {
  clinicSliderCheck.forEach((slider) => {
    const swiperClinic = new Swiper(slider, {
    direction: 'horizontal',

    effect: 'slide',
    navigation: {
    nextEl: '.swiper-button-next--clinic',
    prevEl: '.swiper-button-prev--clinic',
    },
    scrollbar: {
    el: '.swiper-scrollbar--clinic',
    clickable: true,

    draggable: true,
    },

    spaceBetween: 10,
    slidesPerView: 1.12,
    autoHeight: true,
    breakpoints: {
    1440: {
    slidesPerView: 3,
    spaceBetween: 40,
    },
    950: {
    slidesPerView: 2,

    },
    750: {
    slidesPerView: 1.5,
    }
    },

    });
  });
}
const certificateSliderCheck = document.querySelectorAll('.swiper__certificate');
if (certificateSliderCheck.length > 0) {
  certificateSliderCheck.forEach((slider) => {
    const swiperCertificate = new Swiper(slider, {
    direction: 'horizontal',

    effect: 'slide',
    navigation: {
    nextEl: '.swiper-button-next--certificate',
    prevEl: '.swiper-button-prev--certificate',
    },
    scrollbar: {
    el: '.swiper-scrollbar--certificate',
    clickable: true,

    draggable: true,
    },

    spaceBetween: 10,
    slidesPerView: 1,
    breakpoints: {
      1256: {
        slidesPerView: 4,
      },
      880: {
        slidesPerView: 3,
      },
      550: {
        slidesPerView: 2,
      },
    }

    });
  });
}
const licenseSliderCheck = document.querySelectorAll('.swiper__license');
if (licenseSliderCheck.length > 0) {
  licenseSliderCheck.forEach((slider) => {
    const swiperLicense = new Swiper(slider, {
      direction: 'horizontal',
  
  effect: 'slide',
  navigation: {
    nextEl: '.swiper-button-next--license',
    prevEl: '.swiper-button-prev--license',
  },
  scrollbar: {
    el: '.swiper-scrollbar--license',
    clickable: true,

    draggable: true,
  },
  spaceBetween: 40,
  slidesPerView: 1,
  autoHeight: true,

    });
  });
}

const articleSliderCheck = document.querySelectorAll('.articles__slider');
['resize','load'].forEach((event) => {
 
  window.addEventListener(event, function() {

    if (window.innerWidth < 900) {
      if (articleSliderCheck.length > 0) {
        articleSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.articles__slider-wrapper');
          const articleSlides = slider.querySelectorAll('.articles__slide');
    
          slider.classList.add('swiper');
          sliderWrapper.classList.add('swiper-wrapper');
          articleSlides.forEach((slide) => {
            slide.classList.add('swiper-slide');
          });
    
          const swiperarticles = new Swiper(slider, {
            slidesPerView: 1,
            spaceBetween: 15,
            navigation: {
              nextEl: '.swiper-button-next-articles',
              prevEl: '.swiper-button-prev-articles',
            },
            scrollbar: {
              el: '.swiper-scrollbar-articles',
              clickable: true,
              draggable: true,
            },
          });
        });
      }
    } else {
      if (articleSliderCheck.length > 0) {
        articleSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.articles__slider-wrapper');
          const articleSlides = slider.querySelectorAll('.articles__slide');
          slider.classList.remove('swiper');
          sliderWrapper.classList.remove('swiper-wrapper');
          articleSlides.forEach((slide) => {
            slide.classList.remove('swiper-slide');
            slide.removeAttribute("style");
          });
        });
      }
    }  
  });
});

const more__articleSliderCheck = document.querySelectorAll('.more__article__slider');
['resize','load'].forEach((event) => {
 
  window.addEventListener(event, function() {

    if (window.innerWidth < 900) {
      if (more__articleSliderCheck.length > 0) {
        more__articleSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.more__article__slider-wrapper');
          const more__articleSlides = slider.querySelectorAll('.more__article__slide');
    
          slider.classList.add('swiper');
          sliderWrapper.classList.add('swiper-wrapper');
          more__articleSlides.forEach((slide) => {
            slide.classList.add('swiper-slide');
          });
    
          const swiperMore__articles = new Swiper(slider, {
            slidesPerView: 1,
            spaceBetween: 15,
            navigation: {
              nextEl: '.swiper-button-next-more__article',
              prevEl: '.swiper-button-prev-more__article',
            },
            scrollbar: {
              el: '.swiper-scrollbar-more__article',
              clickable: true,
              draggable: true,
            },
          });
        });
      }
    } else {
      if (more__articleSliderCheck.length > 0) {
        more__articleSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.more__article__slider-wrapper');
          const more__articleSlides = slider.querySelectorAll('.more__article__slide');
          slider.classList.remove('swiper');
          sliderWrapper.classList.remove('swiper-wrapper');
          more__articleSlides.forEach((slide) => {
            slide.classList.remove('swiper-slide');
            slide.removeAttribute("style");
          });
        });
      }
    }  
  });
});
 



const article_more__articleSliderCheck = document.querySelectorAll('.article_more__article__slider');
['resize','load'].forEach((event) => {
 
  window.addEventListener(event, function() {

    if (window.innerWidth < 900) {
      if (article_more__articleSliderCheck.length > 0) {
        article_more__articleSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.article_more__article__slider-wrapper');
          const more__articleSlides = slider.querySelectorAll('.article_more__article__slide');
    
          slider.classList.add('swiper');
          sliderWrapper.classList.add('swiper-wrapper');
          more__articleSlides.forEach((slide) => {
            slide.classList.add('swiper-slide');
          });
    
          const swiperMore__articles = new Swiper(slider, {
            slidesPerView: 1,
            spaceBetween: 15,
            navigation: {
              nextEl: '.swiper-button-next-article_more__article',
              prevEl: '.swiper-button-prev-article_more__article',
            },
            scrollbar: {
              el: '.swiper-scrollbar-article_more__article',
              clickable: true,
              draggable: true,
            },
          });
        });
      }
    } else {
      if (article_more__articleSliderCheck.length > 0) {
        article_more__articleSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.article_more__article__slider-wrapper');
          const more__articleSlides = slider.querySelectorAll('.article_more__article__slide');
          slider.classList.remove('swiper');
          sliderWrapper.classList.remove('swiper-wrapper');
          more__articleSlides.forEach((slide) => {
            slide.classList.remove('swiper-slide');
            slide.removeAttribute("style");
          });
        });
      }
    }  
  });
});

const blogSliderCheck = document.querySelectorAll('.blog-swiper');
['resize','load'].forEach((event) => {
 
  window.addEventListener(event, function() {

    if (window.innerWidth > 600) {
      if (blogSliderCheck.length > 0) {
        blogSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.blog-wrapper');
          const blogSlides = slider.querySelectorAll('.blog-slide');
    
          slider.classList.add('swiper');
          sliderWrapper.classList.add('swiper-wrapper');
          blogSlides.forEach((slide) => {
            slide.classList.add('swiper-slide');
          });
    
          const swiperBlog = new Swiper(slider, {
            slidesPerView: 1,
            spaceBetween: 15,
            navigation: {
              nextEl: '.swiper-button-next-blog',
              prevEl: '.swiper-button-prev-blog',
            },
            slidesPerGroup: 1,
            pagination: {
                el: '.swiper-pagination-blog',
                clickable: true,
                renderBullet: function (index, className) {
                  return '<span class="' + className + '">' + (index + 1) + "</span>";
                },
              },
          });
        });
      }
    } else {
      if (blogSliderCheck.length > 0) {
        blogSliderCheck.forEach((slider) => {
          const sliderWrapper = slider.querySelector('.blog-wrapper');
          const blogSlides = slider.querySelectorAll('.blog-slide');
          slider.classList.remove('swiper');
          sliderWrapper.classList.remove('swiper-wrapper');
          blogSlides.forEach((slide) => {
            slide.classList.remove('swiper-slide');
            slide.removeAttribute("style");
          });
        });
      }
    }  
  });
});

const mapCheck = document.getElementById('map_container');
if (mapCheck != null) {
  let options_map = {
    once: true,
    passive: true,
    capture: true
  };
  mapCheck.addEventListener('click', start_lazy_map, options_map);
  mapCheck.addEventListener('mouseover', start_lazy_map, options_map);
  mapCheck.addEventListener('touchstart', start_lazy_map, options_map);
  mapCheck.addEventListener('touchmove', start_lazy_map, options_map);
  let map_loaded = false;
  function start_lazy_map() {
    if (!map_loaded) {
  
      ymaps.ready(init);
  
    function init() {
        const map = document.querySelector('#map');
  
        if (map) {
            var myMap = new ymaps.Map("map", {
                center: [47.217641, 39.702284],
                zoom: 16,
            });
            var myPlacemark = new ymaps.Placemark([47.217641, 39.702284], {}, {
                iconLayout: 'default#image',
  
            });
  
            myMap.geoObjects.add(myPlacemark);
        }
    }
  
    }
  
  
  }

} 
  

const show_moreCheck = document.getElementById('show-more');
if (show_moreCheck != null) {
  const blogItem = document.querySelectorAll('.blog-item');
  show_moreCheck.addEventListener('click', function () {
    let count = 0; 
    blogItem.forEach((slide) => {
      if (!slide.classList.contains('blog-active')) {
        if (count < 6) { 
          slide.classList.add('blog-active');
          count++; 
        }
      }
    })
    
  })
}




let btn__text = document.querySelectorAll('.btn__text');
if (btn__text.length>0) {
  btn__text.forEach(function (item, i) {
    item.addEventListener('click', function (e) {
      let price__mobile = document.getElementById('#prices__slider--mobile');
     let current__btn__text = this.innerHTML;
     let prices__slider_title = document.querySelector('.prices__slider--mobile'); 
     let prices__slider = document.querySelector('.prices__slider-pagination');
     price__mobile.innerHTML = current__btn__text;
    
     prices__slider_title.classList.remove('panel-active');
     prices__slider.classList.remove('active');
    })
  }) 
}



var panelItem = document.querySelectorAll('.panel-title'),
  bodyItem = document.querySelectorAll('.panel-body');
panelItem.__proto__.forEach = [].__proto__.forEach;
var activePanel;

panelItem.forEach(function (item, i, panelItem) {
  item.addEventListener('click', function (e) {
    this.classList.add('panel-active');
    this.nextElementSibling.classList.add('active');
    if (activePanel) {
      activePanel.classList.remove('panel-active');
      activePanel.nextElementSibling.classList.remove('active');
    }
    activePanel = (activePanel === this) ? 0 : this;
  });
});





    
document.querySelector('.burger__menu').addEventListener('click', function () {
  document.querySelector('.burger__menu').classList.toggle("active");
  let mobile = document.querySelectorAll('.header--item--mobile');
  
  for ( i=0; i < mobile.length ; i++) {
    if (mobile[i].classList.contains('active')) {
      mobile[i].classList.remove('active'); 
    } else {
      mobile[i].className += ' active';
    }
  }
  document.querySelector('.main').classList.toggle("active");
  document.querySelector('.header').classList.toggle("active");
  document.querySelector('.header-mobile-bottom').classList.toggle("display-none");

})

const textareaChechk = document.getElementById('message')
if (textareaChechk != null) {
  const counter = document.getElementById('textarea_counter');
  const maxlength = 2000;

  textareaChechk.addEventListener('input', onInput)

function onInput(event) {
  event.target.value = event.target.value.substr(0, maxlength);
  const length = event.target.value.length;
  counter.textContent = length;
}
}



let popupBg = document.querySelector('.popup__bg');
if (popupBg != null) {
  let popup = document.querySelector('.popup'); 
let openPopupButtons = document.querySelectorAll('.open-popup'); 
let closePopupButton = document.querySelector('.close-popup'); 
openPopupButtons.forEach((button) => { 
  button.addEventListener('click', (e) => { 
      e.preventDefault();
      popupBg.classList.add('active'); 
      popup.classList.add('active'); 
  })
});
closePopupButton.addEventListener('click',() => {
  popupBg.classList.remove('active'); 
  popup.classList.remove('active');
});
document.addEventListener('click', (e) => { 
  if(e.target === popupBg) { 
      popupBg.classList.remove('active'); 
      popup.classList.remove('active');
  }
});
}

let popupBg_second = document.querySelector('.popup__bg-second');
if (popupBg_second != null) {
  let popup_second = document.querySelector('.popup-second'); 
let openPopupButtons_second = document.querySelectorAll('.open-popup-second'); 
let closePopupButton_second = document.querySelector('.close-popup-second'); 
openPopupButtons_second.forEach((button) => { 
  button.addEventListener('click', (e) => { 
      e.preventDefault();
      popupBg_second.classList.add('active'); 
      popup_second.classList.add('active'); 
  })
});
closePopupButton_second.addEventListener('click',() => {
  popupBg_second.classList.remove('active'); 
  popup_second.classList.remove('active');
});
document.addEventListener('click', (e) => { 
  if(e.target === popup_second) { 
    popupBg_second.classList.remove('active'); 
    popup_second.classList.remove('active');
  }
});

}



const anchors = document.querySelectorAll('.scroll-to')
if (anchors != null) {
  for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault()
      
      const blockID = anchor.getAttribute('href')
      
      document.querySelector(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      })
    })
  }
}

const elementShowCheck = document.querySelectorAll('.element-animation');
if (elementShowCheck.length > 0) {
  function onEntry(e) {
    e.forEach(e=>{
        e.isIntersecting && e.target.classList.add("element-show")
    }
    )
  }
  let options = {
    threshold: [.5]
  }
  , observer = new IntersectionObserver(onEntry,options)
  , elements = document.querySelectorAll(".element-animation");
  for (let e of elements)
    observer.observe(e);
}