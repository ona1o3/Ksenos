const house = document.querySelector('.house');
const text = document.querySelector('.text-animation');
    window.addEventListener('scroll', function() {
        if (document.documentElement.scrollTop - text.offsetTop >= 300) {
            text.style.left = 0;
            text.style.opacity = 1;
        } else {
            text.style.left = '-300px';
            text.style.opacity = 0;
        }
        
        if (document.documentElement.scrollTop - house.offsetTop >= 350) {
        house.style.right = 0;
        house.style.opacity = 1;
        } else {
        house.style.right = '-300px';
        house.style.opacity = 0;
    }
    });