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
 * Mt crds100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCrds100Trait {

    /**
     * Mt crds100.
     *
     * @var float
     */
    private $mtCrds100;

    /**
     * Get the mt crds100.
     *
     * @return float Returns the mt crds100.
     */
    public function getMtCrds100() {
        return $this->mtCrds100;
    }

    /**
     * Set the mt crds100.
     *
     * @param float $mtCrds100 The mt crds100.
     */
    public function setMtCrds100($mtCrds100) {
        $this->mtCrds100 = $mtCrds100;
        return $this;
    }
}
