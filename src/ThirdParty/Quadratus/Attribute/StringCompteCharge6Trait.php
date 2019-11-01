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
 * Compte charge6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge6Trait {

    /**
     * Compte charge6.
     *
     * @var string
     */
    private $compteCharge6;

    /**
     * Get the compte charge6.
     *
     * @return string Returns the compte charge6.
     */
    public function getCompteCharge6() {
        return $this->compteCharge6;
    }

    /**
     * Set the compte charge6.
     *
     * @param string $compteCharge6 The compte charge6.
     */
    public function setCompteCharge6($compteCharge6) {
        $this->compteCharge6 = $compteCharge6;
        return $this;
    }
}
