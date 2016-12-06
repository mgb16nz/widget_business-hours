<?php

class BusinessHoursAdmin extends ModelAdmin {

    private static $menu_title = 'Business Hours';

    private static $url_segment = 'businessHours';

    private static $managed_models = array (
        'BusinessHours'
    );
}