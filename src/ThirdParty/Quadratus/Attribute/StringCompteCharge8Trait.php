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
 * Compte charge8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCharge8Trait {

    /**
     * Compte charge8.
     *
     * @var string
     */
    private $compteCharge8;

    /**
     * Get the compte charge8.
     *
     * @return string Returns the compte charge8.
     */
    public function getCompteCharge8() {
        return $this->compteCharge8;
    }

    /**
     * Set the compte charge8.
     *
     * @param string $compteCharge8 The compte charge8.
     */
    public function setCompteCharge8($compteCharge8) {
        $this->compteCharge8 = $compteCharge8;
        return $this;
    }
}
