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
 * Ne pas saisir solde fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasSaisirSoldeFinTrait {

    /**
     * Ne pas saisir solde fin.
     *
     * @var bool
     */
    private $nePasSaisirSoldeFin;

    /**
     * Get the ne pas saisir solde fin.
     *
     * @return bool Returns the ne pas saisir solde fin.
     */
    public function getNePasSaisirSoldeFin() {
        return $this->nePasSaisirSoldeFin;
    }

    /**
     * Set the ne pas saisir solde fin.
     *
     * @param bool $nePasSaisirSoldeFin The ne pas saisir solde fin.
     */
    public function setNePasSaisirSoldeFin($nePasSaisirSoldeFin) {
        $this->nePasSaisirSoldeFin = $nePasSaisirSoldeFin;
        return $this;
    }
}
