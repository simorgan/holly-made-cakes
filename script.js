$(document).ready(function () {

    $(document).scroll(function () {
        var windowPosition = scrollY
        // meet-holly h1 move with scroll start
        if (windowPosition < 793) {
            $('.meet-holly').css("right", Math.max(446 - window.scrollY / 2 + 30))
        } if (windowPosition > 793) {
            $('.meet-holly').css("right", 80)
        }
        // meet-holly h1 move with scroll end
        //  cakes h1 move with scroll start
        if (windowPosition < 1580) {
            $('.cakes').css("left", Math.max(446 - window.scrollY / 4 + 30))
        } if (windowPosition > 1580) {
            $('.cakes').css("left", 80)
        }
        //  cakes h1 move with scroll end
    })

})
