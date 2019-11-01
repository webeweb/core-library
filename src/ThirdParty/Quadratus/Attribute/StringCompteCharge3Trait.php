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
 * Compte charge3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge3Trait {

    /**
     * Compte charge3.
     *
     * @var string
     */
    private $compteCharge3;

    /**
     * Get the compte charge3.
     *
     * @return string Returns the compte charge3.
     */
    public function getCompteCharge3() {
        return $this->compteCharge3;
    }

    /**
     * Set the compte charge3.
     *
     * @param string $compteCharge3 The compte charge3.
     */
    public function setCompteCharge3($compteCharge3) {
        $this->compteCharge3 = $compteCharge3;
        return $this;
    }
}
