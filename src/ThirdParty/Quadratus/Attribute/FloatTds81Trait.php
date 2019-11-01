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
 * Tds81 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds81Trait {

    /**
     * Tds81.
     *
     * @var float
     */
    private $tds81;

    /**
     * Get the tds81.
     *
     * @return float Returns the tds81.
     */
    public function getTds81() {
        return $this->tds81;
    }

    /**
     * Set the tds81.
     *
     * @param float $tds81 The tds81.
     */
    public function setTds81($tds81) {
        $this->tds81 = $tds81;
        return $this;
    }
}
