<select name='sort_price'  id="sort_price_id" onchange="changePage2(<?php echo $page ?>)">
        <option value="0"  <?php if($sort_selected == '0')  {echo 'selected';} ?> >Oldest First</option>
        <option value="1" <?php if($sort_selected == '1')  {echo 'selected';}  ?> >Newest First</option>
        <option value="2" <?php if($sort_selected == '2')  {echo 'selected';}   ?> >Price: Low to High</option>
        <option value="3"  <?php if($sort_selected == '3')  {echo 'selected';}  ?> >Price: High to Low</option>
        <option value="4" <?php  if($sort_selected == '4')   {echo 'selected';}  ?> >Name: A - Z</option>
        <option value="5" <?php   if($sort_selected == '5')   {echo 'selected';}  ?> >Name: Z - A</option>
</select>





