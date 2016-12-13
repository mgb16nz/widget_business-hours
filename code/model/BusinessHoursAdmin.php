<?php

class BusinessHoursAdmin extends ModelAdmin {

    private static $menu_title = 'Business Hours';

    private static $url_segment = 'businessHours';

    private static $managed_models = array (
        'BusinessHours'
    );

    public function getEditForm($id = null, $fields = null) {
        $form=parent::getEditForm($id, $fields);

        if($this->modelClass=='BusinessHours' && $gridField=$form->Fields()->dataFieldByName($this->sanitiseClassName($this->modelClass))) {

            if($gridField instanceof GridField) {
                $gridField->getConfig()->addComponent(new GridFieldSortableRows('SortOrder'));
            }
        }

        return $form;
    }
}