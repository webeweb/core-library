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
 * Nb exemplaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbExemplaireTrait {

    /**
     * Nb exemplaire.
     *
     * @var string
     */
    private $nbExemplaire;

    /**
     * Get the nb exemplaire.
     *
     * @return string Returns the nb exemplaire.
     */
    public function getNbExemplaire() {
        return $this->nbExemplaire;
    }

    /**
     * Set the nb exemplaire.
     *
     * @param string $nbExemplaire The nb exemplaire.
     */
    public function setNbExemplaire($nbExemplaire) {
        $this->nbExemplaire = $nbExemplaire;
        return $this;
    }
}
