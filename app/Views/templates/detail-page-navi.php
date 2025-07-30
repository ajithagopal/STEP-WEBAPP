<div class="product-lineup-tabs">
    <?php
    if($detailPageNaviActive == 'gc') {
        echo '<a href="javascript:void(0)" title="General Communication" class="active">General Communication</a>';
    } else {
        echo '<a href="general-communication-unlimited" title="General Communication">General Communication</a>';
    }

    if($detailPageNaviActive == 'wp') {
        echo '<a href="javascript:void(0)" title="Working Professionals" class="active">Working Professionals</a>';
    } else {
        echo '<a href="working-professional-unlimited" title="Working Professionals">Working Professionals</a>';
    }

    if($detailPageNaviActive == 'ep') {
        echo '<a href="javascript:void(0)" title="Exam Preparation" class="active">Exam Preparation</a>';
    } else {
        echo '<a href="exam-preparation-unlimited" title="Exam Preparation">Exam Preparation</a>';
    }

    if($detailPageNaviActive == 'ielts') {
        echo '<a href="javascript:void(0)" title="IELTS" class="active">IELTS</a>';
    } else {
        echo '<a href="ielts-preparation-crash-course" title="IELTS">IELTS</a>';
    }
    ?>
</div>