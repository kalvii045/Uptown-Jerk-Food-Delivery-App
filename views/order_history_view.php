<div id='current_orders_list'> 

<table cellspacing='25'> 
<tr><td> Food names </td> <td> Deal names </td><td> First Name </td><td> Last Name </td> <td> Address </td> <td> Unit # </td><td> Email address </td><td> Phone Number</td></tr>
<?php foreach($all_order as $order){ ?><tr><td> <?= $order['food_ids'] ?></td> <td> <?= $order['deal_ids'] ?> </td><td> <?= $order['first_name'] ?> </td><td> <?= $order['last_name'] ?> </td>
        <td> <?= $order['address'] ?> </td> <td> <?= $order['Unit_numb'] ?> </td> <td> <?= $order['email_addr'] ?> </td> <td> <?= $order['phone_numb'] ?> </td><td><button value=<?= $order['id'] ?> onclick="remover()" > Remove </button></td></tr><?php } ?>   

</table>

<script> 
    $("button").click(function(){
        var fired_button = $(this).val();
        var parameters = {button1:fired_button}; 
        $.getJSON("remover.php", parameters)
        .done(function(data,textStatus,jqXHR){
        }); 
    }); 

</script>
</div>