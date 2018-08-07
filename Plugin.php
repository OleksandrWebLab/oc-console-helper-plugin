<?php namespace PopcornPHP\ConsoleHelper;

use PopcornPHP\ConsoleHelper\Console\CreateCommand;
use PopcornPHP\ConsoleHelper\Console\CreateComponent;
use PopcornPHP\ConsoleHelper\Console\CreateController;
use PopcornPHP\ConsoleHelper\Console\CreateFormWidget;
use PopcornPHP\ConsoleHelper\Console\CreateModel;
use PopcornPHP\ConsoleHelper\Console\CreatePlugin;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'ConsoleHelper',
            'description' => 'No description provided yet...',
            'author'      => 'PopcornPHP',
            'icon'        => 'icon-leaf'
        ];
    }

    public function register()
    {
        $this->registerConsoleCommand('hcreate.plugin', CreatePlugin::class);
        $this->registerConsoleCommand('hcreate.model', CreateModel::class);
        $this->registerConsoleCommand('hcreate.controller', CreateController::class);
        $this->registerConsoleCommand('hcreate.component', CreateComponent::class);
        $this->registerConsoleCommand('hcreate.formwidget', CreateFormWidget::class);
        $this->registerConsoleCommand('hcreate.command', CreateCommand::class);
    }
}