document.addEventListener( 'DOMContentLoaded', function () {
    new Splide('#slider3', {
      type: 'loop',
      perPage: 2,
      focus: 'center',
      autoplay: true,
      interval: 2000,
      flickMaxPages: 3,
      updateOnMove: true,
      pagination: false,
      throttle: 300,
      breakpoints: {
        1200: {
            perPage: 4,
           
          },
          991: {
            perPage: 3,
         
          },
          768: {
            perPage: 2,
         
          },
          500: {
            perPage: 1,
          }
      }
    }).mount();

  });