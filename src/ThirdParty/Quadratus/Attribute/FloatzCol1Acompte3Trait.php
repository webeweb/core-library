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
 * z col1 acompte3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzCol1Acompte3Trait {

    /**
     * z col1 acompte3.
     *
     * @var float
     */
    private $zCol1Acompte3;

    /**
     * Get the z col1 acompte3.
     *
     * @return float Returns the z col1 acompte3.
     */
    public function getzCol1Acompte3() {
        return $this->zCol1Acompte3;
    }

    /**
     * Set the z col1 acompte3.
     *
     * @param float $zCol1Acompte3 The z col1 acompte3.
     */
    public function setzCol1Acompte3($zCol1Acompte3) {
        $this->zCol1Acompte3 = $zCol1Acompte3;
        return $this;
    }
}
