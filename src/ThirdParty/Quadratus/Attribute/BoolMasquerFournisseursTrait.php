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
 * Masquer fournisseurs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMasquerFournisseursTrait {

    /**
     * Masquer fournisseurs.
     *
     * @var bool
     */
    private $masquerFournisseurs;

    /**
     * Get the masquer fournisseurs.
     *
     * @return bool Returns the masquer fournisseurs.
     */
    public function getMasquerFournisseurs() {
        return $this->masquerFournisseurs;
    }

    /**
     * Set the masquer fournisseurs.
     *
     * @param bool $masquerFournisseurs The masquer fournisseurs.
     */
    public function setMasquerFournisseurs($masquerFournisseurs) {
        $this->masquerFournisseurs = $masquerFournisseurs;
        return $this;
    }
}
