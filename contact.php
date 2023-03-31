<?php

    include './server/config.php';
    include './include/header.php';
?>
<div class="container">
    <div>
        <h1 class="text-center pt-3">Contact Us</h1>
    </div>
    <form onsubmit="return false" action=".\server/server.php"  method="POST" id="contact-form"> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="cont-name" name="cont-name" placeholder="Josh Watson">
            <div id="cname-error" class="error"></div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="cont-email" name="cont-email" placeholder="name@example.com">
            <div id="cemail-error" class="error"></div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mob No.</label>
            <input type="number" class="form-control" id="cont-number" name="cont-number" placeholder="+919874561238" >
            <div id="cmobile-error" class="error"></div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="cont-message" name="cont-message" rows="3"></textarea>
        </div>
        <button class="btn-submit" id="btn-contact">Submit</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#contact-form").submit(function(){
        var form=$(this);

        document.getElementById('cname-error').innerHTML="";
        document.getElementById('cemail-error').innerHTML="";
        document.getElementById('cmobile-error').innerHTML="";
        if(document.getElementById('cont-name').value==""){
            document.getElementById('cname-error').innerHTML="*please enter your name";
        }else if(document.getElementById('cont-email').value ==""){
            document.getElementById('cemail-error').innerHTML="*please enter your email";
        }else if(document.getElementById('cont-number').value ==""){
            document.getElementById('cmobile-error').innerHTML="*please enter your number";
        }else{
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                datatype: 'script',
                success: function(data){
                    alert('Submitted! we will back to you.');
                }
            });
        }
    });
</script>
<?php
    include './include/footer.php';
?>
