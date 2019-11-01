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
 * Code avenant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAvenantTrait {

    /**
     * Code avenant.
     *
     * @var string
     */
    private $codeAvenant;

    /**
     * Get the code avenant.
     *
     * @return string Returns the code avenant.
     */
    public function getCodeAvenant() {
        return $this->codeAvenant;
    }

    /**
     * Set the code avenant.
     *
     * @param string $codeAvenant The code avenant.
     */
    public function setCodeAvenant($codeAvenant) {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }
}
