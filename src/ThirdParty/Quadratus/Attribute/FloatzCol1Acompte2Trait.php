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
 * z col1 acompte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzCol1Acompte2Trait {

    /**
     * z col1 acompte2.
     *
     * @var float
     */
    private $zCol1Acompte2;

    /**
     * Get the z col1 acompte2.
     *
     * @return float Returns the z col1 acompte2.
     */
    public function getzCol1Acompte2() {
        return $this->zCol1Acompte2;
    }

    /**
     * Set the z col1 acompte2.
     *
     * @param float $zCol1Acompte2 The z col1 acompte2.
     */
    public function setzCol1Acompte2($zCol1Acompte2) {
        $this->zCol1Acompte2 = $zCol1Acompte2;
        return $this;
    }
}
