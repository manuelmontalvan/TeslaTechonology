<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldPreviewMap extends JFormField {

    public function getInput() {
        $params = $this->form->getValue('params');
        $document = JFactory::getDocument();
        $document->addStyleDeclaration('.gmnoprint img {max-width: none;}#jform_params_mapcustomstyle{height:300px;width:400px}label#jform_params_previewmap-lbl,#map{clear:both}img[src*="gstatic.com/"], img[src*="googleapis.com/"] {max-width: none;}');
        $apikey = (isset($params->apikey)) ? '?key=' . $params->apikey : '';        
        $document->addScript('//maps.google.com/maps/api/js' . $apikey);
        $document->addScript(JURI::root(true). '/modules/mod_jbmaps2/js/admin.js');
        $document->addScriptDeclaration("var siteRoot = '". JURI::root() ."';"); //base path for style files

return '<div id="map" style="height:300px;width:500px;max-width:100%;overflow:hidden"></div><div id="jbmaps2-notices"></div>';
}
}