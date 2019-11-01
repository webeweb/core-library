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
 * Az4240 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4240BaseTrait {

    /**
     * Az4240 base.
     *
     * @var float
     */
    private $az4240Base;

    /**
     * Get the az4240 base.
     *
     * @return float Returns the az4240 base.
     */
    public function getAz4240Base() {
        return $this->az4240Base;
    }

    /**
     * Set the az4240 base.
     *
     * @param float $az4240Base The az4240 base.
     */
    public function setAz4240Base($az4240Base) {
        $this->az4240Base = $az4240Base;
        return $this;
    }
}
