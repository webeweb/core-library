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
 * Mandat suivi dads trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviDadsTrait {

    /**
     * Mandat suivi dads.
     *
     * @var bool
     */
    private $mandatSuiviDads;

    /**
     * Get the mandat suivi dads.
     *
     * @return bool Returns the mandat suivi dads.
     */
    public function getMandatSuiviDads() {
        return $this->mandatSuiviDads;
    }

    /**
     * Set the mandat suivi dads.
     *
     * @param bool $mandatSuiviDads The mandat suivi dads.
     */
    public function setMandatSuiviDads($mandatSuiviDads) {
        $this->mandatSuiviDads = $mandatSuiviDads;
        return $this;
    }
}
