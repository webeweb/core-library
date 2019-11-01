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
 * z col2 acompte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzCol2Acompte2Trait {

    /**
     * z col2 acompte2.
     *
     * @var float
     */
    private $zCol2Acompte2;

    /**
     * Get the z col2 acompte2.
     *
     * @return float Returns the z col2 acompte2.
     */
    public function getzCol2Acompte2() {
        return $this->zCol2Acompte2;
    }

    /**
     * Set the z col2 acompte2.
     *
     * @param float $zCol2Acompte2 The z col2 acompte2.
     */
    public function setzCol2Acompte2($zCol2Acompte2) {
        $this->zCol2Acompte2 = $zCol2Acompte2;
        return $this;
    }
}
