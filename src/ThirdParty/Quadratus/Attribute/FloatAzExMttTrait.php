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
 * Az ex mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzExMttTrait {

    /**
     * Az ex mtt.
     *
     * @var float
     */
    private $azExMtt;

    /**
     * Get the az ex mtt.
     *
     * @return float Returns the az ex mtt.
     */
    public function getAzExMtt() {
        return $this->azExMtt;
    }

    /**
     * Set the az ex mtt.
     *
     * @param float $azExMtt The az ex mtt.
     */
    public function setAzExMtt($azExMtt) {
        $this->azExMtt = $azExMtt;
        return $this;
    }
}
