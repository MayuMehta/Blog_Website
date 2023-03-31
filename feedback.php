<?php
    include './server/config.php';
    include './include/header.php';
?>

<div class="container py-3">
    <h1 class="text-center">Feedback Form</h1>
	<p>We would love to hear from you! Please fill out the form below:</p>
	<form onsubmit="return false" action=".\server/server.php" method="POST" id="feedback-form">
		<div class="pb-3">
            <label for="name" class="label">Name:</label>
            <input type="text" id="name" name="name" class="input" placeholder="John Wick">
            <div id="fname-error" class="error"></div>
        </div>
        <div class="pb-3">
            <label for="email" class="label">Email:</label>
            <input type="email" id="email" name="email" class="input" placeholder="johnwick@gmail.com">
            <div id="femail-error" class="error"></div>
        </div>
        <div class="pb-3">
            <label for="feedback" class="label">Feedback:</label>
            <textarea id="feedback" name="feedback" class="input" placeholder="message"></textarea>
            <div id="feedback-error" class="error"></div>
        </div>
		<button class="btn-submit" id="btn-feedback">Submit</button>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#feedback-form").submit(function(){
        var form=$(this);

        document.getElementById('fname-error').innerHTML="";
        document.getElementById('femail-error').innerHTML="";
        document.getElementById('feedback-error').innerHTML="";
        if(document.getElementById('name').value==""){
            document.getElementById('fname-error').innerHTML="*please enter your name";
        }else if(document.getElementById('email').value ==""){
            document.getElementById('femail-error').innerHTML="*please enter your email";
        }else if(document.getElementById('feedback').value ==""){
            document.getElementById('feedback-error').innerHTML="*please enter your message";
        }else{
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                datatype: 'script',
                success: function(data){
                    alert('Thank You for your precious Feedback! Have a nice day.🎈');
                }
            });
        }
    });
</script>
<?php
    include './include/footer.php';
?>