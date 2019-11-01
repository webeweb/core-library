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
 * Qte origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteOrigineTrait {

    /**
     * Qte origine.
     *
     * @var float
     */
    private $qteOrigine;

    /**
     * Get the qte origine.
     *
     * @return float Returns the qte origine.
     */
    public function getQteOrigine() {
        return $this->qteOrigine;
    }

    /**
     * Set the qte origine.
     *
     * @param float $qteOrigine The qte origine.
     */
    public function setQteOrigine($qteOrigine) {
        $this->qteOrigine = $qteOrigine;
        return $this;
    }
}
