<style>
    #personal_details{margin-left:auto;margin-right:auto;background-color:#80bfff;color:black;width:70%;text-align:center;} #confirmation_message{margin-left:auto;margin-right:auto;background-color:white;color:black;
    width:70%;font-size:35px;} 
    
input{
    border-radius:5px; 
}
</style>

<div id='confirmation_message'> PERSONAL DETAILS </div> <br>
<div id='personal_details'><br>
        <input size='35' id = 'first_name' name='first_name' placeholder='First Name' type="text"> <br><br>
        <input size='35' id='last_name' name='last_name' placeholder="Last Name" type='text'><br><br>
        <input size='35' id= 'address' name='address' placeholder='Address' type='text'><br><br>
        <input size='35' id = 'unit#' name='unit#' placeholder='Unit#' type='text'><br><br>
        <input size='35' id = 'postal_code' name='postal_code' placeholder="Postal Code" type='text'><br><br>
        <input size='35' id = 'email_addr' name='email_addr' placeholder='Email' type='email'><br><br>
        <input size='35' id = 'phone_numb' name='phone_numb' placeholder='Phone Number' type='text'><br><br>
        <button  onclick ='submit_personal_form()'  id='buttons' name='submit1'> CONFIRM </button><br>
        <div id='error_message'> </div>
        <?php if (isset($foods) || isset($deals)) { ?> 
        <input type='hidden' id ='foods2' name='foods2' value=<?= $foods ?> > 
        <input type='hidden' id = 'deals2' name='deals2' value=<?= $deals ?> >
        <?php } ?> 
    
    <br>
</div>
<style> #confirmation_message1{margin-left:auto;margin-right:auto;text-align:center;background:white;color:black;font-size:35px;display:none;} </style>
<div id='confirmation_message1'>
    
    THANK YOU FOR YOUR ORDER! YOUR ORDER SHOULD ARRIVE WITHIN 25 MINUTES! <br> CALL 12266004906 FOR FURTHER QUESTIONS <br> AND INQUIRIES! 
    
</div>
<script>

function submit_personal_form(){
    var first_name = document.getElementById('first_name').value;
    var last_name = document.getElementById('last_name').value;
    var address = document.getElementById('address').value;
    var unit_numb = document.getElementById('unit#').value; 
    var postal_code = document.getElementById('postal_code').value;
    var email_addr = document.getElementById('email_addr').value; 
    var phone_numb = document.getElementById('phone_numb').value; 
    var foods2 = document.getElementById('foods2').value; 
    var deals2 = document.getElementById('deals2').value; 
    
    if (first_name.length==0){
        document.getElementById('error_message').innerHTML = "Please fill in missing boxes"; 
        return; 
    }
    if (last_name.length==0){
        document.getElementById('error_message').innerHTML = "Please fill in missing boxes"; 
        return; 
    }
    if (address.length==0){
        document.getElementById('error_message').innerHTML = "Please fill in missing boxes"; 
        return; 
    }
    if (postal_code.length==0){
        document.getElementById('error_message').innerHTML = "Please fill in missing boxes"; 
        return; 
    }
    if (email_addr.length==0){
        document.getElementById('error_message').innerHTML = "Please fill in missing boxes"; 
        return; 
    }
    if (phone_numb.length==0){
        document.getElementById('error_message').innerHTML = "Please fill in missing boxes"; 
        return; 
    }
    var parameters = {first_name:first_name,last_name:last_name,address:address,postal_code:postal_code,email_addr:email_addr,phone_numb:phone_numb,unit_numb:unit_numb,foods2:foods2,deals2:deals2};
    $.getJSON("next_page1.php",parameters)
        var confirmation_message1 = document.getElementById('confirmation_message1'); 
        var personal_details = document.getElementById('personal_details'); 
        var confirmation_message = document.getElementById('confirmation_message'); 
        personal_details.style.display='none';
        confirmation_message.style.display='none'; 
        confirmation_message1.style.display='block'; 
    
}
</script>