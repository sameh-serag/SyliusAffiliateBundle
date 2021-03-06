<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pentarim\SyliusAffiliateBundle\Model;

interface ProvisionInterface
{
    const TYPE_FIXED_PROVISION      = 'fixed_provision';
    const TYPE_PERCENTAGE_PROVISION = 'percentage_provision';

    /**
     * Get goal.
     *
     * @return AffiliateGoalInterface
     */
    public function getGoal();

    /**
     * Set goal.
     *
     * @param AffiliateGoalInterface $goal
     */
    public function setGoal(AffiliateGoalInterface $goal = null);

    /**
     * Get type.
     *
     * @return string
     */
    public function getType();

    /**
     * Set type.
     *
     * @param $type
     */
    public function setType($type);

    /**
     * Get configuration.
     *
     * @return array
     */
    public function getConfiguration();

    /**
     * Set configuration.
     *
     * @param array $configuration
     */
    public function setConfiguration(array $configuration);

}
