const slides = document.querySelectorAll('.slide');
// **const for manual buttons if needed**
// const next = document.querySelector('#next');
// const prev = document.querySelector('#prev');
const auto = true;
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
    const current = document.querySelector('.current');
    // remove the currant class
    current.classList.remove('current');
    // chaeck for next slide 
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
    // chaeck for next slide 
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


// **Functions for manual buttons if needed**
//add button events 
// next.addEventListener('click', e => {
//     nextSlide();
// })
// prev.addEventListener('click', e => {
//     prevSlide();
// })

