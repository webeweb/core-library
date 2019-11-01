<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Contributions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatContributionsTrait {

    /**
     * Contributions.
     *
     * @var float
     */
    private $contributions;

    /**
     * Get the contributions.
     *
     * @return float Returns the contributions.
     */
    public function getContributions() {
        return $this->contributions;
    }

    /**
     * Set the contributions.
     *
     * @param float $contributions The contributions.
     */
    public function setContributions($contributions) {
        $this->contributions = $contributions;
        return $this;
    }
}
