var audioElement = document.getElementById("sample-coach-call")
var isAudioElementPlaying = false
var audioCurrentTime = '00:00'
var audioDurationTime = '00:00'

$.fn.isInViewport = function() {
    if($(this).offset()){
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
    
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
    
        return elementBottom > viewportTop && elementTop < viewportBottom;
    }
};

var formatsTabs = $(".formats-tab-container a"), currentFormatsTab = 0, formatsTabInterval;

$(document).ready(function() {

    $(window).on('resize scroll', function() {
        
        if ($('.formats-tab-circle').isInViewport()) {

            $('.formats-tab-circle').addClass('animate__animated animate__zoomIn')
            var anc = $(".formats-tab-container a")

            setTimeout(() => {
                $('.formats-tab-container a[data-id="online-video-lessons"]').addClass('animate__animated animate__slideInLeft')
            }, 1000)

            setTimeout(() => {
                $('.formats-tab-container a[data-id="classroom-training"]').addClass('animate__animated animate__slideInLeft')
            }, 1500)

            setTimeout(() => {
                $('.formats-tab-container a[data-id="live-online-classes"]').addClass('animate__animated animate__slideInLeft')
            }, 2000)

            setTimeout(() => {
                $('.formats-tab-container a[data-id="one-on-one-phone-calls"]').addClass('animate__animated animate__slideInLeft')
            }, 2500)

            
            if(!formatsTabInterval) {
                formatsTabInterval = setInterval(() => {
                    currentFormatsTab++
                    if(currentFormatsTab >= formatsTabs.length) {
                        currentFormatsTab = 0
                    }
                    var target = $(formatsTabs[currentFormatsTab]).attr("data-id")
                    $(".formats-tab-container a").removeClass("active")
                    $(formatsTabs[currentFormatsTab]).addClass("active")
                    $(".formats-tab-content").removeClass("active")
                    $("#"+target).addClass("active")
                }, 3000)
            }

        }
        
        if ($('.why-step-elements').isInViewport()) { 
            if(formatsTabInterval) {
                clearInterval(formatsTabInterval)
            }
        }

    });

    var nowScrollTop = $(this).scrollTop();
    var nowScrollTopLimit = 100

    if(nowScrollTop > nowScrollTopLimit) {
        $(".top-menu").addClass("active")
    } else {
        $(".top-menu").removeClass("active")
    }

	$(window).scroll(function(){
		var nowScrollTop = $(this).scrollTop();
        if(nowScrollTop > nowScrollTopLimit) {
            $(".top-menu").addClass("active")
        } else {
            $(".top-menu").removeClass("active")
        }
	});

    // var formatsTabs = $(".formats-tab-container a"), currentFormatsTab = 0

    // var formatsTabInterval = setInterval(() => {
    //     currentFormatsTab++
    //     if(currentFormatsTab >= formatsTabs.length) {
    //         currentFormatsTab = 0
    //     }
    //     var target = $(formatsTabs[currentFormatsTab]).attr("data-id")
    //     $(".formats-tab-container a").removeClass("active")
    //     $(formatsTabs[currentFormatsTab]).addClass("active")
    //     $(".formats-tab-content").removeClass("active")
    //     $("#"+target).addClass("active")
    // }, 3000)

    $("#category-select").change(function(e) {
        var target = e.target.value
        $(".title-tabs-container .title-tabs a").removeClass("active")
        $(".title-tab-main-texts .title-tab-main").removeClass('flipNow')
        $(".title-tabs a[data-target='"+target+"']").addClass("active")
        targetTitleTabs(target)
    })

    $(".title-tabs-container .title-tabs a").click(function(e) {
        e.preventDefault()
        var target = $(this).attr("data-target")
        $(".title-tabs-container .title-tabs a").removeClass("active")
        $(".title-tab-main-texts .title-tab-main").removeClass('flipNow')
        $(this).addClass("active")
        targetTitleTabs(target)
    })

    var targetIndex = 2
    var $carousel = $('.title-tab-main-gallery').flickity({
        wrapAround: true,
        pageDots: false
    });
    $carousel.on( 'select.flickity', function( event, index ) {
        scrollProductTable(index)
    });
    $carousel.flickity('select', targetIndex)
    //https://flickity.metafizzy.co/

    $(".formats-tab-container a").click(function(e) {
        e.preventDefault()
        clearInterval(formatsTabInterval)
        var target = $(this).attr("data-id")
        $(".formats-tab-container a").removeClass("active")
        $(this).addClass("active")
        $(".formats-tab-content").removeClass("active")
        $("#"+target).addClass("active")
    })

    $(".title-tab-main-texts").on("click", ".title-tab-row-months a", function(e) {
        var offerPrice = $(this).attr("data-OfferPrice")
        var originalPrice = $(this).attr("data-OriginalPrice")
        var parent = $(this).parent()
        var parentLevel2 = parent.parent()

        parentLevel2.find('.strikeOriginalPrice').text(originalPrice)
        parentLevel2.find('.cellOfferPrice').text(offerPrice)
        parent.find("a").removeClass("active")
        $(this).addClass("active")
    })

    $("#sample-coach-call-btn").click(function(e) {
        e.preventDefault()
        if (isAudioElementPlaying) {
            audioElement.pause()
            isAudioElementPlaying = false
            $(this).removeClass("active")
        } else {
            audioElement.play()
            isAudioElementPlaying = true
            $(this).addClass("active")
        }
    })

    getAudioDuration(audioElement.duration)

    // $('[data-toggle="popover"]').popover();

    $(".popover-element").click(function(e) {
        e.preventDefault()
        $('.popover-element').popover('hide');
        $(this).popover('show')
    })

    $(".yutubeBtn").click(function(e) {
        e.preventDefault()
        var src = $(this).attr("data-src")
        $(".new-modal").addClass("open")
        $("#youtubeFrame").attr("src", src)
    })

    $(".new-modal-close").click(function(e) {
        e.preventDefault()
        $("#youtubeFrame").attr("src", "")
        $(".new-modal").removeClass("open")
    })

    $("#btnsubmit").click(function(e) {

         var name = $('#txtName').val();
    if(name == '') { $('#error_name').text(' Name is required').fadeIn('slow').delay(7000).hide(1);$('#txtName').focus();  return false;  }
    var txtEmail = $('#txtEmail').val();
    if(txtEmail == '') { $('#error_email').text(' Email is required').fadeIn('slow').delay(7000).hide(1);$('#txtEmail').focus();  return false;  }
      var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
     if(!txtEmail.match(emailReg)){ $('#error_email').text('Invalid Email format').fadeIn('slow').delay(7000).hide(1);$('#txtEmail').focus(); return false; }
    var txtPhone = $('#txtPhone').val();
    if(txtPhone == '') { $
        ('#error_phone').text(' PhoneNumber is required').fadeIn('slow').delay(7000).hide(1);$('#txtPhone').focus();  return false;  }
    var NumberRegex = /^[0-9]*$/;
      if(txtPhone.length < 10  || txtPhone.length > 12 ){$('#error_phone').text('Invalid phone number format').fadeIn('slow').delay(7000).hide(1);$('#txtPhone').focus();  return false;  } 
      if(!NumberRegex.test(txtPhone)){  $('#error_phone').text('Invalid phone number format').fadeIn('slow').delay(7000).hide(1);$('#txtPhone').focus(); return false; }


        e.preventDefault()

        var formData = {
            contact_type: $("#selContactFor").val(),
            name: $("#txtPerson").val(),
            contact_person: $("#txtName").val(),
            phone: $("#txtPhone").val(),
            email_id: $("#txtEmail").val(),
            message: $("#txtMessage").val()
        };
        var serializedData = $.param(formData);

        $.ajax({
            url: "https://api.steptest.in/send_enquiry",
            type: "POST",
            dataType: "json",
            data: serializedData,
            success: function(response) {
                if (response.status === "success") {
                    console.log("Form submitted successfully");
                    $(".contact-section-form-container").addClass("hideNow")
                    $(".contact-section-form-status").addClass("showNow")
                     setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 7000); 
                } else {
                    console.log("Form submission failed");
                    $(".contact-section-form-container").addClass("hideNow")
                    $(".contact-section-form-status").addClass("submit-error")
                     setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 7000); 
                }
            },
            error: function() {
                console.log("An error occurred while submitting the form");
            }
        });
        

    });

    $(".scrollToContactSection").click(function(e) {
        e.preventDefault()
        var top = $("#contact-section").offset().top - 70

        $('html').animate(
            {
              scrollTop: top,
            },
            800 //speed
        );

    })

})

function gotoURL(url) {
    window.location.href = url
}

function str_pad_left (string, pad, length) {
    return (new Array(length + 1).join(pad) + string).slice(-length);
}

audioElement.ontimeupdate = (event) => {
    const minutes = Math.floor(event.target.currentTime / 60);
    const seconds = Math.floor(event.target.currentTime - minutes * 60);
    audioCurrentTime = str_pad_left(minutes, '0', 2) + ':' + str_pad_left(seconds, '0', 2);
    $(".audioCurrentTime").html(audioCurrentTime)
}

function getAudioDuration(duration) {
    console.log('duration ', duration)
    // duration = Number(duration)

    const minutes = Math.floor(duration / 60);
    const seconds = Math.floor(duration - minutes * 60);
    audioDurationTime = str_pad_left(minutes, '0', 2) + ':' + str_pad_left(seconds, '0', 2);
    $(".audioDurationTime").html(audioDurationTime)
}

function targetTitleTabs(target) {
    setTimeout(() => {
        $(".title-tab-main-texts .title-tab-main[data-target='"+target+"']").addClass('flipNow')
    }, 250)

    if(target === 'IELTS') {
        $(".title-tab-row-LiveClasses div").text('Online Lessons')
        $(".title-tab-row-OnlineClasses div").text('Reference material')
    } else {
        $(".title-tab-row-LiveClasses div").text('Live Classes')
        $(".title-tab-row-OnlineClasses div").text('Online Lessons')
    }

    $("#category-select").val(target)
}

function scrollProductTable(targetIndex) {
    var targetScrollLeft = ($(".title-tab-main.flipNow").width()*targetIndex) + (targetIndex*16)
    $("div.title-tab-main-texts").animate({
        scrollLeft: targetScrollLeft
    }, 200)
}



