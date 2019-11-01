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
 * Prix revient trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixRevientTrait {

    /**
     * Prix revient.
     *
     * @var float
     */
    private $prixRevient;

    /**
     * Get the prix revient.
     *
     * @return float Returns the prix revient.
     */
    public function getPrixRevient() {
        return $this->prixRevient;
    }

    /**
     * Set the prix revient.
     *
     * @param float $prixRevient The prix revient.
     */
    public function setPrixRevient($prixRevient) {
        $this->prixRevient = $prixRevient;
        return $this;
    }
}
