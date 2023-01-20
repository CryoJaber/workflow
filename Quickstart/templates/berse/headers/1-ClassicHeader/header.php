<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * Copyright (c) 2010 - 2021 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined ('_JEXEC') or die('Restricted Access');

use HelixUltimate\Framework\Platform\Helper;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;

$data = $displayData;
$offcanvas_position = $displayData->params->get('offcanvas_position', 'right');
$menu_type = $displayData->params->get('menu_type');

$feature_folder_path = JPATH_THEMES . '/' . $data->template->template . '/features';

include_once $feature_folder_path . '/logo.php';
include_once $feature_folder_path . '/menu.php';
include_once $feature_folder_path . '/social.php';
include_once $feature_folder_path . '/contact.php';

/**
 * Helper classes for-
 * site logo, Menu header.
 *
 */
$logo    	= new HelixUltimateFeatureLogo($data->params);
$menu    	= new HelixUltimateFeatureMenu($data->params);
$social 	= new HelixUltimateFeatureSocial($data->params);
$contact 	= new HelixUltimateFeatureContact($data->params);

/**
 * Get related modules
 * The modules are mod_search
 */
$searchModule = Helper::getSearchModule();

?>

<?php if( $displayData->params->get('sticky_header')) { ?>
	<div class="sticky-header-placeholder"></div>
<?php } ?>
<div id="sp-header-topbar">
	<div class="container">
		<div class="container-inner">
		<div class="row align-items-center justify-content-between">

					<!-- Logo -->
					<div id="sp-logo" class="col-auto col-8">
						<div class="sp-column d-flex align-items-center justify-content-start">
							<?php if (isset($logo->load_pos) && $logo->load_pos === 'before') : ?>
								<?php echo $logo->renderFeature(); ?>
								<jdoc:include type="modules" name="logo" style="sp_xhtml" />
							<?php else : ?>
								<jdoc:include type="modules" name="logo" style="sp_xhtml" />
								<?php echo $logo->renderFeature(); ?>
							<?php endif ?>
						</div>
					</div>

					<!-- Social -->
					<div id="sp-social" class="col-auto col-4">
						<div class="sp-column d-flex justify-content-end">
							<!-- Social icons -->
							<div class="social-wrap d-flex align-items-center">
								<?php echo $social->renderFeature(); ?>
							</div>

							<!-- Related Modules -->
							<div class="d-none d-lg-flex header-modules align-items-center">
								<?php if ($data->params->get('enable_search', 0)): ?>
									<?php echo ModuleHelper::renderModule($searchModule, ['style' => 'sp_xhtml']); ?>
								<?php endif ?>

								<?php if ($data->params->get('enable_login', 0)): ?>
									<?php echo $menu->renderLogin(); ?>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

<header id="sp-header" class="lg-header">
	<div class="container">
		<div class="container-inner">
			<!-- Menu -->
			<div class="row">

				<div class="col-12 d-flex justify-content-between">
					<div class="d-flex justify-content-start align-items-center">
						<!-- if offcanvas position left -->
						<?php if($offcanvas_position === 'left') : ?>
							<a id="offcanvas-toggler"  aria-label="<?php echo Text::_('HELIX_ULTIMATE_NAVIGATION'); ?>" title="<?php echo Text::_('HELIX_ULTIMATE_NAVIGATION'); ?>"  class="<?php echo $menu_type; ?> offcanvas-toggler-secondary offcanvas-toggler-left d-flex align-items-center" href="#"><div class="burger-icon"><span></span><span></span><span></span></div></a>
						<?php endif; ?>

						<?php echo $menu->renderFeature(); ?>
						<div class="menu-with-offcanvas">
							<jdoc:include type="modules" name="menu" style="sp_xhtml" />
						</div>

						<!-- if offcanvas position right -->
						<?php if($offcanvas_position === 'right') : ?>
							<a id="offcanvas-toggler"  aria-label="<?php echo Text::_('HELIX_ULTIMATE_NAVIGATION'); ?>" title="<?php echo Text::_('HELIX_ULTIMATE_NAVIGATION'); ?>"  class="<?php echo $menu_type; ?> ms-3 offcanvas-toggler-secondary offcanvas-toggler-right d-flex align-items-center" href="#"><div class="burger-icon"><span></span><span></span><span></span></div></a>
						<?php endif; ?>
					</div>
					<div class="sp-menu-right" class="d-flex align-items-center justify-content-end">
							<jdoc:include type="modules" name="menu-right" style="sp_xhtml" />
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
