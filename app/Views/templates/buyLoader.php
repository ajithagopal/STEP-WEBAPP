<div class="Lmodal" style="display: none">
            <div class="centerT">
                <center><img alt="loading.." src="<?=base_url()?>/assets/images/loading.gif" /></center>
                <p>Please wait while we load the payment page. Do not close this page or click on refresh. </p>
            </div>
      </div>


<script >
	function toggleCourses(event) {
    event.preventDefault(); 
    const courseCards = document.getElementById('course-cards');
    if (courseCards.style.display === 'none') {
        courseCards.style.display = 'flex';
        courseCards.focus(); 
    } else {
        courseCards.style.display = 'none'; 
    }
}

function toggleSection(titleElement) {
    const content = titleElement.nextElementSibling;
    const arrow = titleElement.querySelector('.arrow');

    if (content.style.display === 'block') {
      content.style.display = 'none';
      arrow.style.transform = 'rotate(0deg)';
    } else {
      const allContents = document.querySelectorAll('.content');
      allContents.forEach((section) => {
        section.style.display = 'none';
      });
      const allArrows = document.querySelectorAll('.arrow');
      allArrows.forEach((arrow) => {
        arrow.style.transform = 'rotate(0deg)';
      });

      content.style.display = 'block';
      arrow.style.transform = 'rotate(180deg)';
    }
  }

 document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab-btn");
    const plans = document.querySelectorAll(".offer");
    const selector = document.querySelector(".selector");

    function updateSelector(tab) {
      const tabRect = tab.getBoundingClientRect();
      const tabsRect = document.querySelector('.tabs').getBoundingClientRect();
      const left = tabRect.left - tabsRect.left;
      const width = tabRect.width;

      selector.style.left = left + 'px';
      selector.style.width = width + 'px';
    }

    tabs.forEach(tab => {
      tab.addEventListener("click", function () {
        tabs.forEach(btn => btn.classList.remove("active"));
        plans.forEach(plan => plan.classList.remove("active"));

        this.classList.add("active");
        const target = this.getAttribute("data-target");
        const course = this.getAttribute("data-course");
        document.getElementById(target).classList.add("active");
        document.getElementById(course).classList.add("active");

        updateSelector(this);
      });
    });

    updateSelector(document.querySelector(".tab-btn.active"));
  });
</script>