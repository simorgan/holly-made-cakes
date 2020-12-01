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
        // ------------Gallery scroll to scroll box
        // if (windowPosition > 350) {
        //     $('#celebrate-cake').addClass("image-box-scroll");
        // }
        // if (windowPosition > 1050) {
        //     $('#wedding-cake').addClass("image-box-scroll");
        // }
        // if (windowPosition > 1780) {
        //     $('#cup-cake').addClass("image-box-scroll");
        // }
        // if (windowPosition > 2480) {
        //     $('#other-cake').addClass("image-box-scroll");
        // }
    })
    //scroll function end-------






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
        $.each(contactDetails, function (key, value) {
            if (value == null || value == '') {
                var test = '#' + key;
                $(test).css("display", "block");
                submit == false;
                event.preventDefault();
            } else {
                var test2 = '#' + key;
                $(test2).css("display", "none");
                submit = true;
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
        if (submit === true && tcsubmit === true) {
            $('#contactFormDisplay').css("display", "none");
            $('#confirmHidden').css("display", "block")


        }



    })
    // contact form validation end--------
})
// document ready end

