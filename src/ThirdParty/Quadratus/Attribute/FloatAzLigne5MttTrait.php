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
 * Az ligne5 mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzLigne5MttTrait {

    /**
     * Az ligne5 mtt.
     *
     * @var float
     */
    private $azLigne5Mtt;

    /**
     * Get the az ligne5 mtt.
     *
     * @return float Returns the az ligne5 mtt.
     */
    public function getAzLigne5Mtt() {
        return $this->azLigne5Mtt;
    }

    /**
     * Set the az ligne5 mtt.
     *
     * @param float $azLigne5Mtt The az ligne5 mtt.
     */
    public function setAzLigne5Mtt($azLigne5Mtt) {
        $this->azLigne5Mtt = $azLigne5Mtt;
        return $this;
    }
}
