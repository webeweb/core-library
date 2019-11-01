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
 * Az ey mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzEyMttTrait {

    /**
     * Az ey mtt.
     *
     * @var float
     */
    private $azEyMtt;

    /**
     * Get the az ey mtt.
     *
     * @return float Returns the az ey mtt.
     */
    public function getAzEyMtt() {
        return $this->azEyMtt;
    }

    /**
     * Set the az ey mtt.
     *
     * @param float $azEyMtt The az ey mtt.
     */
    public function setAzEyMtt($azEyMtt) {
        $this->azEyMtt = $azEyMtt;
        return $this;
    }
}
