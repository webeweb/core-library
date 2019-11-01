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
 * Qte economique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatQteEconomiqueTrait {

    /**
     * Qte economique.
     *
     * @var float
     */
    private $qteEconomique;

    /**
     * Get the qte economique.
     *
     * @return float Returns the qte economique.
     */
    public function getQteEconomique() {
        return $this->qteEconomique;
    }

    /**
     * Set the qte economique.
     *
     * @param float $qteEconomique The qte economique.
     */
    public function setQteEconomique($qteEconomique) {
        $this->qteEconomique = $qteEconomique;
        return $this;
    }
}
