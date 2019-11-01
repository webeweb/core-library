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
 * Mandat suivi tdfc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviTdfcTrait {

    /**
     * Mandat suivi tdfc.
     *
     * @var bool
     */
    private $mandatSuiviTdfc;

    /**
     * Get the mandat suivi tdfc.
     *
     * @return bool Returns the mandat suivi tdfc.
     */
    public function getMandatSuiviTdfc() {
        return $this->mandatSuiviTdfc;
    }

    /**
     * Set the mandat suivi tdfc.
     *
     * @param bool $mandatSuiviTdfc The mandat suivi tdfc.
     */
    public function setMandatSuiviTdfc($mandatSuiviTdfc) {
        $this->mandatSuiviTdfc = $mandatSuiviTdfc;
        return $this;
    }
}
