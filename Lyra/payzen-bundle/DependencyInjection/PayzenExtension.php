<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;

class PayzenExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $array_attributes = ['site_id', 'test_mode', 'algo_signature', 'kr_popin', 'test_password', 'prod_password'
        , 'test_public_key', 'prod_public_key', 'hmac_256_test_key', 'hmac_256_key_prod', 'client_javascript_url', 'api_rest_url', 'kr_post_url_refused'
        , 'kr_post_url_success','kr_language','form_action'];
        foreach ($array_attributes as $attribute) {
            $container->setParameter($attribute , $config[$attribute]);
        }
    }
}
