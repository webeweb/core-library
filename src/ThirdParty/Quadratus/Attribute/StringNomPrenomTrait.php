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
 * Nom prenom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomPrenomTrait {

    /**
     * Nom prenom.
     *
     * @var string
     */
    private $nomPrenom;

    /**
     * Get the nom prenom.
     *
     * @return string Returns the nom prenom.
     */
    public function getNomPrenom() {
        return $this->nomPrenom;
    }

    /**
     * Set the nom prenom.
     *
     * @param string $nomPrenom The nom prenom.
     */
    public function setNomPrenom($nomPrenom) {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }
}
