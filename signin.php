<?php
    include './server/config.php';
    include './include/header.php';
    $query="SELECT * FROM register";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
?>

<div class="col-lg-4 col-6 mx-auto justify-content-center py-3">
    <h1>Sign In</h1>
    <form onsubmit="return false" action=".\server/server.php" method="POST" id="signin-form">
        <div class="mb-3">
            <label for="username" class="label">Username:</label>
            <input type="text" id="username" name="username" class="input" placeholder="username">
            <div id="name-error" class="error"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="label">Password:</label>
            <input type="password" id="password" name="password" class="input" placeholder="password">
            <div id="password-error" class="error"></div>
        </div>
        <input type="submit" name="btn-submit" id="btn-submit" class="btn-submit" value="Sign In">
    </form>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#signin-form").submit(function(){
    // document.getElementById('btn-submit').addEventListener('click',function(){
        var form=$(this);
        document.getElementById('name-error').innerHTML='';
        document.getElementById('password-error').innerHTML='';
        if (document.getElementById('username').value==""){
            document.getElementById('name-error').innerHTML='*please enter username';
        }else if(document.getElementById('password').value==""){
            document.getElementById('password-error').innerHTML='*please enter password';
        }else{
            if((document.getElementById('username').value) == "'.$row['Username'].'" & (document.getElementById('password').value) == "'.$row['Password'].'"){
                alert('Welcome! Sign In Successfully.');
                document.getElementById('username').value='';
                document.getElementById('password').value='';
            }else{
                alert('Enter valid username and password');
                document.getElementById('username').value='';
                document.getElementById('password').value='';
            }
        }
    });
</script>
<?php
    include './include/footer.php';
?>