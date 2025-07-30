
$(document).ready(function() {

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

    if($(window).width() > 768) {
        var stickyTitle = new Sticky('.course-content-table-rowTitle span');
        var stickyNum = new Sticky('.course-content-table-rowNo span');
    }

    $(".course-content-tabs div.course-content-tab").click(function(e) {
        if($(window).width() > 768) {
            stickyTitle.destroy()
            stickyNum.destroy()
        }
        var id = $(this).attr("data-id")
        $(".course-content-tabs div.course-content-tab").removeClass("active")
        $(".course-content-container .course-content").removeClass("active")
        $(this).addClass("active")
        $("#"+id).addClass("active")

        if($(window).width() > 768) {
            stickyTitle = new Sticky('.course-content-table-rowTitle span');
            stickyNum = new Sticky('.course-content-table-rowNo span');
        }
    })

    var acc = document.getElementsByClassName("course-content-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            if($(window).width() > 768) {
                stickyTitle.destroy()
                stickyNum.destroy()
            }

            this.classList.toggle("course-content-accordion-active");
            var panel = this.nextElementSibling;

            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }

            if($(window).width() > 768) {
                stickyTitle = new Sticky('.course-content-table-rowTitle span');
                stickyNum = new Sticky('.course-content-table-rowNo span');
            }
        });
    }

    $('#category-select-product').on('change', function(e) {
        var value = e.target.value;
        
    })

})

 
