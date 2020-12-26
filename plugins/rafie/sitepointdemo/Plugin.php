<?php namespace Rafie\SitepointDemo\User;

use Backend;
use System\Classes\PluginBase;


/**
 * sitepointDemo Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'sitepointDemo',
            'description' => 'No description provided yet...',
            'author'      => 'rafie',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        
        // User::extend(function($model){
        //     $model->belongsTo['team'] = ['Rafie\SitepointDemo\Models\Team'];
        // });


        \Backend\Controllers\Users::extendListColumns(function ($list) {
            $list->addColumns([
                'team' => [
                    'label' => 'Team',
                    'relation' => 'team',
                    'select' => 'name'
                ]
            ]);
        });
    }
    

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Rafie\SitepointDemo\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'rafie.sitepointDemo.manage_teams' => [
                'label' => 'Manage Teams',
                'tab' => 'SitepointDemo'
            ],
            'rafie.sitepointDemo.manage_projects' => [
                'label' => 'Manage Projects',
                'tab' => 'SitepointDemo'
            ]
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'sitepointdemo' => [
                'label'       => 'sitepointDemo',
                'url'         => Backend::url('rafie/sitepointdemo/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['rafie.sitepointdemo.*'],
                'order'       => 500,
            ],
        ];
    }
}
