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
 * Increment cpte frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIncrementCpteFrnTrait {

    /**
     * Increment cpte frn.
     *
     * @var int
     */
    private $incrementCpteFrn;

    /**
     * Get the increment cpte frn.
     *
     * @return int Returns the increment cpte frn.
     */
    public function getIncrementCpteFrn() {
        return $this->incrementCpteFrn;
    }

    /**
     * Set the increment cpte frn.
     *
     * @param int $incrementCpteFrn The increment cpte frn.
     */
    public function setIncrementCpteFrn($incrementCpteFrn) {
        $this->incrementCpteFrn = $incrementCpteFrn;
        return $this;
    }
}
