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
 * Adresse facturation saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdresseFacturationSaisieTrait {

    /**
     * Adresse facturation saisie.
     *
     * @var bool
     */
    private $adresseFacturationSaisie;

    /**
     * Get the adresse facturation saisie.
     *
     * @return bool Returns the adresse facturation saisie.
     */
    public function getAdresseFacturationSaisie() {
        return $this->adresseFacturationSaisie;
    }

    /**
     * Set the adresse facturation saisie.
     *
     * @param bool $adresseFacturationSaisie The adresse facturation saisie.
     */
    public function setAdresseFacturationSaisie($adresseFacturationSaisie) {
        $this->adresseFacturationSaisie = $adresseFacturationSaisie;
        return $this;
    }
}
