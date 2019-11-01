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
 * Nbr ecritures bq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbrEcrituresBqTrait {

    /**
     * Nbr ecritures bq.
     *
     * @var float
     */
    private $nbrEcrituresBq;

    /**
     * Get the nbr ecritures bq.
     *
     * @return float Returns the nbr ecritures bq.
     */
    public function getNbrEcrituresBq() {
        return $this->nbrEcrituresBq;
    }

    /**
     * Set the nbr ecritures bq.
     *
     * @param float $nbrEcrituresBq The nbr ecritures bq.
     */
    public function setNbrEcrituresBq($nbrEcrituresBq) {
        $this->nbrEcrituresBq = $nbrEcrituresBq;
        return $this;
    }
}
