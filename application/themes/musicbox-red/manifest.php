<?php/** * SocialEngine * * @category   Application_Theme * @package    Musicbox Theme * @copyright  Copyright 2006-2012 Webligo Developments * @license    http://www.socialengine.com/license/ * @version    $Id: manifest.php 9714 2012-05-07 23:17:50 * @author      */
return array(
  'package' => array(
    'type' => 'theme',
    'name' => 'musicbox-red',
    'version' => '4.2.5',	'revision' => '$Revision: 9729 $',
    'path' => 'application/themes/musicbox-red',    'repository' => 'socialengine.com',
    'title' => 'Musicbox Red',
    'thumb' => 'musicbox_red.png',
    'author' => 'Webligo Developments',
    'changeLog' => array(     
    ),
    'actions' => array(
      'install',
      'upgrade',
      'refresh',
      'remove',
    ),
    'callback' => array(
      'class' => 'Engine_Package_Installer_Theme',
    ),
    'directories' => array(
      'application/themes/musicbox-red',
    ),
  ),
  'files' => array(
    'theme.css',
    'constants.css',
  ),
  'nophoto' => array(
    'user' => array(
      'thumb_icon' => 'application/themes/musicbox-red/images/nophoto_user_thumb_icon.png',
      'thumb_profile' => 'application/themes/musicbox-red/images/nophoto_user_thumb_profile.png',
    ),
    'group' => array(
      'thumb_normal' => 'application/themes/musicbox-red/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-red/images/nophoto_event_thumb_profile.jpg',
    ),
    'event' => array(
      'thumb_normal' => 'application/themes/musicbox-red/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-red/images/nophoto_event_thumb_profile.jpg',
    ),
  ),
) ?>