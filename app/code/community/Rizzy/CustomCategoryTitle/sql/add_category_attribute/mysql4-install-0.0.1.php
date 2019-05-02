<?php
$this->startSetup();
$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'custom_title', array(
    'group'         => 'General Information',
    'input'         => 'textarea',
    'type'          => 'text',
    'label'         => 'Custom Title',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$this->endSetup();