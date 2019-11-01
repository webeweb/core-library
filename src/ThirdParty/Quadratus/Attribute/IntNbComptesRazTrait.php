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
 * Nb comptes raz trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbComptesRazTrait {

    /**
     * Nb comptes raz.
     *
     * @var int
     */
    private $nbComptesRaz;

    /**
     * Get the nb comptes raz.
     *
     * @return int Returns the nb comptes raz.
     */
    public function getNbComptesRaz() {
        return $this->nbComptesRaz;
    }

    /**
     * Set the nb comptes raz.
     *
     * @param int $nbComptesRaz The nb comptes raz.
     */
    public function setNbComptesRaz($nbComptesRaz) {
        $this->nbComptesRaz = $nbComptesRaz;
        return $this;
    }
}
