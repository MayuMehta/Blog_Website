<?php
    include './server/config.php';
    include './include/header.php';
?>

<div class="container col-8 py-3">
    <h1 class="text-center">Registration</h1>
    <form onsubmit="return false" action=".\server/server.php" method="POST" id="register-form">
        <div class="mb-3" >
            <label for="username" class="label">Username:</label><br>
            <input type="text" id="username" name="username" class="input" required>
        </div>
        <div class="mb-3">
            <label for="email" class="label">Email:</label><br>
            <input type="email" id="email" name="email" class="input" required>
        </div>
        <div class="mb-3">
            <label for="mobno" class="label">Mob No:</label><br>
            <input type="text" id="mobno" name="mobno" class="input" required>
        </div>
        <div class="mb-3">
            <label for="password" class="label">Password:</label><br>
            <input type="password" id="password" name="password" class="input" required>
        </div>
        <div class="mb-3">
            <label for="confirm-password" class="label">Confirm Password:</label><br>
            <input type="password" id="confirm-password" name="confirm-password" class="input" required>
        </div>
        <button class="btn-submit">Register</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
    $("#register-form").submit(function(){
        var form=$(this);
        if(document.getElementById('password').value===document.getElementById('confirm-password').value){
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                datatype: 'script',
                success: function(data){
                    alert('Registration Successfully.');
                }
            });
        }else{
            alert("Password and confirm password should be same.")
        }
            
    });
</script>
<?php
    include './include/footer.php';
?>