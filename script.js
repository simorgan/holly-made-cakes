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


    var windowWidth = $(window).width() // width of the window
    $("#meet-holly-link, #celebration-link ,#wedding-cakes-link, #cup-cake-link, #tray-bake-link").each(function () {
        $(this).on("click", function () {
            if ($(document).scrollTop() < 177) { //set anchorPos when there is no header
                var anchorPos = $(this).offset().top - window.scrollY + 70;
                console.log('header is shown');
            } else {
                var anchorPos = $(this).offset().top - window.scrollY + 188;
                console.log('header is not shown');
            }

            $('#meet-holly-anchor').css("bottom", anchorPos)
            $('#cakes-anchor').css("bottom", anchorPos)
            $('#wedding-cakes-anchor').css("bottom", anchorPos)
            $('#cup-cakes-anchor').css("bottom", anchorPos)
            $('#tray-bake-anchor').css("bottom", anchorPos)
            // $(this).css("bottom", anchorPos);

            // if (windowWidth < 900 && scrollY < 1) {
            //     $('#meet-holly-anchor').css("bottom", "20rem")
            //     $('#cakes-anchor').css("bottom", "31rem")
            //     $('#wedding-cakes-anchor').css("bottom", "31rem")
            //     $('#cup-cakes-anchor').css("bottom", "31rem")
            //     $('#tray-bake-anchor').css("bottom", "31rem")

            // } else {
            //     $('#meet-holly-anchor').css("bottom", "3rem")
            //     $('#cakes-anchor').css("bottom", "3rem")
            //     $('#wedding-cakes-anchor').css("bottom", "3rem")
            //     $('#cup-cakes-anchor').css("bottom", "3rem")
            //     $('#tray-bake-anchor').css("bottom", "3rem")
            // }
        })
    })




    // contact form validation start------------------------
    $('#submitContact').click(function (event) {
        var submit = false;
        var tcsubmit = false;
        // contact details object
        var contactDetails = {
            name: $('#inputName').val(),
            contactNum: $('#inputContactNum').val(),
            email: $('#inputEmail').val(),
            message: $('#inputMessage').val()
        }
        // chech through form for empty fields
        var count = 0;
        $.each(contactDetails, function (key, value) {
            if (value == null || value == '') {
                var test = '#' + key;
                $(test).css("display", "block");
                submit == false;
                event.preventDefault();
            } else {
                var test2 = '#' + key;
                $(test2).css("display", "none");
                count++

            }
        })
        // check that terms of service are agreed to
        if ($(checkBox).is(':checked')) {
            $('#noCheck').css("display", "none")
            tcsubmit = true;
        }
        else {
            $('#noCheck').css("display", "block")
            tcsubmit = false;
            event.preventDefault();
        }
        var timeOut;
        // confirm contact has been sent. 
        if (tcsubmit === true && count >= 4) {
            $('#contactFormDisplay').css("display", "none");
            $('#confirmHidden').css("display", "block")

        }
    })
    // contact form validation end----------------------

    $('.dropdown-coll').on('click', function () {
        $('.navbar-collapse').collapse('hide');

    });
    $('.dropdown-hide').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    })
})
// document ready end

