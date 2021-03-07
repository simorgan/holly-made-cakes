$(document).ready(function () {
    $(document).scroll(function () {
        // sticky nav start
        var scrollVal = $(this).scrollTop();
        // console.log(scrollVal);
        if (scrollVal > 177) {
            $('#sticky-main-navbar').css({ 'position': 'fixed', 'top': '0px', 'width': '100%' })
        } else {
            $('#sticky-main-navbar').css({ 'position': 'static', 'top': 'auto' })
        }
        // sticky nav end
        // holly and cakes title move into view start
        var titlePos = $('.meet-holly-title').offset().top - window.scrollY - 70;
        var cakeTitlePos = $('.cakes-title').offset().top - window.scrollY - 70;
        if (titlePos < 5) {
            $('.meet-holly-title').css("right", 0)

        } else {
            $('.meet-holly-title').css("right", titlePos)

        }
        if (cakeTitlePos < 5) {
            $('.cakes-title').css("left", 0)
        } else {
            $('.cakes-title').css("left", cakeTitlePos)
        }
        // holly and cakes title move into view end.

    })
})