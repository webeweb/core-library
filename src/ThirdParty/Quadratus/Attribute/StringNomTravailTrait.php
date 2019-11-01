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
 * Nom travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomTravailTrait {

    /**
     * Nom travail.
     *
     * @var string
     */
    private $nomTravail;

    /**
     * Get the nom travail.
     *
     * @return string Returns the nom travail.
     */
    public function getNomTravail() {
        return $this->nomTravail;
    }

    /**
     * Set the nom travail.
     *
     * @param string $nomTravail The nom travail.
     */
    public function setNomTravail($nomTravail) {
        $this->nomTravail = $nomTravail;
        return $this;
    }
}
