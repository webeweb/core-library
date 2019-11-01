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
 * Nb decimales quantite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDecimalesQuantiteTrait {

    /**
     * Nb decimales quantite.
     *
     * @var string
     */
    private $nbDecimalesQuantite;

    /**
     * Get the nb decimales quantite.
     *
     * @return string Returns the nb decimales quantite.
     */
    public function getNbDecimalesQuantite() {
        return $this->nbDecimalesQuantite;
    }

    /**
     * Set the nb decimales quantite.
     *
     * @param string $nbDecimalesQuantite The nb decimales quantite.
     */
    public function setNbDecimalesQuantite($nbDecimalesQuantite) {
        $this->nbDecimalesQuantite = $nbDecimalesQuantite;
        return $this;
    }
}
