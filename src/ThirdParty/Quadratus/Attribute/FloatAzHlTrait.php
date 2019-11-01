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
 * Az hl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzHlTrait {

    /**
     * Az hl.
     *
     * @var float
     */
    private $azHl;

    /**
     * Get the az hl.
     *
     * @return float Returns the az hl.
     */
    public function getAzHl() {
        return $this->azHl;
    }

    /**
     * Set the az hl.
     *
     * @param float $azHl The az hl.
     */
    public function setAzHl($azHl) {
        $this->azHl = $azHl;
        return $this;
    }
}
