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
 * Az4215 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4215BaseTrait {

    /**
     * Az4215 base.
     *
     * @var float
     */
    private $az4215Base;

    /**
     * Get the az4215 base.
     *
     * @return float Returns the az4215 base.
     */
    public function getAz4215Base() {
        return $this->az4215Base;
    }

    /**
     * Set the az4215 base.
     *
     * @param float $az4215Base The az4215 base.
     */
    public function setAz4215Base($az4215Base) {
        $this->az4215Base = $az4215Base;
        return $this;
    }
}
