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
 * Provisions cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProvisionsCpTrait {

    /**
     * Provisions cp.
     *
     * @var bool
     */
    private $provisionsCp;

    /**
     * Get the provisions cp.
     *
     * @return bool Returns the provisions cp.
     */
    public function getProvisionsCp() {
        return $this->provisionsCp;
    }

    /**
     * Set the provisions cp.
     *
     * @param bool $provisionsCp The provisions cp.
     */
    public function setProvisionsCp($provisionsCp) {
        $this->provisionsCp = $provisionsCp;
        return $this;
    }
}
