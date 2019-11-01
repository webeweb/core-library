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
 * Az4268 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4268BaseTrait {

    /**
     * Az4268 base.
     *
     * @var float
     */
    private $az4268Base;

    /**
     * Get the az4268 base.
     *
     * @return float Returns the az4268 base.
     */
    public function getAz4268Base() {
        return $this->az4268Base;
    }

    /**
     * Set the az4268 base.
     *
     * @param float $az4268Base The az4268 base.
     */
    public function setAz4268Base($az4268Base) {
        $this->az4268Base = $az4268Base;
        return $this;
    }
}
