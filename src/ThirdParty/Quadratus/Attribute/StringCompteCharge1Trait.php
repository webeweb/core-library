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
 * Compte charge1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge1Trait {

    /**
     * Compte charge1.
     *
     * @var string
     */
    private $compteCharge1;

    /**
     * Get the compte charge1.
     *
     * @return string Returns the compte charge1.
     */
    public function getCompteCharge1() {
        return $this->compteCharge1;
    }

    /**
     * Set the compte charge1.
     *
     * @param string $compteCharge1 The compte charge1.
     */
    public function setCompteCharge1($compteCharge1) {
        $this->compteCharge1 = $compteCharge1;
        return $this;
    }
}
