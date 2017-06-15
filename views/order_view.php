</div><br><br> <style> #header1{background-color:#47476b;width:50%;position:relative;text-align:left;color:white; border-radius:12px;border:2px solid white;
font-size:30px;box-shadow: 0 4px 8px 0 rgba(119, 131, 146, 1), 0 6px 20px 0 rgba(119, 131, 146, 1);font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;}
#order_chart{margin:auto;margin-left:auto;width:70%;position:relative;} #left_items{float:left;position:relative;}   
#right_items{float:right;position:relative;} #order_table{background-color:#c68c53;text-align:left;box-shadow:0 3px 6px 0 rgba(216, 150, 19, 1), 0 6px 14px 0 rgba(216, 150, 19, 1);} #price_box{background-color:black;color:white;} 
#subs{background-color:black;color:white;font-size:25px;} #header1_holder{margin-right:auto;margin-left:auto;width:70%;height:20%;}


div.table{
    display:table;
    width:100%;
    font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}
div.td{
    display:table-cell;
    text-align:left;
    height:5%;
    width:60%;
}
div.tr{
    display:table-row;
}
#submit_buttom{
    text-align:right;
    
    width:70%;
    margin-left:auto;
    margin-right:auto;
}

</style><br><br>
<div id="header1_holder">
<div id='header1'> UPTOWN JERK <br> DELIVERY MENU!  </div> </div> <br><div id='order_items'> ALL SPECIALS </div>
<form action='order.php' method='post' name='specials_order'>
<div id='order_chart'>
   <div class='table' id='order_table' >
       <?php $counter = 0; foreach($all_specials as $all_special): ; $split_items = explode('.',$all_special['items']); if ($counter %2 == 0) { ?>
       <div class='tr'> 
           <div class='td' >
               <div id='chart_items'>
              <b> <?php print($all_special['item_name']); ?> </b><br>
              <b> <?php print($all_special['description']); ?> </b><br><br>
               <?php foreach($split_items as $split_item): print($split_item); ?><br> <?php endforeach; ?>
               <?php print ($all_special['numb_drinks']); ?> Drinks <br>
               <input type='checkbox' value=<?= $all_special['id'] ?> name='order_id[]'> Choose this deal! <br>
               <b>Price: $ <?= $all_special['regular_price'] ?></b><br><select name=<?= 'QTY'.$all_special['id'] ?> > <option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>
              
               </div>
           </div> <?php } else{ ?> 
           <div class='td'>
                <div id='chart_items'/>
             <b>  <?php print($all_special['item_name']); ?> </b> <br>
             <b>  <?php print($all_special['description']); ?></b> <br><br>
             <?php foreach($split_items as $split_item): print($split_item); ?><br> <?php endforeach; ?>
             <?php print ($all_special['numb_drinks']); ?> Drinks <br>
             <input type='checkbox' value=<?= $all_special['id'] ?> name='order_id[]'> Choose this deal! <br> 
             <b>Price: $ <?= $all_special['regular_price'] ?></b><br><select name=<?= 'QTY'.$all_special['id'] ?> ><option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>
           </div> </div>
           
       </div><br> <?php } $counter += 1; endforeach; if ($counter % 2 != 0) { ?> </div> <?php } ?>
       
   </div></div>
   
   
<br> <div id='order_items'> INDIVIDUAL ITEMS </div>
<div>
   
<div id='order_chart'>
   <div class='table' id='order_table' >
       <?php $counter = 0; ?> <div id='subs'> Base </div><br>  
       <?php foreach($all_carbs as $all_carb){  if ($counter %2 == 0) { ?>
       <div class='tr'> 
           <div class='td' >
               <div id='chart_items'>
              <b> <?php print($all_carb['name']); ?> </b><br>
              <b> <?php print($all_carb['description']); ?> </b><br>
               <input type='checkbox' value=<?= $all_carb['food_id'] ?> name='food_order_id[]'> Choose this item! <br>
              <b> Price: $ <?= $all_carb['price'] ?></b><br><select name=<?= 'QTYi'.$all_carb['food_id'] ?> ><option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select> 
               </div>
           </div> <?php } else{ ?> 
           <div class='td'>
                <div id='chart_items'/>
             <b>  <?php print($all_carb['name']); ?> </b> <br>
             <b>  <?php print($all_carb['description']); ?></b> <br>
             <input type='checkbox' value=<?= $all_carb['food_id'] ?> name='food_order_id[]'> Choose this deal! <br> 
            <b> Price: $ <?= $all_carb['price'] ?></b><br><select name=<?= 'QTYi'.$all_carb['food_id'] ?> > <option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>
           </div> </div></div><br> <?php } $counter += 1; } ?> </div>  <?php  if ($counter % 2 != 0) { ?> </div> <?php } ?><br>
       
     <div class='table' id='order_table' >
       <div id='subs'> Proteins </div><br>
       <?php $counter = 0; foreach($all_proteins as $all_protein) { ?> 
       <?php if ($counter %2 == 0) { ?>
       
       <div class='tr'> 
           <div class='td' >
               <div id='chart_items'>
              <b> <?php print($all_protein['name']); ?> </b><br>
              <b> <?php print($all_protein['description']); ?> </b><br>
               <input type='checkbox' value=<?= $all_protein['food_id'] ?> name='food_order_id[]'> Choose this item! <br>
              <b> Price: $ <?= $all_protein['price'] ?></b><br><select name=<?= 'QTYi'.$all_protein['food_id'] ?> ><option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select> 
               </div>
           </div> <?php } else{ ?> 
           <div class='td'>
                <div id='chart_items'/>
             <b>  <?php print($all_protein['name']); ?> </b> <br>
             <b>  <?php print($all_protein['description']); ?></b> <br>
             <input type='checkbox' value=<?= $all_protein['food_id'] ?> name='food_order_id[]'> Choose this item! <br> 
              <b>Price: $ <?= $all_protein['price'] ?></b><br><select name=<?= 'QTYi'.$all_protein['food_id'] ?>><option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select> 
           </div> </div>
           
       </div><br> <?php } $counter += 1; } ?></div><?php  if ($counter % 2 != 0) { ?> </div> <?php } ?><br>
        <div class='table' id='order_table' >
       <div id='subs'> Appetizers </div><br>
       <?php $counter = 0; foreach($all_veggies as $all_veggie) { ?>
       <?php if ($counter %2 == 0) { ?>
       
       <div class='tr'> 
           <div class='td' >
               <div id='chart_items'>
              <b> <?php print($all_veggie['name']); ?> </b><br>
              <b> <?php print($all_veggie['description']); ?> </b><br>
               <input type='checkbox' value=<?= $all_veggie['food_id'] ?> name='food_order_id[]'> Choose this item! <br>
             <b>  Price: $ <?= $all_veggie['price'] ?></b><br><select name=<?= 'QTYi'.$all_veggie['food_id'] ?>><option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>
               </div>
           </div> <?php } else{ ?> 
           <div class='td'>
                <div id='chart_items'/>
             <b>  <?php print($all_veggie['name']); ?> </b> <br>
             <b>  <?php print($all_veggie['description']); ?></b> <br>
             <input type='checkbox' value=<?= $all_veggie['food_id'] ?> name='food_order_id[]'> Choose this item! <br> 
           <b>  Price: $ <?= $all_veggie['price'] ?></b><br><select name=<?= 'QTYi'.$all_veggie['food_id'] ?>> <option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select> 
           </div> </div>
           
       </div><br> <?php } $counter += 1;  } ?></div> <?php  if ($counter % 2 != 0) { ?> </div> <?php } ?>
       <br>
        <div class='table' id='order_table' >
       <div id='subs'> Drinks </div><br>
       <?php $counter=0; foreach($drinks as $drink)  { if ($counter %2 == 0) { ?>
       
       <div class='tr'> 
           <div class='td' >
               <div id='chart_items'>
              <b> <?php print($drink['name']); ?> </b><br>
              <b> <?php print($drink['description']); ?> </b><br>
               <input type='checkbox' value=<?= $drink['food_id'] ?> name='food_order_id[]'> Choose this item! <br>
              <b> Price: $ <?= $drink['price'] ?></b><br><select name=<?= 'QTYi'.$drink['food_id'] ?>> <option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>
               </div>
           </div> <?php } else{ ?> 
           <div class='td'>
                <div id='chart_items'/>
             <b>  <?php print($drink['name']); ?> </b> <br>
             <b>  <?php print($drink['description']); ?></b> <br>
             <input type='checkbox' value=<?= $drink['food_id'] ?> name='food_order_id[]'> Choose this item! <br> 
             <b>Price: $ <?= $drink['price'] ?></b><br><select name=<?= 'QTYi'.$drink['food_id'] ?>><option value='1'> 1 </option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>
           </div> </div>
           
       </div><br> <?php } $counter += 1; } ?> </div><?php  if ($counter % 2 != 0) { ?> </div> <?php } ?>
       
   </div></div><br>
   <div id='submit_buttom'> <input id = 'buttons' type='submit' name='submit' value='Submit'> </div></div>
   </form>




</body>
</html> 