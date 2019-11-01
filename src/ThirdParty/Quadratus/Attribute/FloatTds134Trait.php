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
 * Tds134 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds134Trait {

    /**
     * Tds134.
     *
     * @var float
     */
    private $tds134;

    /**
     * Get the tds134.
     *
     * @return float Returns the tds134.
     */
    public function getTds134() {
        return $this->tds134;
    }

    /**
     * Set the tds134.
     *
     * @param float $tds134 The tds134.
     */
    public function setTds134($tds134) {
        $this->tds134 = $tds134;
        return $this;
    }
}
