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
 * Compte charge10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge10Trait {

    /**
     * Compte charge10.
     *
     * @var string
     */
    private $compteCharge10;

    /**
     * Get the compte charge10.
     *
     * @return string Returns the compte charge10.
     */
    public function getCompteCharge10() {
        return $this->compteCharge10;
    }

    /**
     * Set the compte charge10.
     *
     * @param string $compteCharge10 The compte charge10.
     */
    public function setCompteCharge10($compteCharge10) {
        $this->compteCharge10 = $compteCharge10;
        return $this;
    }
}
