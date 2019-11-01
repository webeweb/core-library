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
 * Qte max facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteMaxFactureTrait {

    /**
     * Qte max facture.
     *
     * @var float
     */
    private $qteMaxFacture;

    /**
     * Get the qte max facture.
     *
     * @return float Returns the qte max facture.
     */
    public function getQteMaxFacture() {
        return $this->qteMaxFacture;
    }

    /**
     * Set the qte max facture.
     *
     * @param float $qteMaxFacture The qte max facture.
     */
    public function setQteMaxFacture($qteMaxFacture) {
        $this->qteMaxFacture = $qteMaxFacture;
        return $this;
    }
}
