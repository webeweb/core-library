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
 * Compte charge9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge9Trait {

    /**
     * Compte charge9.
     *
     * @var string
     */
    private $compteCharge9;

    /**
     * Get the compte charge9.
     *
     * @return string Returns the compte charge9.
     */
    public function getCompteCharge9() {
        return $this->compteCharge9;
    }

    /**
     * Set the compte charge9.
     *
     * @param string $compteCharge9 The compte charge9.
     */
    public function setCompteCharge9($compteCharge9) {
        $this->compteCharge9 = $compteCharge9;
        return $this;
    }
}
