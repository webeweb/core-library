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
 * Restant du avant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRestantDuAvantTrait {

    /**
     * Restant du avant.
     *
     * @var float
     */
    private $restantDuAvant;

    /**
     * Get the restant du avant.
     *
     * @return float Returns the restant du avant.
     */
    public function getRestantDuAvant() {
        return $this->restantDuAvant;
    }

    /**
     * Set the restant du avant.
     *
     * @param float $restantDuAvant The restant du avant.
     */
    public function setRestantDuAvant($restantDuAvant) {
        $this->restantDuAvant = $restantDuAvant;
        return $this;
    }
}
