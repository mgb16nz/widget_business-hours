<?php

class BusinessHours extends DataObject
{
    private static $db = array(
        'WeekDay' => 'Varchar',
        'StartTime' => 'Time',
        'CloseTime' => 'Time',
        'SortOrder' => 'Int'
    );

    private static $has_one = array(

    );

    private static $summary_fields = array(
        'WeekDay' => 'Day of the Week',
        'StartTime' => 'Start time of Business',
        'CloseTime' => 'Closing time of Business'
    );

    private static $default_sort='SortOrder';

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
        $fields->addFieldToTab('Root.Main', TextField::create('StartTime', 'Hours Start'));
        $fields->addFieldToTab('Root.Main', TextField::create('CloseTime', 'Hours Close'));


        $fields->removeByName('SortOrder');
        $fields->removeByName('ParentID');

        return $fields;
    }

    public function getTime($start = null, $close = null) {
        if($start) {
            if (date('i', strtotime($start)) != 00) {
                $start = date('g:ia', strtotime($start));
            } else {
                $start = date('ga', strtotime($start));
            }
            if (date('i', strtotime($close)) != 00) {
                $close = date('g:ia', strtotime($close));
            } else {
                $close = date('ga', strtotime($close));
            }
            return $start . ' till ' . $close;
        } else {
            return 'Closed';
        }
    }



}

