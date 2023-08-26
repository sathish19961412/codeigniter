<h1>Home Page <?=$this->session->userdata('savename')?> </h1>
<form method="post" action="<?=base_url('welcome/save')?>">
    <input type="text" name="name">
	<input type="submit" value="Save">
</form>
<?php if($this->session->has_userdata('savename')) { ?>
     
	<a href="<?=base_url('welcome/clear')?>">Clear</a>
<?php } ?>
