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
 * Type maintien salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMaintienSalaireTrait {

    /**
     * Type maintien salaire.
     *
     * @var string
     */
    private $typeMaintienSalaire;

    /**
     * Get the type maintien salaire.
     *
     * @return string Returns the type maintien salaire.
     */
    public function getTypeMaintienSalaire() {
        return $this->typeMaintienSalaire;
    }

    /**
     * Set the type maintien salaire.
     *
     * @param string $typeMaintienSalaire The type maintien salaire.
     */
    public function setTypeMaintienSalaire($typeMaintienSalaire) {
        $this->typeMaintienSalaire = $typeMaintienSalaire;
        return $this;
    }
}
