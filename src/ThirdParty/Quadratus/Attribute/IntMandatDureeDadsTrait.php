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
 * Mandat duree dads trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureeDadsTrait {

    /**
     * Mandat duree dads.
     *
     * @var int
     */
    private $mandatDureeDads;

    /**
     * Get the mandat duree dads.
     *
     * @return int Returns the mandat duree dads.
     */
    public function getMandatDureeDads() {
        return $this->mandatDureeDads;
    }

    /**
     * Set the mandat duree dads.
     *
     * @param int $mandatDureeDads The mandat duree dads.
     */
    public function setMandatDureeDads($mandatDureeDads) {
        $this->mandatDureeDads = $mandatDureeDads;
        return $this;
    }
}
