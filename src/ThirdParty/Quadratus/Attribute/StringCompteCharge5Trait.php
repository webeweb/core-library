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
 * Compte charge5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge5Trait {

    /**
     * Compte charge5.
     *
     * @var string
     */
    private $compteCharge5;

    /**
     * Get the compte charge5.
     *
     * @return string Returns the compte charge5.
     */
    public function getCompteCharge5() {
        return $this->compteCharge5;
    }

    /**
     * Set the compte charge5.
     *
     * @param string $compteCharge5 The compte charge5.
     */
    public function setCompteCharge5($compteCharge5) {
        $this->compteCharge5 = $compteCharge5;
        return $this;
    }
}
