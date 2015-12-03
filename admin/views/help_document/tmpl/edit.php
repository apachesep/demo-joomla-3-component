<?php
/*----------------------------------------------------------------------------------|  www.vdm.io  |----/
				Vast Development Method 
/-------------------------------------------------------------------------------------------------------/

	@version		1.0.4
	@build			3rd December, 2015
	@created		5th August, 2015
	@package		Demo
	@subpackage		edit.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
  ____  _____  _____  __  __  __      __       ___  _____  __  __  ____  _____  _  _  ____  _  _  ____ 
 (_  _)(  _  )(  _  )(  \/  )(  )    /__\     / __)(  _  )(  \/  )(  _ \(  _  )( \( )( ___)( \( )(_  _)
.-_)(   )(_)(  )(_)(  )    (  )(__  /(__)\   ( (__  )(_)(  )    (  )___/ )(_)(  )  (  )__)  )  (   )(  
\____) (_____)(_____)(_/\/\_)(____)(__)(__)   \___)(_____)(_/\/\_)(__)  (_____)(_)\_)(____)(_)\_) (__) 

/------------------------------------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');
$componentParams = JComponentHelper::getParams('com_demo');
?>

<form action="<?php echo JRoute::_('index.php?option=com_demo&layout=edit&id='.(int) $this->item->id.$this->referral); ?>" method="post" name="adminForm" id="adminForm" class="form-validate" enctype="multipart/form-data">

	<?php echo JLayoutHelper::render('help_document.details_above', $this); ?><div class="form-horizontal">

	<?php echo JHtml::_('bootstrap.startTabSet', 'help_documentTab', array('active' => 'details')); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'help_documentTab', 'details', JText::_('COM_DEMO_HELP_DOCUMENT_DETAILS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('help_document.details_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('help_document.details_right', $this); ?>
			</div>
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('help_document.details_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'help_documentTab', 'publishing', JText::_('COM_DEMO_HELP_DOCUMENT_PUBLISHING', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('help_document.publishing', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('help_document.metadata', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php if ($this->canDo->get('core.admin')) : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'help_documentTab', 'permissions', JText::_('COM_DEMO_HELP_DOCUMENT_PERMISSION', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<fieldset class="adminform">
					<div class="adminformlist">
					<?php foreach ($this->form->getFieldset('accesscontrol') as $field): ?>
						<div>
							<?php echo $field->label; echo $field->input;?>
						</div>
						<div class="clearfix"></div>
					<?php endforeach; ?>
					</div>
				</fieldset>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>

	<?php echo JHtml::_('bootstrap.endTabSet'); ?>

	<div>
		<input type="hidden" name="task" value="help_document.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</div>

<div class="clearfix"></div>
<?php echo JLayoutHelper::render('help_document.details_under', $this); ?>
</form>

<script type="text/javascript">

// #jform_location listeners for location_sLnxlWV function
jQuery('#jform_location').on('keyup',function()
{
	var location_sLnxlWV = jQuery("#jform_location input[type='radio']:checked").val();
	sLnxlWV(location_sLnxlWV);

});
jQuery('#adminForm').on('change', '#jform_location',function (e)
{
	e.preventDefault();
	var location_sLnxlWV = jQuery("#jform_location input[type='radio']:checked").val();
	sLnxlWV(location_sLnxlWV);

});

// #jform_location listeners for location_fqbSveC function
jQuery('#jform_location').on('keyup',function()
{
	var location_fqbSveC = jQuery("#jform_location input[type='radio']:checked").val();
	fqbSveC(location_fqbSveC);

});
jQuery('#adminForm').on('change', '#jform_location',function (e)
{
	e.preventDefault();
	var location_fqbSveC = jQuery("#jform_location input[type='radio']:checked").val();
	fqbSveC(location_fqbSveC);

});

// #jform_type listeners for type_Xvephxz function
jQuery('#jform_type').on('keyup',function()
{
	var type_Xvephxz = jQuery("#jform_type").val();
	Xvephxz(type_Xvephxz);

});
jQuery('#adminForm').on('change', '#jform_type',function (e)
{
	e.preventDefault();
	var type_Xvephxz = jQuery("#jform_type").val();
	Xvephxz(type_Xvephxz);

});

// #jform_type listeners for type_yFWFBjo function
jQuery('#jform_type').on('keyup',function()
{
	var type_yFWFBjo = jQuery("#jform_type").val();
	yFWFBjo(type_yFWFBjo);

});
jQuery('#adminForm').on('change', '#jform_type',function (e)
{
	e.preventDefault();
	var type_yFWFBjo = jQuery("#jform_type").val();
	yFWFBjo(type_yFWFBjo);

});

// #jform_type listeners for type_revjpJk function
jQuery('#jform_type').on('keyup',function()
{
	var type_revjpJk = jQuery("#jform_type").val();
	revjpJk(type_revjpJk);

});
jQuery('#adminForm').on('change', '#jform_type',function (e)
{
	e.preventDefault();
	var type_revjpJk = jQuery("#jform_type").val();
	revjpJk(type_revjpJk);

});

// #jform_target listeners for target_MhQPsZt function
jQuery('#jform_target').on('keyup',function()
{
	var target_MhQPsZt = jQuery("#jform_target input[type='radio']:checked").val();
	MhQPsZt(target_MhQPsZt);

});
jQuery('#adminForm').on('change', '#jform_target',function (e)
{
	e.preventDefault();
	var target_MhQPsZt = jQuery("#jform_target input[type='radio']:checked").val();
	MhQPsZt(target_MhQPsZt);

});

</script>