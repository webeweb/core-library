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
 * Az ligne4 mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzLigne4MttTrait {

    /**
     * Az ligne4 mtt.
     *
     * @var float
     */
    private $azLigne4Mtt;

    /**
     * Get the az ligne4 mtt.
     *
     * @return float Returns the az ligne4 mtt.
     */
    public function getAzLigne4Mtt() {
        return $this->azLigne4Mtt;
    }

    /**
     * Set the az ligne4 mtt.
     *
     * @param float $azLigne4Mtt The az ligne4 mtt.
     */
    public function setAzLigne4Mtt($azLigne4Mtt) {
        $this->azLigne4Mtt = $azLigne4Mtt;
        return $this;
    }
}
