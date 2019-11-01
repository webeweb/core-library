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
 * Az4229 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz4229BaseTrait {

    /**
     * Az4229 base.
     *
     * @var float
     */
    private $az4229Base;

    /**
     * Get the az4229 base.
     *
     * @return float Returns the az4229 base.
     */
    public function getAz4229Base() {
        return $this->az4229Base;
    }

    /**
     * Set the az4229 base.
     *
     * @param float $az4229Base The az4229 base.
     */
    public function setAz4229Base($az4229Base) {
        $this->az4229Base = $az4229Base;
        return $this;
    }
}
