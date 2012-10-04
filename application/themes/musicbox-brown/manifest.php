<?php
return array(
  'package' => array(
    'type' => 'theme',
    'name' => 'musicbox-brown',
    'version' => '4.2.5',
    'path' => 'application/themes/musicbox-brown',
    'title' => 'Musicbox Brown',
    'thumb' => 'musicbox_brown.png',
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
      'application/themes/musicbox-brown',
    ),
  ),
  'files' => array(
    'theme.css',
    'constants.css',
  ),
  'nophoto' => array(
    'user' => array(
      'thumb_icon' => 'application/themes/musicbox-brown/images/nophoto_user_thumb_icon.png',
      'thumb_profile' => 'application/themes/musicbox-brown/images/nophoto_user_thumb_profile.png',
    ),
    'group' => array(
      'thumb_normal' => 'application/themes/musicbox-brown/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-brown/images/nophoto_event_thumb_profile.jpg',
    ),
    'event' => array(
      'thumb_normal' => 'application/themes/musicbox-brown/images/nophoto_event_thumb_normal.jpg',
      'thumb_profile' => 'application/themes/musicbox-brown/images/nophoto_event_thumb_profile.jpg',
    ),
  ),
) ?>