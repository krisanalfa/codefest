<?php namespace App\Provider;

use Bono\Provider\Provider;
use Bono\Helper\URL;

/**
 * Basic URI mapping that not handled by NormController
 *
 * @author      Krisan Alfa Timur <krisan47@gmail.com>
 * @copyright   2013 PT Sagara Xinix Solusitama
 * @link        http://xinix.co.id/products/viper
 * @license     https://raw.github.com/krisanalfa/viper/master/LICENSE
 * @package     Viper Arch
 */
class AppProvider extends Provider
{
    /**
     * Initialize the provider
     *
     * @return void
     */
    public function initialize()
    {
        $app = $this->app;

        // When application get request to '/' path
        $app->get('/', function () use ($app) {
            $app->render('page');
        });

        $app->get('/about', function () use ($app) {
            $app->render('about', array(
                'name' => 'Krisan Alfa Timur',
                'url'  => URL::site(),
            ));
        });
    }
}
