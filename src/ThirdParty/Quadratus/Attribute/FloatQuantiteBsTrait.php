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
 * Quantite bs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQuantiteBsTrait {

    /**
     * Quantite bs.
     *
     * @var float
     */
    private $quantiteBs;

    /**
     * Get the quantite bs.
     *
     * @return float Returns the quantite bs.
     */
    public function getQuantiteBs() {
        return $this->quantiteBs;
    }

    /**
     * Set the quantite bs.
     *
     * @param float $quantiteBs The quantite bs.
     */
    public function setQuantiteBs($quantiteBs) {
        $this->quantiteBs = $quantiteBs;
        return $this;
    }
}
