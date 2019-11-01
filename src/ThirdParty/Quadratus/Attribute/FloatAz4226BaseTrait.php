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
 * Az4226 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4226BaseTrait {

    /**
     * Az4226 base.
     *
     * @var float
     */
    private $az4226Base;

    /**
     * Get the az4226 base.
     *
     * @return float Returns the az4226 base.
     */
    public function getAz4226Base() {
        return $this->az4226Base;
    }

    /**
     * Set the az4226 base.
     *
     * @param float $az4226Base The az4226 base.
     */
    public function setAz4226Base($az4226Base) {
        $this->az4226Base = $az4226Base;
        return $this;
    }
}
