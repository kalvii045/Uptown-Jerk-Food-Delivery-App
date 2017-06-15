<style> #food_form{margin-left:auto;margin-right:auto;text-align:left;width:50%;height:60%; border:1px solid grey; padding:10px 5px;} #desc{float:left;
position:relative;} #descbox{position:relative;}</style>
<div id='food_form'>
    <div name='new_food' > Input New Food </div><br>
<form action='new_items.php' method='post'> 
         <input size='45' autocomplete='off' autofocus class='form-control' name='food_name' placeholder='Food name' type='text'> <br><br>
         <select name='food_type'>
  <option value="Protein">Protein</option>
  <option value="Base">Base</option>
  <option value="Appetizers">Appetizers </option>
  <option value="Drink">Drink </option>
</select> <br><br>Other description <br>
        <textarea name='descname' rows="4" cols="50" placeholder="Other description"> </textarea> <br><br> <input size='15' name='price' type='float' placeholder='Price'><br><br>
        <button class="btn-btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
</form><br><?php if (isset($message)) { print($message); } ?> </div><br>

<div id="food_form">
    <div> Input New Specials </div> <br>
    <form action='new_items.php' method='post'>
        <input size='45' autocomplete='off' autofocus class='form-control' name='food_deal' placeholder='Special name' type='text'> <br><br>
        <textarea name='descname1' rows='2' cols='30' placeholder = "Description"></textarea><br>
        <div id='item_names'>
        <input size='45' autocomplete='off' autofocus class='form-control' name='item[]' placeholder='Item name' type='text'> 
        <button type='button' onclick="addNewInput()"> + </button><br>
        </div> <br> 
        <input size='25' autocomplete='off' autofocus class='form-control' name='price1' placeholder='Single price' type='float'><br><br>
        <input size='25' autocomplete='off' autofocus class='form-control' name='numb_drinks' placeholder='Number of drinks in this deal' type='float'><br><br>
        <button class="btn-btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
    </form> <br><?php if (isset($message1)) { print($message1); } ?>
</div> 

<script> 
function addNewInput() {  
var add_new ="<input size='45' autocomplete='off' autofocus class='form-control' name='item' placeholder='Item name' type='text'> <button type='button' onclick='addNewInput()'> + </button><br>";
 var input = document.createElement("input");
 input.type = "text";
 input.name = "item[]";
 input.placeholder='Item name';
 input.size='45';
 document.getElementById('item_names').appendChild(input); var break1 = document.createElement("br");document.getElementById('item_names').appendChild(break1);
 
 } </script>

</body> </html>