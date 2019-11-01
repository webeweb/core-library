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
 * Maintien salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMaintienSalaireTrait {

    /**
     * Maintien salaire.
     *
     * @var string
     */
    private $maintienSalaire;

    /**
     * Get the maintien salaire.
     *
     * @return string Returns the maintien salaire.
     */
    public function getMaintienSalaire() {
        return $this->maintienSalaire;
    }

    /**
     * Set the maintien salaire.
     *
     * @param string $maintienSalaire The maintien salaire.
     */
    public function setMaintienSalaire($maintienSalaire) {
        $this->maintienSalaire = $maintienSalaire;
        return $this;
    }
}
