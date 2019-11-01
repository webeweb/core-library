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
 * Tds89 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds89Trait {

    /**
     * Tds89.
     *
     * @var float
     */
    private $tds89;

    /**
     * Get the tds89.
     *
     * @return float Returns the tds89.
     */
    public function getTds89() {
        return $this->tds89;
    }

    /**
     * Set the tds89.
     *
     * @param float $tds89 The tds89.
     */
    public function setTds89($tds89) {
        $this->tds89 = $tds89;
        return $this;
    }
}
