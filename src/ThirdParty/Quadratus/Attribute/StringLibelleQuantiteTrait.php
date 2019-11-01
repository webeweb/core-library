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
 * Libelle quantite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleQuantiteTrait {

    /**
     * Libelle quantite.
     *
     * @var string
     */
    private $libelleQuantite;

    /**
     * Get the libelle quantite.
     *
     * @return string Returns the libelle quantite.
     */
    public function getLibelleQuantite() {
        return $this->libelleQuantite;
    }

    /**
     * Set the libelle quantite.
     *
     * @param string $libelleQuantite The libelle quantite.
     */
    public function setLibelleQuantite($libelleQuantite) {
        $this->libelleQuantite = $libelleQuantite;
        return $this;
    }
}
