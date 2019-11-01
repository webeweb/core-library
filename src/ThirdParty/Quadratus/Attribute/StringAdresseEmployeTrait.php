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
 * Adresse employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdresseEmployeTrait {

    /**
     * Adresse employe.
     *
     * @var string
     */
    private $adresseEmploye;

    /**
     * Get the adresse employe.
     *
     * @return string Returns the adresse employe.
     */
    public function getAdresseEmploye() {
        return $this->adresseEmploye;
    }

    /**
     * Set the adresse employe.
     *
     * @param string $adresseEmploye The adresse employe.
     */
    public function setAdresseEmploye($adresseEmploye) {
        $this->adresseEmploye = $adresseEmploye;
        return $this;
    }
}
