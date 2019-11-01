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
 * Acompte3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAcompte3Trait {

    /**
     * Acompte3.
     *
     * @var float
     */
    private $acompte3;

    /**
     * Get the acompte3.
     *
     * @return float Returns the acompte3.
     */
    public function getAcompte3() {
        return $this->acompte3;
    }

    /**
     * Set the acompte3.
     *
     * @param float $acompte3 The acompte3.
     */
    public function setAcompte3($acompte3) {
        $this->acompte3 = $acompte3;
        return $this;
    }
}
