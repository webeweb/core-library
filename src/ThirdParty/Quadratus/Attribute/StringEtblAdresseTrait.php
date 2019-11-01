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
 * Etbl adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblAdresseTrait {

    /**
     * Etbl adresse.
     *
     * @var string
     */
    private $etblAdresse;

    /**
     * Get the etbl adresse.
     *
     * @return string Returns the etbl adresse.
     */
    public function getEtblAdresse() {
        return $this->etblAdresse;
    }

    /**
     * Set the etbl adresse.
     *
     * @param string $etblAdresse The etbl adresse.
     */
    public function setEtblAdresse($etblAdresse) {
        $this->etblAdresse = $etblAdresse;
        return $this;
    }
}
