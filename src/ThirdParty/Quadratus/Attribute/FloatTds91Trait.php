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
 * Tds91 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds91Trait {

    /**
     * Tds91.
     *
     * @var float
     */
    private $tds91;

    /**
     * Get the tds91.
     *
     * @return float Returns the tds91.
     */
    public function getTds91() {
        return $this->tds91;
    }

    /**
     * Set the tds91.
     *
     * @param float $tds91 The tds91.
     */
    public function setTds91($tds91) {
        $this->tds91 = $tds91;
        return $this;
    }
}
