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
 * Tds82 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds82Trait {

    /**
     * Tds82.
     *
     * @var float
     */
    private $tds82;

    /**
     * Get the tds82.
     *
     * @return float Returns the tds82.
     */
    public function getTds82() {
        return $this->tds82;
    }

    /**
     * Set the tds82.
     *
     * @param float $tds82 The tds82.
     */
    public function setTds82($tds82) {
        $this->tds82 = $tds82;
        return $this;
    }
}
