<?php
/**
 * Created by Snap Web Designs.
 * User: Mark Barker
 * Date: 23/11/16
 */

class BusinessHoursWidget extends Widget
{

    private static $title = 'Business Hours';

    private static $cmsTitle = 'Business Hours';

    private static $description = 'Displays business hours of the week.';


    private static $db = array(
        'DaysToShow' => 'Int'
    );


    private static $defaults = array(
        'DaysToShow' => 7
    );

    private static $has_one = array(
        'BusinessHours' => 'BusinessHours'
    );

    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function ($fields) {

            $fields->merge(array(
                DropdownField::create('BusinessHoursID', _t('BusinessHoursWidget.BusinessHours', 'Business Hours'), BusinessHours::get()->map()),
                NumericField::create('DaysToShow', _t('BusinessHoursWidget.DaysToShow', 'Days To Show'))
            ));
        });

        return parent::getCMSFields();
    }

}

class BusinessHoursWidget_Controller extends Widget_Controller
{

}