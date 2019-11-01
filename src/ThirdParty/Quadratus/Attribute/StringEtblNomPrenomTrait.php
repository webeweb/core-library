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
 * Etbl nom prenom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblNomPrenomTrait {

    /**
     * Etbl nom prenom.
     *
     * @var string
     */
    private $etblNomPrenom;

    /**
     * Get the etbl nom prenom.
     *
     * @return string Returns the etbl nom prenom.
     */
    public function getEtblNomPrenom() {
        return $this->etblNomPrenom;
    }

    /**
     * Set the etbl nom prenom.
     *
     * @param string $etblNomPrenom The etbl nom prenom.
     */
    public function setEtblNomPrenom($etblNomPrenom) {
        $this->etblNomPrenom = $etblNomPrenom;
        return $this;
    }
}
