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
 * Prix u2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixU2Trait {

    /**
     * Prix u2.
     *
     * @var float
     */
    private $prixU2;

    /**
     * Get the prix u2.
     *
     * @return float Returns the prix u2.
     */
    public function getPrixU2() {
        return $this->prixU2;
    }

    /**
     * Set the prix u2.
     *
     * @param float $prixU2 The prix u2.
     */
    public function setPrixU2($prixU2) {
        $this->prixU2 = $prixU2;
        return $this;
    }
}
