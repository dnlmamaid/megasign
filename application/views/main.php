<div class="row">
	<section class="blur">
		<a href="<?php echo base_url(); ?>user_login"><img src="<?php echo base_url(); ?>images/assets/images/Megasign(Logo).jpg" class="img-responsive" ></a>	
	</section>
	
		<a href="<?php echo base_url(); ?>user_login"><img src="<?php echo base_url(); ?>assets/images/Megasign(Logo).jpg" id="sample" class="img-responsive"  onclick="blurEvent()"></a>


</div>

<script>
function blurEvent() {
    document.getElementById("sample").className = "blurred";
}
</script>
	
