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
 * Qte stock reel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteStockReelTrait {

    /**
     * Qte stock reel.
     *
     * @var float
     */
    private $qteStockReel;

    /**
     * Get the qte stock reel.
     *
     * @return float Returns the qte stock reel.
     */
    public function getQteStockReel() {
        return $this->qteStockReel;
    }

    /**
     * Set the qte stock reel.
     *
     * @param float $qteStockReel The qte stock reel.
     */
    public function setQteStockReel($qteStockReel) {
        $this->qteStockReel = $qteStockReel;
        return $this;
    }
}
