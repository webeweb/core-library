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
 * Az3520 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3520BaseTrait {

    /**
     * Az3520 base.
     *
     * @var float
     */
    private $az3520Base;

    /**
     * Get the az3520 base.
     *
     * @return float Returns the az3520 base.
     */
    public function getAz3520Base() {
        return $this->az3520Base;
    }

    /**
     * Set the az3520 base.
     *
     * @param float $az3520Base The az3520 base.
     */
    public function setAz3520Base($az3520Base) {
        $this->az3520Base = $az3520Base;
        return $this;
    }
}
