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
 * Compte charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeTrait {

    /**
     * Compte charge.
     *
     * @var string
     */
    private $compteCharge;

    /**
     * Get the compte charge.
     *
     * @return string Returns the compte charge.
     */
    public function getCompteCharge() {
        return $this->compteCharge;
    }

    /**
     * Set the compte charge.
     *
     * @param string $compteCharge The compte charge.
     */
    public function setCompteCharge($compteCharge) {
        $this->compteCharge = $compteCharge;
        return $this;
    }
}
