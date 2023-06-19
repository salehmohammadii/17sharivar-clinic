document.addEventListener( 'DOMContentLoaded', function () {
    new Splide('#slider1', {
      type: 'loop',
      perPage: 4,
      focus: 'left',
      autoplay: true,
      interval: 50000,
      flickMaxPages: 4,
      updateOnMove: true,
      pagination: false,
      throttle: 300,

      
      breakpoints: {
        1200: {
            perPage: 4,
           
          },
          991: {
            perPage: 2,
         
          },
          768: {
            perPage: 1,
         
          },
          500: {
            perPage:1,
          }
      }
    }).mount();



  });
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide('#slider2', {
      type: 'loop',
      perPage: 3,
      focus: 'left',
      autoplay: true,
      interval: 20000,
      flickMaxPages: 3,
      updateOnMove: true,
      pagination: false,
      throttle: 300,
      nav:true,
      breakpoints: {
          1200: {
              perPage: 3,
             
            },
            991: {
              perPage: 1,
           
            },
            768: {
              perPage: 1,
           
            },
            500: {
              perPage: 1,
            }
      }
    }).mount();
  });