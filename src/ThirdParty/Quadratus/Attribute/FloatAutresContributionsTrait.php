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
 * Autres contributions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresContributionsTrait {

    /**
     * Autres contributions.
     *
     * @var float
     */
    private $autresContributions;

    /**
     * Get the autres contributions.
     *
     * @return float Returns the autres contributions.
     */
    public function getAutresContributions() {
        return $this->autresContributions;
    }

    /**
     * Set the autres contributions.
     *
     * @param float $autresContributions The autres contributions.
     */
    public function setAutresContributions($autresContributions) {
        $this->autresContributions = $autresContributions;
        return $this;
    }
}
