<?php
/******************************************************************************\
**   JoomGallery JoomMediaFormField Plugin 1.0                                **
**   By: JoomGallery::ProjectTeam                                             **
**   Copyright (C) 2016 JoomGallery::ProjectTeam                              **
**   Released under GNU GPL Public License                                    **
**   License: http://www.gnu.org/copyleft/gpl.html                            **
\******************************************************************************/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

/**
 * JoomGallery Media Form Field Plugin
 *
 * Overrides the Joomla core media form field with our field
 *
 * @since       1.0
 */
class plgSystemJoomMediaFormField extends JPlugin
{
  /**
   * Overrides the Joomla core media form field with our field
   *
   * @return  void
   * @since   1.0
   */
  public function onAfterInitialise()
  {
    JLoader::register('JFormFieldMedia',  JPATH_PLUGINS . '/system/joommediaformfield/media.php');
  }
}
