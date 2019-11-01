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
 * Tds127 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds127Trait {

    /**
     * Tds127.
     *
     * @var float
     */
    private $tds127;

    /**
     * Get the tds127.
     *
     * @return float Returns the tds127.
     */
    public function getTds127() {
        return $this->tds127;
    }

    /**
     * Set the tds127.
     *
     * @param float $tds127 The tds127.
     */
    public function setTds127($tds127) {
        $this->tds127 = $tds127;
        return $this;
    }
}
