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
 * Num lot ecrit transf cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransfCbTrait {

    /**
     * Num lot ecrit transf cb.
     *
     * @var int
     */
    private $numLotEcritTransfCb;

    /**
     * Get the num lot ecrit transf cb.
     *
     * @return int Returns the num lot ecrit transf cb.
     */
    public function getNumLotEcritTransfCb() {
        return $this->numLotEcritTransfCb;
    }

    /**
     * Set the num lot ecrit transf cb.
     *
     * @param int $numLotEcritTransfCb The num lot ecrit transf cb.
     */
    public function setNumLotEcritTransfCb($numLotEcritTransfCb) {
        $this->numLotEcritTransfCb = $numLotEcritTransfCb;
        return $this;
    }
}
