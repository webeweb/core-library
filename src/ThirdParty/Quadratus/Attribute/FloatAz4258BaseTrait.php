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
 * Az4258 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4258BaseTrait {

    /**
     * Az4258 base.
     *
     * @var float
     */
    private $az4258Base;

    /**
     * Get the az4258 base.
     *
     * @return float Returns the az4258 base.
     */
    public function getAz4258Base() {
        return $this->az4258Base;
    }

    /**
     * Set the az4258 base.
     *
     * @param float $az4258Base The az4258 base.
     */
    public function setAz4258Base($az4258Base) {
        $this->az4258Base = $az4258Base;
        return $this;
    }
}
