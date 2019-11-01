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
 * Acces dossier cabinet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesDossierCabinetTrait {

    /**
     * Acces dossier cabinet.
     *
     * @var bool
     */
    private $accesDossierCabinet;

    /**
     * Get the acces dossier cabinet.
     *
     * @return bool Returns the acces dossier cabinet.
     */
    public function getAccesDossierCabinet() {
        return $this->accesDossierCabinet;
    }

    /**
     * Set the acces dossier cabinet.
     *
     * @param bool $accesDossierCabinet The acces dossier cabinet.
     */
    public function setAccesDossierCabinet($accesDossierCabinet) {
        $this->accesDossierCabinet = $accesDossierCabinet;
        return $this;
    }
}
