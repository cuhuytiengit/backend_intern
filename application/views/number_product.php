<select id="page_size" onchange="changePage1(<?php echo $page ?>)">
        <option value="9"  <?php echo (9 == $pageSize) ? 'selected' : '' ?> >9</option>
        <option value="36" <?php echo (36 == $pageSize) ? 'selected' : '' ?> >36</option>
        <option value="81" <?php echo (81 == $pageSize) ? 'selected' : '' ?> >81</option>
</select>


