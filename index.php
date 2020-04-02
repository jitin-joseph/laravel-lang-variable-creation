

<form method="POST" action="">
Enter the string
<textarea name="original_string"></textarea><br/>
<input type="submit" name="submit"><br/>

<br/>

</form>

Into language file<br/><br/>

<?php
$original_string = isset($_POST['original_string'])?$_POST['original_string']:"";

$underscored = preg_replace('/\s+/', '_', $original_string);
$lower_case = strtolower($underscored);


//need to get in below format
//'read_mail'              => 'Read Mail'

echo "'".$lower_case."'		\t	=>		'".$original_string."',";

?>	

<br/><br/>
Into language variable<br/><br/>
<?php
//need to get in this format
//{{trans('language.dont_hav_permission')}}
$folder_name = "mailbox";
echo "{{trans('$folder_name.$lower_case')}}";