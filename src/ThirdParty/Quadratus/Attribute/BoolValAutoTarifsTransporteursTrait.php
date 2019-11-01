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
 * Val auto tarifs transporteurs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolValAutoTarifsTransporteursTrait {

    /**
     * Val auto tarifs transporteurs.
     *
     * @var bool
     */
    private $valAutoTarifsTransporteurs;

    /**
     * Get the val auto tarifs transporteurs.
     *
     * @return bool Returns the val auto tarifs transporteurs.
     */
    public function getValAutoTarifsTransporteurs() {
        return $this->valAutoTarifsTransporteurs;
    }

    /**
     * Set the val auto tarifs transporteurs.
     *
     * @param bool $valAutoTarifsTransporteurs The val auto tarifs transporteurs.
     */
    public function setValAutoTarifsTransporteurs($valAutoTarifsTransporteurs) {
        $this->valAutoTarifsTransporteurs = $valAutoTarifsTransporteurs;
        return $this;
    }
}
