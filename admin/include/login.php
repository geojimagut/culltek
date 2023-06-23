
    <div class="login-container">
        <div class="form-wrapper">
            
            <form id="frm-login">
                <div class="form-group answer"id="response"></div>
                <div class="form-group">
                    <input type="text"class="form-control" name="username" placeholder="Username"required>
                </div>
                <div class="form-group">
                    <input type="password"class="form-control" name="password" placeholder="Password"required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">LOGIN</button>
                    </div>  
            </form>
        </div>
    </div>
    <!-- jquery linsk -->
    <script src="../assets/jquery/jquery.js"></script>
<script>
    $(document).ready(function(){
        $('#frm-login').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url:'handler.php?action=login',
            method:'POST',
            data:$('#frm-login').serialize(),
            success:function(resp){
                $('#response').html(resp)
                setTimeout(() => {
                    $('#response').html('')
                }, 2500);
            }
        })
    })
    })
</script>