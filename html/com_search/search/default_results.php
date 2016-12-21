<?php
/**
 * @version		$Id: default_results.php 20244 2011-01-10 10:23:58Z eddieajau $
 * @package		Joomla.Site
 * @subpackage	com_search
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div style="width: 100%;">
<!-- <dl class="search-results<?php echo $this->pageclass_sfx; ?>"> -->
<dl style="width: 100%">
<?php foreach($this->results as $result) : ?>
	<div style="float:left; width: 50%;">
	<dt class="result-title">
	<?php echo $this->pagination->limitstart + $result->count.'. ';?>
		<?php if ($result->href) :?>
			<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
				<?php echo $this->escape($result->title);?>
			</a>
		<?php else:?>
			<?php echo $this->escape($result->title);?>
		<?php endif; ?>	
	</dt>
	
	<dd class="result-text">
		<?php echo $result->text; ?>
		<span style="display: inline-block;">
		<a href="<?php echo JRoute :: _($result->href)?>" <?php echo ($result->browsernav == 1)? 'target="_blank"' : ''; ?> >
		<img width="260px" src="<?php echo JURI::root().'media/k2/items/cache/'.md5("Image".$result->id).'_S.jpg'; ?>" alt="<?php echo $this->escape($result->title)?>" align="left" /></a></span>
	</dd>
	</div>
	
<?php endforeach; ?>
</dl>
</div>


<div class="pagination" >
        
	<?php echo $this->pagination->getPagesLinks(); ?>
	
</div>



