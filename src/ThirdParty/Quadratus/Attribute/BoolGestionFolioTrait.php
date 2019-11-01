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
 * Gestion folio trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionFolioTrait {

    /**
     * Gestion folio.
     *
     * @var bool
     */
    private $gestionFolio;

    /**
     * Get the gestion folio.
     *
     * @return bool Returns the gestion folio.
     */
    public function getGestionFolio() {
        return $this->gestionFolio;
    }

    /**
     * Set the gestion folio.
     *
     * @param bool $gestionFolio The gestion folio.
     */
    public function setGestionFolio($gestionFolio) {
        $this->gestionFolio = $gestionFolio;
        return $this;
    }
}
