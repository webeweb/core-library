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
 * Vmp gestion en saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVmpGestionEnSaisieTrait {

    /**
     * Vmp gestion en saisie.
     *
     * @var bool
     */
    private $vmpGestionEnSaisie;

    /**
     * Get the vmp gestion en saisie.
     *
     * @return bool Returns the vmp gestion en saisie.
     */
    public function getVmpGestionEnSaisie() {
        return $this->vmpGestionEnSaisie;
    }

    /**
     * Set the vmp gestion en saisie.
     *
     * @param bool $vmpGestionEnSaisie The vmp gestion en saisie.
     */
    public function setVmpGestionEnSaisie($vmpGestionEnSaisie) {
        $this->vmpGestionEnSaisie = $vmpGestionEnSaisie;
        return $this;
    }
}
