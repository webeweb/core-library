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
 * Acompte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAcompte2Trait {

    /**
     * Acompte2.
     *
     * @var float
     */
    private $acompte2;

    /**
     * Get the acompte2.
     *
     * @return float Returns the acompte2.
     */
    public function getAcompte2() {
        return $this->acompte2;
    }

    /**
     * Set the acompte2.
     *
     * @param float $acompte2 The acompte2.
     */
    public function setAcompte2($acompte2) {
        $this->acompte2 = $acompte2;
        return $this;
    }
}
