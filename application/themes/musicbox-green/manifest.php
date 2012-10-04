<?php
return array(
  'package' => array(
    'type' => 'theme',
    'name' => 'musicbox-green',
    'version' => '4.2.5',
    'path' => 'application/themes/musicbox-green',
    'title' => 'Musicbox Green',
    'thumb' => 'musicbox_green.png',
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
      'application/themes/musicbox-green',
    ),
  ),
  'files' => array(
    'theme.css',
    'constants.css',
  ),
  'nophoto' => array(
    'user' => array(
      'thumb_icon' => 'application/themes/musicbox-green/images/nophoto_user_thumb_icon.png',
      'thumb_profile' => 'application/themes/musicbox-green/images/nophoto_user_thumb_profile.png',
    ),
    'group' => array(
      'thumb_normal' => 'application/themes/musicbox-green/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-green/images/nophoto_event_thumb_profile.jpg',
    ),
    'event' => array(
      'thumb_normal' => 'application/themes/musicbox-green/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-green/images/nophoto_event_thumb_profile.jpg',
    ),
  ),
) ?>