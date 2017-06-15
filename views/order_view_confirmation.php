<style>
#header1{background-color:#5c8a8a; margin-right:auto;margin-left:auto;width:70%;height:20%;position:relative;text-align:center;color:white; font-size:30px;}
#confirm_box{background-color:#66b3ff; margin-right:auto;margin-left:auto;width:70%;text-align:left; }
#backbox{background-color:green;border:2px solid black;width:80%;margin-left:auto;margin-right:auto;text-align:center;}
#confirmation_box{font-size:35px;background-color:white;text-align:center; } #total_price{font-size:35px;color:black;background-color:white;}
</style>


<br><br><br>
<div id='confirmation_box'> YOUR ORDER </div> <br>

<div id='backbox'>
    <br>
<form action='next_page.php' method='post'>
<?php $total_price = 0; if (!empty($array1)) { foreach($all_specials as $all_special) { foreach($array1 as $array1_item) { if ($all_special['id'] == $array1_item) { ?> <div id='confirm_box'>
    Quantity: <?= $quantities1[$array1_item] ?><br> Deal: <?= $all_special['item_name'] ?><input type='hidden' name=deal_chosen_name[] value= <?= str_replace(' ', '', $all_special['item_name']) ?> > <br>Items: <?= $all_special['items']?><br>Choose drinks: <br> <?php for ($j=0;$j < $quantities1[$array1_item] * $all_special['numb_drinks'];$j++){ ?>
    <select name='drinks[]'><?php foreach($drinks as $drink): ?> <option value="<?= $drink['name'] ?>"><?= $drink['name'] ?></option> <?php endforeach; ?></select> <?php } ?><br> 
    Price: $ <?php $total_price += $quantities1[$array1_item] * $all_special['regular_price']; print($quantities1[$array1_item] * $all_special['regular_price']); ?><br><select name='deal_chosen[]'><option value=<?= $array1_item?>> <?=$array1_item?></option> </select>   </div><br> <?php  } } } } ?>
<br>    
<?php if (!empty($array2)) { foreach($all_foods as $all_food) { foreach($array2 as $array1_item) { if ($all_food['food_id'] == $array1_item) { ?> <div id='confirm_box'>
    Quantity: <?= $quantities2[$array1_item] ?><br> Food Item: <?= $all_food['name'] ?><input type='hidden' name='food_chosen_name[]' value= <?= str_replace(' ', '', $all_food['name']) ?> ><br>Price: $ <?php $total_price += $quantities2[$array1_item] * $all_food['price']; print($quantities2[$array1_item] * $all_food['price']); ?><br><select name='food_chosen[]'><option value=<?= $array1_item?> ><?= $array1_item?></option> </select>   </div> <?php } } } } ?>
<br><br>
<p id='total_price'> Total Price: $ <?= $total_price ?> </p><br>
<button type='submit' id='buttons'> NEXT -> </button>
</form>

</div>