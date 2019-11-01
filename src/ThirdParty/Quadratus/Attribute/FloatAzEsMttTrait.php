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
 * Az es mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzEsMttTrait {

    /**
     * Az es mtt.
     *
     * @var float
     */
    private $azEsMtt;

    /**
     * Get the az es mtt.
     *
     * @return float Returns the az es mtt.
     */
    public function getAzEsMtt() {
        return $this->azEsMtt;
    }

    /**
     * Set the az es mtt.
     *
     * @param float $azEsMtt The az es mtt.
     */
    public function setAzEsMtt($azEsMtt) {
        $this->azEsMtt = $azEsMtt;
        return $this;
    }
}
