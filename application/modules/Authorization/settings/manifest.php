<?php
/**
 * SocialEngine
 *
 * @category   Application_Core
 * @package    Authorization
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.com/license/
 * @version    $Id: manifest.php 9747 2012-07-26 02:08:08Z john $
 * @author     John
 */
return array(
  // Package -------------------------------------------------------------------
  'package' => array(
    'type' => 'module',
    'name' => 'authorization',
    'version' => '4.2.3',
    'revision' => '$Revision: 9747 $',
    'path' => 'application/modules/Authorization',
    'repository' => 'socialengine.com',
    'title' => 'Authorization',
    'description' => 'Authorization',
    'author' => 'Webligo Developments',
    'changeLog' => 'settings/changelog.php',
    'dependencies' => array(
      array(
        'type' => 'module',
        'name' => 'core',
        'minVersion' => '4.2.0',
      ),
    ),
    'actions' => array(
       'install',
       'upgrade',
       'refresh',
       //'enable',
       //'disable',
     ),
    'callback' => array(
      'path' => 'application/modules/Authorization/settings/install.php',
      'class' => 'Authorization_Install',
      'priority' => 5000,
    ),
    'directories' => array(
      'application/modules/Authorization',
    ),
    'files' => array(
      'application/languages/en/authorization.csv',
    ),
  ),
  // Hooks ---------------------------------------------------------------------
  'hooks' => array(
    array(
      'event' => 'onItemDeleteBefore',
      'resource' => 'Authorization_Plugin_Core',
    ),
  ),
  // Items ---------------------------------------------------------------------
  'items' => array(
    'authorization_level'
  ),
  // Routes --------------------------------------------------------------------
) ?>