let form_labels = document.querySelectorAll('.form_label');

form_labels.forEach(label => {

    window.addEventListener('click', function(e){   
        if (label.parentElement.contains(e.target)){
            label.style.top = -45 + 'px';
            label.style.color = "#E2C275";
            // Clicked in box
        } else{
            label.style.top = -20 + 'px';
            label.style.color = "#ccc";
            // Clicked outside the box
            if(label.parentElement.querySelector('input').value.length >= 1) {
                label.style.top = -45 + 'px';
                label.style.color = "#E2C275";
            }else {
                label.style.top = -20 + 'px';
                label.style.color = "#ccc";
            }
        }
    });

});
// js to login


/*==================== SHOW NAVBAR ====================*/
const showMenu = (headerToggle, navbarId) =>{
    const toggleBtn = document.getElementById(headerToggle),
    nav = document.getElementById(navbarId)
    
    // Validate that variables exist
    if(headerToggle && navbarId){
        toggleBtn.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
            // change icon
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle','navbar')

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))

// animation top
jQuery('document').ready(function($){
  
    var subir = $('.back-to-top');
    
    subir.click(function(e){
      e.preventDefault();
      $('html, body').animate({scrollTop: 0}, 500);
    });
    
    subir.hide();
    
    $(window).scroll(function(){
      
      if( $(this).scrollTop() > 200 ) {
        subir.fadeIn();
      } else {
        subir.fadeOut();
      }
      
    });
    
  });


