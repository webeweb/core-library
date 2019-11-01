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
 * Acompte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAcompte1Trait {

    /**
     * Acompte1.
     *
     * @var float
     */
    private $acompte1;

    /**
     * Get the acompte1.
     *
     * @return float Returns the acompte1.
     */
    public function getAcompte1() {
        return $this->acompte1;
    }

    /**
     * Set the acompte1.
     *
     * @param float $acompte1 The acompte1.
     */
    public function setAcompte1($acompte1) {
        $this->acompte1 = $acompte1;
        return $this;
    }
}
