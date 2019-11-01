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
 * Nom affaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomAffaireTrait {

    /**
     * Nom affaire.
     *
     * @var string
     */
    private $nomAffaire;

    /**
     * Get the nom affaire.
     *
     * @return string Returns the nom affaire.
     */
    public function getNomAffaire() {
        return $this->nomAffaire;
    }

    /**
     * Set the nom affaire.
     *
     * @param string $nomAffaire The nom affaire.
     */
    public function setNomAffaire($nomAffaire) {
        $this->nomAffaire = $nomAffaire;
        return $this;
    }
}
