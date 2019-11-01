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
 * Mandat suivi etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviEtebacTrait {

    /**
     * Mandat suivi etebac.
     *
     * @var bool
     */
    private $mandatSuiviEtebac;

    /**
     * Get the mandat suivi etebac.
     *
     * @return bool Returns the mandat suivi etebac.
     */
    public function getMandatSuiviEtebac() {
        return $this->mandatSuiviEtebac;
    }

    /**
     * Set the mandat suivi etebac.
     *
     * @param bool $mandatSuiviEtebac The mandat suivi etebac.
     */
    public function setMandatSuiviEtebac($mandatSuiviEtebac) {
        $this->mandatSuiviEtebac = $mandatSuiviEtebac;
        return $this;
    }
}
