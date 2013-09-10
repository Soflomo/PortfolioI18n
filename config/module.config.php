<?php

return array(
    'soflomo_portfolio' => array(
        'item_entity_class' => 'Soflomo\PortfolioI18n\Entity\Item',
    ),

    'doctrine' => array(
        'driver' => array(
            'soflomo_portfolio_i18n' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/mapping'
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Soflomo\PortfolioI18n\Entity' => 'soflomo_portfolio_i18n',
                ),
            ),
        ),
        'entity_resolver' => array(
            'orm_default' => array(
                'resolvers' => array(
                    'Soflomo\Portfolio\Entity\ItemInterface'                => 'Soflomo\PortfolioI18n\Entity\Item',
                    'Soflomo\PortfolioI18n\Entity\ItemTranslationInterface' => 'Soflomo\PortfolioI18n\Entity\ItemTranslation',
                ),
            ),
        ),
    ),
);