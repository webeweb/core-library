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
 * Mandat suivi ducsedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviDucsediTrait {

    /**
     * Mandat suivi ducsedi.
     *
     * @var bool
     */
    private $mandatSuiviDucsedi;

    /**
     * Get the mandat suivi ducsedi.
     *
     * @return bool Returns the mandat suivi ducsedi.
     */
    public function getMandatSuiviDucsedi() {
        return $this->mandatSuiviDucsedi;
    }

    /**
     * Set the mandat suivi ducsedi.
     *
     * @param bool $mandatSuiviDucsedi The mandat suivi ducsedi.
     */
    public function setMandatSuiviDucsedi($mandatSuiviDucsedi) {
        $this->mandatSuiviDucsedi = $mandatSuiviDucsedi;
        return $this;
    }
}
