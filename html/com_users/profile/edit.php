<?php
/**
 * @version		$Id: edit.php 20206 2011-01-09 17:11:35Z chdemko $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
//load user_profile plugin language
$lang = JFactory::getLanguage();
$lang->load( 'plg_user_profile', JPATH_ADMINISTRATOR );
?>
<div class="profile-edit<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="vt_heading_style">
	<h3><div><span>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</span></div></h3>
    </div>
<?php endif; ?>
<form id="member-profile" action="<?php echo JRoute::_('index.php?option=com_users&task=profile.save'); ?>" method="post" class="form-validate">
<?php foreach ($this->form->getFieldsets() as $group => $fieldset):// Iterate through the form fieldsets and display each one.?>
	<?php $fields = $this->form->getFieldset($group);?>
	<?php if (count($fields)):?>
	<fieldset>
		<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.?>
		<legend><?php echo JText::_($fieldset->label); ?></legend>
		<?php endif;?>
		<dl>
		<?php foreach ($fields as $field):// Iterate through the fields in the set and display them.?>
			<?php if ($field->hidden):// If the field is hidden, just display the input.?>
				<?php echo $field->input;?>
			<?php else:?>
				<dt>
					<?php echo $field->label; ?>
					<?php if (!$field->required && $field->type!='Spacer'): ?>
					<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL'); ?></span>
					<?php endif; ?>
				</dt>
				<dd><?php echo $field->input; ?></dd>
			<?php endif;?>
		<?php endforeach;?>
		</dl>
	</fieldset>
	<?php endif;?>
<?php endforeach;?>
		<div>
			<button type="submit" name="task_button" class="button_round"><span class="button_round1"><span>
			<?php echo JText::_('JSUBMIT'); ?>
            </span></span></button>
			 <?php // JText::_('COM_USERS_OR'); ?> 
			<button type="submit" name="task_button" class="button_round"><span class="button_round1"><span>
			<?php echo JText::_('JCANCEL'); ?>
            </span></span></button>
		
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="profile.save" />
			<?php echo JHtml::_('form.token'); ?>
		</div>
	</form>
</div>
