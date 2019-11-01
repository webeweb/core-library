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
 * Tds136 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds136Trait {

    /**
     * Tds136.
     *
     * @var float
     */
    private $tds136;

    /**
     * Get the tds136.
     *
     * @return float Returns the tds136.
     */
    public function getTds136() {
        return $this->tds136;
    }

    /**
     * Set the tds136.
     *
     * @param float $tds136 The tds136.
     */
    public function setTds136($tds136) {
        $this->tds136 = $tds136;
        return $this;
    }
}
