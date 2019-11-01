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
 * Tds117 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds117Trait {

    /**
     * Tds117.
     *
     * @var float
     */
    private $tds117;

    /**
     * Get the tds117.
     *
     * @return float Returns the tds117.
     */
    public function getTds117() {
        return $this->tds117;
    }

    /**
     * Set the tds117.
     *
     * @param float $tds117 The tds117.
     */
    public function setTds117($tds117) {
        $this->tds117 = $tds117;
        return $this;
    }
}
