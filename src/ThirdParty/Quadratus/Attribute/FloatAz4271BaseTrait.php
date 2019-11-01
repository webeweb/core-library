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
 * Az4271 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4271BaseTrait {

    /**
     * Az4271 base.
     *
     * @var float
     */
    private $az4271Base;

    /**
     * Get the az4271 base.
     *
     * @return float Returns the az4271 base.
     */
    public function getAz4271Base() {
        return $this->az4271Base;
    }

    /**
     * Set the az4271 base.
     *
     * @param float $az4271Base The az4271 base.
     */
    public function setAz4271Base($az4271Base) {
        $this->az4271Base = $az4271Base;
        return $this;
    }
}
