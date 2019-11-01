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
 * Qte stock maxi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteStockMaxiTrait {

    /**
     * Qte stock maxi.
     *
     * @var float
     */
    private $qteStockMaxi;

    /**
     * Get the qte stock maxi.
     *
     * @return float Returns the qte stock maxi.
     */
    public function getQteStockMaxi() {
        return $this->qteStockMaxi;
    }

    /**
     * Set the qte stock maxi.
     *
     * @param float $qteStockMaxi The qte stock maxi.
     */
    public function setQteStockMaxi($qteStockMaxi) {
        $this->qteStockMaxi = $qteStockMaxi;
        return $this;
    }
}
