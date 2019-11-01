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
 * Mandat duree editva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureeEditvaTrait {

    /**
     * Mandat duree editva.
     *
     * @var int
     */
    private $mandatDureeEditva;

    /**
     * Get the mandat duree editva.
     *
     * @return int Returns the mandat duree editva.
     */
    public function getMandatDureeEditva() {
        return $this->mandatDureeEditva;
    }

    /**
     * Set the mandat duree editva.
     *
     * @param int $mandatDureeEditva The mandat duree editva.
     */
    public function setMandatDureeEditva($mandatDureeEditva) {
        $this->mandatDureeEditva = $mandatDureeEditva;
        return $this;
    }
}
