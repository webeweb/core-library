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
 * z col1 acompte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzCol1Acompte1Trait {

    /**
     * z col1 acompte1.
     *
     * @var float
     */
    private $zCol1Acompte1;

    /**
     * Get the z col1 acompte1.
     *
     * @return float Returns the z col1 acompte1.
     */
    public function getzCol1Acompte1() {
        return $this->zCol1Acompte1;
    }

    /**
     * Set the z col1 acompte1.
     *
     * @param float $zCol1Acompte1 The z col1 acompte1.
     */
    public function setzCol1Acompte1($zCol1Acompte1) {
        $this->zCol1Acompte1 = $zCol1Acompte1;
        return $this;
    }
}
