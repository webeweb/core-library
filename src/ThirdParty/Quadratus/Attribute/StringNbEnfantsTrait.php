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
 * Nb enfants trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbEnfantsTrait {

    /**
     * Nb enfants.
     *
     * @var string
     */
    private $nbEnfants;

    /**
     * Get the nb enfants.
     *
     * @return string Returns the nb enfants.
     */
    public function getNbEnfants() {
        return $this->nbEnfants;
    }

    /**
     * Set the nb enfants.
     *
     * @param string $nbEnfants The nb enfants.
     */
    public function setNbEnfants($nbEnfants) {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }
}
