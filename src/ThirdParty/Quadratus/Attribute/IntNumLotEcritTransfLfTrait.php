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
 * Num lot ecrit transf lf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritTransfLfTrait {

    /**
     * Num lot ecrit transf lf.
     *
     * @var int
     */
    private $numLotEcritTransfLf;

    /**
     * Get the num lot ecrit transf lf.
     *
     * @return int Returns the num lot ecrit transf lf.
     */
    public function getNumLotEcritTransfLf() {
        return $this->numLotEcritTransfLf;
    }

    /**
     * Set the num lot ecrit transf lf.
     *
     * @param int $numLotEcritTransfLf The num lot ecrit transf lf.
     */
    public function setNumLotEcritTransfLf($numLotEcritTransfLf) {
        $this->numLotEcritTransfLf = $numLotEcritTransfLf;
        return $this;
    }
}
