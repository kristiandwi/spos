<div id="mega-billboard-container" class="smooth" data-height="400px">

    <div id="div-big" class="smooth" style="display: none;">
        <a href="javascript:showHide('div-small');" class="bill-close-btn"></a>
        <a target="_blank" href="#">
            <img src="<?php echo ASSETS_PILKADA; ?>images/banner/wraped-top.png">
        </a>
    </div>
    <div id="div-small" class="smooth">
        <a href="javascript:showHide('div-big');">
        <img src="<?php echo ASSETS_PILKADA; ?>images/banner/wraped-top.png"></a>
    </div>
</div>

<div id="skinad-left">            
	<div id="left-lk">
		<a href="#" target="_blank">
			<img src="<?php echo ASSETS_PILKADA; ?>images/banner/wraped-left-right.gif">
		</a>
		
	</div>
</div>

<div id="skinad-right">
	<div id="right-lk">
		<a href="#" target="_blank">
			<img style="max-width : unset;" src="<?php echo ASSETS_PILKADA; ?>images/banner/wraped-left-right.gif">
		</a>
	</div>
</div>

<script>
function showHide(d)
{
var onediv = document.getElementById(d);
var divs=['div-small','div-big'];
for (var i=0;i<divs.length;i++)
  {
  if (onediv != document.getElementById(divs[i]))
    {
    document.getElementById(divs[i]).style.display='none';
    }
  }
onediv.style.display = 'block';
} 

</script>