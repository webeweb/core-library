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
 * Type horaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeHoraireTrait {

    /**
     * Type horaire.
     *
     * @var int
     */
    private $typeHoraire;

    /**
     * Get the type horaire.
     *
     * @return int Returns the type horaire.
     */
    public function getTypeHoraire() {
        return $this->typeHoraire;
    }

    /**
     * Set the type horaire.
     *
     * @param int $typeHoraire The type horaire.
     */
    public function setTypeHoraire($typeHoraire) {
        $this->typeHoraire = $typeHoraire;
        return $this;
    }
}
