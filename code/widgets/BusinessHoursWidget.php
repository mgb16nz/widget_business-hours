<?php
/**
 * Created by Snap Web Designs.
 * User: Mark Barker
 * Date: 23/11/16
 */

class BusinessHoursWidget extends Widget
{
    /**
     * @var string
     */
    private static $title = 'Business Hours';

    /**
     * @var string
     */
    private static $cmsTitle = 'Business Hours';

    /**
     * @var string
     */
    private static $description = 'Displays business hours of the week.';

    /**
     * @var array
     */
    private static $db = array(
        'DaysToShow' => 'Int'
    );

    /**
     * @var array
     */
    private static $defaults = array(
        'NumberOfDays' => 7
    );

    /**
     * @var array
     */
    private static $has_one = array(
        'BusinessHours' => 'BusinessHours',
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $this->beforeUpdateCMSFields(function ($fields) {

            /**
             * @var FieldList $fields
             */
            $fields->merge(array(

                NumericField::create(
                    'DaysToShow', _t('BusinessHoursWidget.DaysToShow.Label', 'Working days of the week'), 0
                )
                    ->setDescription(_t('BusinessHoursWidget.DaysToShow.Description', 'Show number of Days Working (set to 0 to show all Days of the week).'))
            ));
        });

        return $fields;
    }

    /**
     * @return DataList
     */
    public function Hours()
    {
        return $this->BusinessHours();

    }
}

class BusinessHoursWidget_Controller extends Widget_Controller
{

}
