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
 * Mt prime forfait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtPrimeForfaitTrait {

    /**
     * Mt prime forfait.
     *
     * @var float
     */
    private $mtPrimeForfait;

    /**
     * Get the mt prime forfait.
     *
     * @return float Returns the mt prime forfait.
     */
    public function getMtPrimeForfait() {
        return $this->mtPrimeForfait;
    }

    /**
     * Set the mt prime forfait.
     *
     * @param float $mtPrimeForfait The mt prime forfait.
     */
    public function setMtPrimeForfait($mtPrimeForfait) {
        $this->mtPrimeForfait = $mtPrimeForfait;
        return $this;
    }
}
