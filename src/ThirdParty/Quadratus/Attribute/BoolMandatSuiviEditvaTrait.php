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
 * Mandat suivi editva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMandatSuiviEditvaTrait {

    /**
     * Mandat suivi editva.
     *
     * @var bool
     */
    private $mandatSuiviEditva;

    /**
     * Get the mandat suivi editva.
     *
     * @return bool Returns the mandat suivi editva.
     */
    public function getMandatSuiviEditva() {
        return $this->mandatSuiviEditva;
    }

    /**
     * Set the mandat suivi editva.
     *
     * @param bool $mandatSuiviEditva The mandat suivi editva.
     */
    public function setMandatSuiviEditva($mandatSuiviEditva) {
        $this->mandatSuiviEditva = $mandatSuiviEditva;
        return $this;
    }
}
