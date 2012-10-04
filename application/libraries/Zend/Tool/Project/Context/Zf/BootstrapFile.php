<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: BootstrapFile.php 16971 2009-07-22 18:05:45Z mikaelkael $
 */

/**
 * @see Zend_Tool_Project_Context_Filesystem_File
 */
// require_once 'Zend/Tool/Project/Context/Filesystem/File.php';

// require_once 'Zend/Application.php';

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 * 
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2009 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Tool_Project_Context_Zf_BootstrapFile extends Zend_Tool_Project_Context_Filesystem_File 
{
    
    /**
     * @var string
     */
    protected $_filesystemName = 'Bootstrap.php';
    
    protected $_applicationInstance = null;
    protected $_bootstrapInstance = null;
    
    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'BootstrapFile';
    }
    
    public function init()
    {
        parent::init();
        
        $applicationConfigFile = $this->_resource->getProfile()->search('ApplicationConfigFile');
        $applicationDirectory = $this->_resource->getProfile()->search('ApplicationDirectory');
        
        if (($applicationConfigFile === false) || ($applicationDirectory === false)) {
            throw new Exception('To use the BootstrapFile context, your project requires the use of both the "ApplicationConfigFile" and "ApplicationDirectory" contexts.');
        }
        
        if ($applicationConfigFile->getContext()->exists()) {
            define('APPLICATION_PATH', $applicationDirectory->getPath());
            $applicationOptions = array();
            $applicationOptions['config'] = $applicationConfigFile->getPath();
    
            $this->_applicationInstance = new Zend_Application(
                'development',
                $applicationOptions
                );
        }
    }
    
    /**
     * getContents()
     *
     * @return array
     */
    public function getContents()
    {
        $codeGenFile = new Zend_CodeGenerator_Php_File(array(
            'classes' => array(
                new Zend_CodeGenerator_Php_Class(array(
                    'name' => 'Bootstrap',
                    'extendedClass' => 'Zend_Application_Bootstrap_Bootstrap',
                )),
            )
        ));
       
        return $codeGenFile->generate();
    }
}