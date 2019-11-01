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
 * Mt20 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt20Trait {

    /**
     * Mt20.
     *
     * @var float
     */
    private $mt20;

    /**
     * Get the mt20.
     *
     * @return float Returns the mt20.
     */
    public function getMt20() {
        return $this->mt20;
    }

    /**
     * Set the mt20.
     *
     * @param float $mt20 The mt20.
     */
    public function setMt20($mt20) {
        $this->mt20 = $mt20;
        return $this;
    }
}
