<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pentarim\SyliusAffiliateBundle\Form\Type;

use Pentarim\SyliusAffiliateBundle\Form\Type\Core\AbstractConfigurationCollectionType;

class RuleCollectionType extends AbstractConfigurationCollectionType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_affiliate_goal_rule_collection';
    }

    /**
     * {@inheritdoc}
     */
    public function getFormTypeOption()
    {
        return 'sylius_affiliate_rule';
    }
}
