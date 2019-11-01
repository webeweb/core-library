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
 * Vir seuil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatVirSeuilTrait {

    /**
     * Vir seuil.
     *
     * @var float
     */
    private $virSeuil;

    /**
     * Get the vir seuil.
     *
     * @return float Returns the vir seuil.
     */
    public function getVirSeuil() {
        return $this->virSeuil;
    }

    /**
     * Set the vir seuil.
     *
     * @param float $virSeuil The vir seuil.
     */
    public function setVirSeuil($virSeuil) {
        $this->virSeuil = $virSeuil;
        return $this;
    }
}
