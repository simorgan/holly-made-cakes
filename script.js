$(document).ready(function () {

    $(window).scroll(function () {
        var scrollVal = $(this).scrollTop();
        if (scrollVal > 177) {
            $('#sticky-main-navbar').css({ 'position': 'fixed', 'top': '0px', 'width': '100%' })
            // $('#page-section').css('padding-top', '50px')
        } else {
            $('#sticky-main-navbar').css({ 'position': 'static', 'top': 'auto' })
        }

    })

    var windowWidth = $(window).width()

    // console.log(windowWidth);


    // moving the page titles in from the side    
    $(document).scroll(function () {
        var windowPosition = scrollY

        // meet-holly h1 move with scroll start
        if (windowWidth > 1200) {
            // console.log('over 1200', windowPosition);
            if (windowPosition < 905) {
                $('.meet-holly').css("right", Math.max(500 - window.scrollY / 2 + 30))
            } if (windowPosition > 905) {
                $('.meet-holly').css("right", 80)
            }
            // meet-holly h1 move with scroll end
            //  cakes h1 move with scroll start
            if (windowPosition < 1580) {
                $('.cakes').css("left", Math.max(446 - window.scrollY / 4 + 30))
            } if (windowPosition > 1580) {
                $('.cakes').css("left", 80)
            }
        }
        if (windowWidth < 1200) {
            // console.log('under 1200', windowPosition);
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
            // console.log(windowPosition)
            //  cakes h1 move with scroll end
        } if (windowWidth < 900) {
            // console.log('under 900', windowPosition);
            // console.log(windowPosition)
            // console.log('window width is', windowWidth)
            if (windowPosition < 1180) {
                $('.meet-holly').css("right", Math.max(570 - window.scrollY / 2 + 30))
            } if (windowPosition > 1180) {
                $('.meet-holly').css("right", 10.5)
            }
            // meet-holly h1 move with scroll end
            //  cakes h1 move with scroll start
            if (windowPosition < 1975) {
                $('.cakes').css("left", Math.max(570 - window.scrollY / 4 + 30))
            } if (windowPosition > 1975) {
                $('.cakes').css("left", 106.5)
            }
        } if (windowWidth < 700) {
            // console.log('else', windowPosition);
            // console.log('window width is under 900');
            // console.log(windowPosition);
            if (windowPosition < 1180) {
                $('.meet-holly').css("right", Math.max(550 - window.scrollY / 2 + 30))
            } if (windowPosition > 1180) {
                $('.meet-holly').css("right", 10.5)
            }
            // meet-holly h1 move with scroll end
            //  cakes h1 move with scroll start
            if (windowPosition < 2300) {
                $('.cakes').css("left", Math.max(550 - window.scrollY / 4 + 30))
            } if (windowPosition > 2300) {
                $('.cakes').css("left", 125)
            }
        }








    })
    //scroll function end-------

    $("#meet-holly-link, #celebration-link ,#wedding-cakes-link, #cup-cake-link, #tray-bake-link").each(function () {
        $(this).on("click", function () {
            if (windowWidth < 900 && scrollY < 1) {
                $('#meet-holly-anchor').css("bottom", "20rem")
                $('#cakes-anchor').css("bottom", "31rem")
                $('#wedding-cakes-anchor').css("bottom", "31rem")
                $('#cup-cakes-anchor').css("bottom", "31rem")
                $('#tray-bake-anchor').css("bottom", "31rem")

            } else {
                $('#meet-holly-anchor').css("bottom", "3rem")
                $('#cakes-anchor').css("bottom", "3rem")
                $('#wedding-cakes-anchor').css("bottom", "3rem")
                $('#cup-cakes-anchor').css("bottom", "3rem")
                $('#tray-bake-anchor').css("bottom", "3rem")
            }
        })
    })




    // contact form validation start
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
    // contact form validation end--------

    $('.dropdown-coll').on('click', function () {
        $('.navbar-collapse').collapse('hide');

    });
    $('.dropdown-hide').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    })
})
// document ready end

