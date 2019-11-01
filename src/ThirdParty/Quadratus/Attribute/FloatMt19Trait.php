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
 * Mt19 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt19Trait {

    /**
     * Mt19.
     *
     * @var float
     */
    private $mt19;

    /**
     * Get the mt19.
     *
     * @return float Returns the mt19.
     */
    public function getMt19() {
        return $this->mt19;
    }

    /**
     * Set the mt19.
     *
     * @param float $mt19 The mt19.
     */
    public function setMt19($mt19) {
        $this->mt19 = $mt19;
        return $this;
    }
}
