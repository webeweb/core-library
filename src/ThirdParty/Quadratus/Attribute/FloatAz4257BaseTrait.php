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
 * Az4257 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4257BaseTrait {

    /**
     * Az4257 base.
     *
     * @var float
     */
    private $az4257Base;

    /**
     * Get the az4257 base.
     *
     * @return float Returns the az4257 base.
     */
    public function getAz4257Base() {
        return $this->az4257Base;
    }

    /**
     * Set the az4257 base.
     *
     * @param float $az4257Base The az4257 base.
     */
    public function setAz4257Base($az4257Base) {
        $this->az4257Base = $az4257Base;
        return $this;
    }
}
