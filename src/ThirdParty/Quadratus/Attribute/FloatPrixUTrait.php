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
 * Prix u trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixUTrait {

    /**
     * Prix u.
     *
     * @var float
     */
    private $prixU;

    /**
     * Get the prix u.
     *
     * @return float Returns the prix u.
     */
    public function getPrixU() {
        return $this->prixU;
    }

    /**
     * Set the prix u.
     *
     * @param float $prixU The prix u.
     */
    public function setPrixU($prixU) {
        $this->prixU = $prixU;
        return $this;
    }
}
