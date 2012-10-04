<?php
return array(
  'package' => array(
    'type' => 'theme',
    'name' => 'musicbox-blue',
    'version' => '4.2.5',
    'path' => 'application/themes/musicbox-blue',
    'title' => 'Musicbox Blue',
    'thumb' => 'musicbox_blue.png',
    'author' => 'Webligo Developments',
    'changeLog' => array(
    ),
	'actions' => array(
    'callback' => array(
      'class' => 'Engine_Package_Installer_Theme',
    ),
    'directories' => array(
      'application/themes/musicbox-blue',
    ),
  ),
  'files' => array(
    'theme.css',
    'constants.css',
  ),
  'nophoto' => array(
    'user' => array(
      'thumb_icon' => 'application/themes/musicbox-blue/images/nophoto_user_thumb_icon.png',
      'thumb_profile' => 'application/themes/musicbox-blue/images/nophoto_user_thumb_profile.png',
    ),
    'group' => array(
      'thumb_normal' => 'application/themes/musicbox-blue/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-blue/images/nophoto_event_thumb_profile.jpg',
    ),
    'event' => array(
      'thumb_normal' => 'application/themes/musicbox-blue/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-blue/images/nophoto_event_thumb_profile.jpg',
    ),
  ),
) ?>