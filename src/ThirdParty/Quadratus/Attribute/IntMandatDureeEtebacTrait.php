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
 * Mandat duree etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureeEtebacTrait {

    /**
     * Mandat duree etebac.
     *
     * @var int
     */
    private $mandatDureeEtebac;

    /**
     * Get the mandat duree etebac.
     *
     * @return int Returns the mandat duree etebac.
     */
    public function getMandatDureeEtebac() {
        return $this->mandatDureeEtebac;
    }

    /**
     * Set the mandat duree etebac.
     *
     * @param int $mandatDureeEtebac The mandat duree etebac.
     */
    public function setMandatDureeEtebac($mandatDureeEtebac) {
        $this->mandatDureeEtebac = $mandatDureeEtebac;
        return $this;
    }
}
