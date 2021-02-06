const slides = document.querySelectorAll('.slide');

const auto = true;
const intervalTime = 7000;
let slideInterval;

const nextSlide = () => {
    const current = document.querySelector('.current');
    // remove the currant class
    current.classList.remove('current');
    // check for next slide 
    if (current.nextElementSibling) {
        // add currant to the next sibling
        current.nextElementSibling.classList.add('current')
    } else {
        //add currant to start
        slides[0].classList.add('current')

    }
    setTimeout(() => current.classList.remove('current'))
}

const prevSlide = () => {
    const current = document.querySelector('.current');
    // remove the currant class
    current.classList.remove('current');
    // check for next slide 
    if (current.previousElementSibling) {
        // add currant to the next sibling
        current.previousElementSibling.classList.add('current')
    } else {
        //add currant to last
        slides[slides.length - 1].classList.add('current')
    }
    setTimeout(() => current.classList.remove('current'))
}
// auto slide
if (auto) {
    // auto slider
    slideInterval = setInterval(nextSlide, intervalTime);
}


