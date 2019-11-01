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
 * Pourcent dep hc max trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentDepHcMaxTrait {

    /**
     * Pourcent dep hc max.
     *
     * @var float
     */
    private $pourcentDepHcMax;

    /**
     * Get the pourcent dep hc max.
     *
     * @return float Returns the pourcent dep hc max.
     */
    public function getPourcentDepHcMax() {
        return $this->pourcentDepHcMax;
    }

    /**
     * Set the pourcent dep hc max.
     *
     * @param float $pourcentDepHcMax The pourcent dep hc max.
     */
    public function setPourcentDepHcMax($pourcentDepHcMax) {
        $this->pourcentDepHcMax = $pourcentDepHcMax;
        return $this;
    }
}
