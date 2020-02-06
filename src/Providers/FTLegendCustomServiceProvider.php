<?php

namespace FTLegendCustom\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;


 

class FTLegendCustomServiceProvider extends ServiceProvider
{

  const PRIORITY = 0;

	/**
	 * Register the service provider.
	 */
	public function register()
	{

	}


/**
	 * Boot a template for the footer that will be displayed in the template plugin instead of the original footer.
	 */
	public function boot(Twig $twig, Dispatcher $dispatcher)
    {
        /*
        $dispatcher->listen('IO.init.templates', function(Partial $partial)
        {
                $partial->set('footer', 'FTLegendCustom::PageDesign.Partials.Footer');


        }, self::PRIORITY);
        */
        $dispatcher->listen('IO.tpl.category.item', function (TemplateContainer $container)
        {
            $container->setTemplate('FTLegendCustom::Category.Item.CategoryItem');
        }, self::PRIORITY);
        
        return false;
    }
    
    
}
