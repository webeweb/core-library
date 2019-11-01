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
 * Az38b trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz38bTrait {

    /**
     * Az38b.
     *
     * @var float
     */
    private $az38b;

    /**
     * Get the az38b.
     *
     * @return float Returns the az38b.
     */
    public function getAz38b() {
        return $this->az38b;
    }

    /**
     * Set the az38b.
     *
     * @param float $az38b The az38b.
     */
    public function setAz38b($az38b) {
        $this->az38b = $az38b;
        return $this;
    }
}
