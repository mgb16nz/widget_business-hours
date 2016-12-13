<?php

class BusinessHours extends DataObject
{
    private static $db = array(
        'WeekDay' => 'Varchar',
        'OpenTime' => 'Time',
        'CloseTime' => 'Time',
        'SortOrder' => 'Int'
    );

    private static $has_one = array(

    );

    private static $summary_fields = array(
        'WeekDay' => 'Day of the Week',
        'OpenTime' => 'Start time of Business',
        'CloseTime' => 'Closing time of Business'
    );

    public static $default_sort='SortOrder';

    public function getCMSFields() {

        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', DropdownField::create('WeekDay', 'Working Day',
            array(
                'Sunday' => 'Sunday',
                'Monday' => 'Monday',
                'Tuesday' => 'Tuesday',
                'Wednesday' => 'Wednesday',
                'Thursday' => 'Thursday',
                'Friday' => 'Friday',
                'Saturday' => 'Saturday'
            ))
            ->setEmptyString('-- Select Day --'));
        $fields->addFieldToTab('Root.Main', TextField::create('OpenTime', 'Hours Open'));
        $fields->addFieldToTab('Root.Main', TextField::create('CloseTime', 'Hours Close'));

        $fields->removeByName('SortOrder');
        $fields->removeByName('ParentID');

        return $fields;
    }


}

