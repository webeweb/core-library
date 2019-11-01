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
 * Provision cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatProvisionCpTrait {

    /**
     * Provision cp.
     *
     * @var float
     */
    private $provisionCp;

    /**
     * Get the provision cp.
     *
     * @return float Returns the provision cp.
     */
    public function getProvisionCp() {
        return $this->provisionCp;
    }

    /**
     * Set the provision cp.
     *
     * @param float $provisionCp The provision cp.
     */
    public function setProvisionCp($provisionCp) {
        $this->provisionCp = $provisionCp;
        return $this;
    }
}
