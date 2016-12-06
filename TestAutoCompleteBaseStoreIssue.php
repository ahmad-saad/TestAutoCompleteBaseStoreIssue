<?php
/** (c)2015 INSECO,
 * www.inseco.at
 * Plugin zur visuellen Darstellung und direkten Auswahl verf�gbarer Varianten
 * Ohne Select Felder
 * */
namespace TestAutoCompleteBaseStoreIssue;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Shopware\Components\Plugin\Context\UpdateContext;

class TestAutoCompleteBaseStoreIssue extends Plugin
{

    /**
     * @param InstallContext $context
     * This method is called on plugin installation
     */
    public function install(InstallContext $context)
    {
        parent::install($context);
    }
    /**
     * @param UpdateContext $context
     * This method is called on update of the plugin
     */
    public function update(UpdateContext $context)
    {
        return parent::update($context);
    }
    /**
     * @param ActivateContext $context
     * This method is called on activation of the plugin
     */
    public function activate(ActivateContext $context)
    {
        return parent::activate($context);
    }
    /**
     * @param DeactivateContext $context
     * This method is called on deactivation of the plugin
     */
    public function deactivate(DeactivateContext $context)
    {
        return parent::deactivate($context);
    }
    /**
     * @param UninstallContext $context
     * This method is called once on uninstallation of the plugin
     */
    public function uninstall(UninstallContext $context)
    {
        return parent::uninstall($context);
    }
}