<div class="home-page">
<?php
if($_GET['link']=='dashboard'){
    include('dashboard.php');
}else if($_GET['link']=='apps'){
    include('apps.php');
}else if($_GET['link']=='payment'){
    include('payment.php');
}else if($_GET['link']=='profile'){
    include('profile.php');
}else{
    include('dashboard.php');
}
?>
</div>