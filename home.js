const navbar = document.getElementById('navbar');
  
    
    window.onscroll = function () {
     
      const scrollPosition = window.scrollY;
  
      
      if (scrollPosition > 100) {
        
        navbar.style.backgroundColor = '#3f2418';
        navbar.style.transition = 'background-color 0.5s ease';
        navbar.style.paddingTop = '2px';
      } else {
        
        navbar.style.backgroundColor = 'transparent';
        navbar.style.transition = 'background-color 0.5s ease';
        navbar.style.paddingTop = '6px';
      }
    };