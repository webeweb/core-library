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
 * Mt provision dot exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtProvisionDotExoTrait {

    /**
     * Mt provision dot exo.
     *
     * @var float
     */
    private $mtProvisionDotExo;

    /**
     * Get the mt provision dot exo.
     *
     * @return float Returns the mt provision dot exo.
     */
    public function getMtProvisionDotExo() {
        return $this->mtProvisionDotExo;
    }

    /**
     * Set the mt provision dot exo.
     *
     * @param float $mtProvisionDotExo The mt provision dot exo.
     */
    public function setMtProvisionDotExo($mtProvisionDotExo) {
        $this->mtProvisionDotExo = $mtProvisionDotExo;
        return $this;
    }
}
