<div class="wrapper">
<div class="content">
<?php
if ($_POST)
	{
		$names = explode("\n", $_POST['textareaname']);
		foreach($names as $key=>$value)
		{
            preg_match("(https?:\/\/((www\.|web\.)?(\w+(\.(\w+\.)?\w{3})?)))",
                $value, $matches);
            print_r($matches[3]);
            echo "<br>";
		}
	
	}

?>
<form method="post" >
Insert List of Url:<br />
    <textarea name="textareaname"  style="width: 50%;height: 30%"></textarea>
<input type="submit" value="submit"/>
</form>
</div>