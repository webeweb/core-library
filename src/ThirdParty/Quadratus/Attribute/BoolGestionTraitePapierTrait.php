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
 * Gestion traite papier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionTraitePapierTrait {

    /**
     * Gestion traite papier.
     *
     * @var bool
     */
    private $gestionTraitePapier;

    /**
     * Get the gestion traite papier.
     *
     * @return bool Returns the gestion traite papier.
     */
    public function getGestionTraitePapier() {
        return $this->gestionTraitePapier;
    }

    /**
     * Set the gestion traite papier.
     *
     * @param bool $gestionTraitePapier The gestion traite papier.
     */
    public function setGestionTraitePapier($gestionTraitePapier) {
        $this->gestionTraitePapier = $gestionTraitePapier;
        return $this;
    }
}
