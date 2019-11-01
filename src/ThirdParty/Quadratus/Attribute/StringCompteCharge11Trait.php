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
 * Compte charge11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge11Trait {

    /**
     * Compte charge11.
     *
     * @var string
     */
    private $compteCharge11;

    /**
     * Get the compte charge11.
     *
     * @return string Returns the compte charge11.
     */
    public function getCompteCharge11() {
        return $this->compteCharge11;
    }

    /**
     * Set the compte charge11.
     *
     * @param string $compteCharge11 The compte charge11.
     */
    public function setCompteCharge11($compteCharge11) {
        $this->compteCharge11 = $compteCharge11;
        return $this;
    }
}
