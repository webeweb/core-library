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
 * Tds105 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds105Trait {

    /**
     * Tds105.
     *
     * @var float
     */
    private $tds105;

    /**
     * Get the tds105.
     *
     * @return float Returns the tds105.
     */
    public function getTds105() {
        return $this->tds105;
    }

    /**
     * Set the tds105.
     *
     * @param float $tds105 The tds105.
     */
    public function setTds105($tds105) {
        $this->tds105 = $tds105;
        return $this;
    }
}
