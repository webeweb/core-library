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
 * Nb mois consecutifs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbMoisConsecutifsTrait {

    /**
     * Nb mois consecutifs.
     *
     * @var int
     */
    private $nbMoisConsecutifs;

    /**
     * Get the nb mois consecutifs.
     *
     * @return int Returns the nb mois consecutifs.
     */
    public function getNbMoisConsecutifs() {
        return $this->nbMoisConsecutifs;
    }

    /**
     * Set the nb mois consecutifs.
     *
     * @param int $nbMoisConsecutifs The nb mois consecutifs.
     */
    public function setNbMoisConsecutifs($nbMoisConsecutifs) {
        $this->nbMoisConsecutifs = $nbMoisConsecutifs;
        return $this;
    }
}
