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
 * Az jc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzJcTrait {

    /**
     * Az jc.
     *
     * @var float
     */
    private $azJc;

    /**
     * Get the az jc.
     *
     * @return float Returns the az jc.
     */
    public function getAzJc() {
        return $this->azJc;
    }

    /**
     * Set the az jc.
     *
     * @param float $azJc The az jc.
     */
    public function setAzJc($azJc) {
        $this->azJc = $azJc;
        return $this;
    }
}
