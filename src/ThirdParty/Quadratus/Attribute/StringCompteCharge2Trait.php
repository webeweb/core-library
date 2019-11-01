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
 * Compte charge2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge2Trait {

    /**
     * Compte charge2.
     *
     * @var string
     */
    private $compteCharge2;

    /**
     * Get the compte charge2.
     *
     * @return string Returns the compte charge2.
     */
    public function getCompteCharge2() {
        return $this->compteCharge2;
    }

    /**
     * Set the compte charge2.
     *
     * @param string $compteCharge2 The compte charge2.
     */
    public function setCompteCharge2($compteCharge2) {
        $this->compteCharge2 = $compteCharge2;
        return $this;
    }
}
