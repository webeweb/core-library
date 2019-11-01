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
 * Mandat duree ducsedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureeDucsediTrait {

    /**
     * Mandat duree ducsedi.
     *
     * @var int
     */
    private $mandatDureeDucsedi;

    /**
     * Get the mandat duree ducsedi.
     *
     * @return int Returns the mandat duree ducsedi.
     */
    public function getMandatDureeDucsedi() {
        return $this->mandatDureeDucsedi;
    }

    /**
     * Set the mandat duree ducsedi.
     *
     * @param int $mandatDureeDucsedi The mandat duree ducsedi.
     */
    public function setMandatDureeDucsedi($mandatDureeDucsedi) {
        $this->mandatDureeDucsedi = $mandatDureeDucsedi;
        return $this;
    }
}
