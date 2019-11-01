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
 * Az59 mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz59MttTrait {

    /**
     * Az59 mtt.
     *
     * @var float
     */
    private $az59Mtt;

    /**
     * Get the az59 mtt.
     *
     * @return float Returns the az59 mtt.
     */
    public function getAz59Mtt() {
        return $this->az59Mtt;
    }

    /**
     * Set the az59 mtt.
     *
     * @param float $az59Mtt The az59 mtt.
     */
    public function setAz59Mtt($az59Mtt) {
        $this->az59Mtt = $az59Mtt;
        return $this;
    }
}
