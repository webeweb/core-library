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
 * Mt provision deb exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtProvisionDebExoTrait {

    /**
     * Mt provision deb exo.
     *
     * @var float
     */
    private $mtProvisionDebExo;

    /**
     * Get the mt provision deb exo.
     *
     * @return float Returns the mt provision deb exo.
     */
    public function getMtProvisionDebExo() {
        return $this->mtProvisionDebExo;
    }

    /**
     * Set the mt provision deb exo.
     *
     * @param float $mtProvisionDebExo The mt provision deb exo.
     */
    public function setMtProvisionDebExo($mtProvisionDebExo) {
        $this->mtProvisionDebExo = $mtProvisionDebExo;
        return $this;
    }
}
