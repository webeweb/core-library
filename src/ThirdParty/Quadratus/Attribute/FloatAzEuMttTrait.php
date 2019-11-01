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
 * Az eu mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzEuMttTrait {

    /**
     * Az eu mtt.
     *
     * @var float
     */
    private $azEuMtt;

    /**
     * Get the az eu mtt.
     *
     * @return float Returns the az eu mtt.
     */
    public function getAzEuMtt() {
        return $this->azEuMtt;
    }

    /**
     * Set the az eu mtt.
     *
     * @param float $azEuMtt The az eu mtt.
     */
    public function setAzEuMtt($azEuMtt) {
        $this->azEuMtt = $azEuMtt;
        return $this;
    }
}
