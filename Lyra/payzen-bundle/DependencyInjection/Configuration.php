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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('payzen');
        //$rootNode = $treeBuilder->root();


        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('site_id')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('test_mode')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('algo_signature')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('kr_popin')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('test_password')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('prod_password')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('test_public_key')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('prod_public_key')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('hmac_256_test_key')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('hmac_256_key_prod')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('client_javascript_url')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('api_rest_url')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('kr_post_url_refused')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('kr_post_url_success')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('kr_language')
            ->isRequired()
            ->cannotBeEmpty()
            ->end()
            ->scalarNode('form_action')
            ->isRequired()
            ->cannotBeEmpty()
            ->end();
            
        return $treeBuilder;
    }
}
