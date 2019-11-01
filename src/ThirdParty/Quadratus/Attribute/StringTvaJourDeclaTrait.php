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
 * Tva jour decla trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaJourDeclaTrait {

    /**
     * Tva jour decla.
     *
     * @var string
     */
    private $tvaJourDecla;

    /**
     * Get the tva jour decla.
     *
     * @return string Returns the tva jour decla.
     */
    public function getTvaJourDecla() {
        return $this->tvaJourDecla;
    }

    /**
     * Set the tva jour decla.
     *
     * @param string $tvaJourDecla The tva jour decla.
     */
    public function setTvaJourDecla($tvaJourDecla) {
        $this->tvaJourDecla = $tvaJourDecla;
        return $this;
    }
}
