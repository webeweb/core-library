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
 * Mandat duree pedi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMandatDureePediTrait {

    /**
     * Mandat duree pedi.
     *
     * @var int
     */
    private $mandatDureePedi;

    /**
     * Get the mandat duree pedi.
     *
     * @return int Returns the mandat duree pedi.
     */
    public function getMandatDureePedi() {
        return $this->mandatDureePedi;
    }

    /**
     * Set the mandat duree pedi.
     *
     * @param int $mandatDureePedi The mandat duree pedi.
     */
    public function setMandatDureePedi($mandatDureePedi) {
        $this->mandatDureePedi = $mandatDureePedi;
        return $this;
    }
}
