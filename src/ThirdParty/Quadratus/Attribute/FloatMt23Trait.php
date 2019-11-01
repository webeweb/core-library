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
 * Mt23 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt23Trait {

    /**
     * Mt23.
     *
     * @var float
     */
    private $mt23;

    /**
     * Get the mt23.
     *
     * @return float Returns the mt23.
     */
    public function getMt23() {
        return $this->mt23;
    }

    /**
     * Set the mt23.
     *
     * @param float $mt23 The mt23.
     */
    public function setMt23($mt23) {
        $this->mt23 = $mt23;
        return $this;
    }
}
