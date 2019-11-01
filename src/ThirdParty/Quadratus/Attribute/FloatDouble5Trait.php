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
 * Double5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDouble5Trait {

    /**
     * Double5.
     *
     * @var float
     */
    private $double5;

    /**
     * Get the double5.
     *
     * @return float Returns the double5.
     */
    public function getDouble5() {
        return $this->double5;
    }

    /**
     * Set the double5.
     *
     * @param float $double5 The double5.
     */
    public function setDouble5($double5) {
        $this->double5 = $double5;
        return $this;
    }
}
