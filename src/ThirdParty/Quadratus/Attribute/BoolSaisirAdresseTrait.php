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
 * Saisir adresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisirAdresseTrait {

    /**
     * Saisir adresse.
     *
     * @var bool
     */
    private $saisirAdresse;

    /**
     * Get the saisir adresse.
     *
     * @return bool Returns the saisir adresse.
     */
    public function getSaisirAdresse() {
        return $this->saisirAdresse;
    }

    /**
     * Set the saisir adresse.
     *
     * @param bool $saisirAdresse The saisir adresse.
     */
    public function setSaisirAdresse($saisirAdresse) {
        $this->saisirAdresse = $saisirAdresse;
        return $this;
    }
}
