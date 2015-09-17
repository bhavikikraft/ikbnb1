<? include("connect.php");

	if($_REQUEST['type']=='Showsubcat')
	{
		$selected = $_REQUEST['selectedid'];
		$select_type="SELECT * FROM category_master WHERE parent_id=".$_REQUEST['catid']."";
		$rs_sel = mysql_query($select_type);
		?>
		<select name="cmbSubCat" id="cmbSubCat" class="required">
		 <option value="">--Seleccione una Subcategoria--</option>
		<? 								
		while($row_sel = mysql_fetch_assoc($rs_sel))
		{?>
			<option value="<?=$row_sel['cat_id']?>" <? if($selected==$row_sel['cat_id']){?> selected="selected" <? }?>><?=stripslashes($row_sel['cat_name'])?></option>
	<? } ?>
		</select>
		
<? }?>
