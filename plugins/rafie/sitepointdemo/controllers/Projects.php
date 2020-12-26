<?php namespace Rafie\SitepointDemo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Projects Back-end Controller
 */
class Projects extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @var string Configuration file for the `FormController` behavior.
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Rafie.SitepointDemo', 'sitepointdemo', 'projects');
    }

    public function listOverrideColumnValue($record, $columnName)
    {
        if( $columnName == "description" && strlen($record->description) > 20 )
        {
            $description = substr($record->description, 0, 20);

            return "<span title='{$record->description}'>{$description}...</span>";
        }
    }

    public $requiredPermissions = ['rafie.sitepointDemo.manage_projects'];
}
