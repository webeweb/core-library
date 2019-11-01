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
 * Az3510 base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz3510BaseTrait {

    /**
     * Az3510 base.
     *
     * @var float
     */
    private $az3510Base;

    /**
     * Get the az3510 base.
     *
     * @return float Returns the az3510 base.
     */
    public function getAz3510Base() {
        return $this->az3510Base;
    }

    /**
     * Set the az3510 base.
     *
     * @param float $az3510Base The az3510 base.
     */
    public function setAz3510Base($az3510Base) {
        $this->az3510Base = $az3510Base;
        return $this;
    }
}
