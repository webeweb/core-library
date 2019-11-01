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
 * z col2 acompte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatzCol2Acompte1Trait {

    /**
     * z col2 acompte1.
     *
     * @var float
     */
    private $zCol2Acompte1;

    /**
     * Get the z col2 acompte1.
     *
     * @return float Returns the z col2 acompte1.
     */
    public function getzCol2Acompte1() {
        return $this->zCol2Acompte1;
    }

    /**
     * Set the z col2 acompte1.
     *
     * @param float $zCol2Acompte1 The z col2 acompte1.
     */
    public function setzCol2Acompte1($zCol2Acompte1) {
        $this->zCol2Acompte1 = $zCol2Acompte1;
        return $this;
    }
}
