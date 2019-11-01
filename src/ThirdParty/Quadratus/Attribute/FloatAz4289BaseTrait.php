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
 * Az4289 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4289BaseTrait {

    /**
     * Az4289 base.
     *
     * @var float
     */
    private $az4289Base;

    /**
     * Get the az4289 base.
     *
     * @return float Returns the az4289 base.
     */
    public function getAz4289Base() {
        return $this->az4289Base;
    }

    /**
     * Set the az4289 base.
     *
     * @param float $az4289Base The az4289 base.
     */
    public function setAz4289Base($az4289Base) {
        $this->az4289Base = $az4289Base;
        return $this;
    }
}
