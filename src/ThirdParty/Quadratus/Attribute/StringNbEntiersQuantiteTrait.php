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
 * Nb entiers quantite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbEntiersQuantiteTrait {

    /**
     * Nb entiers quantite.
     *
     * @var string
     */
    private $nbEntiersQuantite;

    /**
     * Get the nb entiers quantite.
     *
     * @return string Returns the nb entiers quantite.
     */
    public function getNbEntiersQuantite() {
        return $this->nbEntiersQuantite;
    }

    /**
     * Set the nb entiers quantite.
     *
     * @param string $nbEntiersQuantite The nb entiers quantite.
     */
    public function setNbEntiersQuantite($nbEntiersQuantite) {
        $this->nbEntiersQuantite = $nbEntiersQuantite;
        return $this;
    }
}
