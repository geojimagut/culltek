<div class="top-bar">
        <div class="side-one">
        <p>MANAGE</p>
        </div>
        <div class="side-two">
            <div class="holder">
            <?php include('include/DbConfig.php'); 
                $id=$_SESSION['det'];
                $result=$conn->query("select username from user where id='$id' limit 1 ");
                $row=mysqli_fetch_assoc($result);
                echo "<span id='show-log'onclick='showProfile()'>".$username=$row['username']." <!--i class='fa fa-angle-down'></i--> </span>";
            ?>
            <div id="shown-log">
                <a href="index.php?link=<?php echo 'profile'?>">profile <i class="fa fa-user"></i></a>
                <label id="logout">logout <i class="fa fa-power-off"></i> </label>
            </div>
            </div>
            
        </div>
</div>
<!-- jquery linsk -->
<script src="../assets/jquery/jquery.js"></script>
<script>
    function showProfile(){
        var shown=document.getElementById('shown-log')
        if(shown.style.display==='block'){
            shown.style.display='none'
        }else{
            shown.style.display='block' 
        }
    }
    $('#logout').on('click', function(){
        $.ajax({
            url:'handler.php?action=logout',
            method:'POST',
            success:function(resp){
                $('#logout').html(resp)
            }
        })
    })
</script>