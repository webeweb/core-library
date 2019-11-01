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
 * Num lot ecrit transf immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransfImmoTrait {

    /**
     * Num lot ecrit transf immo.
     *
     * @var int
     */
    private $numLotEcritTransfImmo;

    /**
     * Get the num lot ecrit transf immo.
     *
     * @return int Returns the num lot ecrit transf immo.
     */
    public function getNumLotEcritTransfImmo() {
        return $this->numLotEcritTransfImmo;
    }

    /**
     * Set the num lot ecrit transf immo.
     *
     * @param int $numLotEcritTransfImmo The num lot ecrit transf immo.
     */
    public function setNumLotEcritTransfImmo($numLotEcritTransfImmo) {
        $this->numLotEcritTransfImmo = $numLotEcritTransfImmo;
        return $this;
    }
}
