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
 * Az4237 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4237BaseTrait {

    /**
     * Az4237 base.
     *
     * @var float
     */
    private $az4237Base;

    /**
     * Get the az4237 base.
     *
     * @return float Returns the az4237 base.
     */
    public function getAz4237Base() {
        return $this->az4237Base;
    }

    /**
     * Set the az4237 base.
     *
     * @param float $az4237Base The az4237 base.
     */
    public function setAz4237Base($az4237Base) {
        $this->az4237Base = $az4237Base;
        return $this;
    }
}
