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
 * Mandat suivi pedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviPediTrait {

    /**
     * Mandat suivi pedi.
     *
     * @var bool
     */
    private $mandatSuiviPedi;

    /**
     * Get the mandat suivi pedi.
     *
     * @return bool Returns the mandat suivi pedi.
     */
    public function getMandatSuiviPedi() {
        return $this->mandatSuiviPedi;
    }

    /**
     * Set the mandat suivi pedi.
     *
     * @param bool $mandatSuiviPedi The mandat suivi pedi.
     */
    public function setMandatSuiviPedi($mandatSuiviPedi) {
        $this->mandatSuiviPedi = $mandatSuiviPedi;
        return $this;
    }
}
