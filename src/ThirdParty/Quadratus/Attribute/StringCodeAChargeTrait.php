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
 * Code a charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAChargeTrait {

    /**
     * Code a charge.
     *
     * @var string
     */
    private $codeACharge;

    /**
     * Get the code a charge.
     *
     * @return string Returns the code a charge.
     */
    public function getCodeACharge() {
        return $this->codeACharge;
    }

    /**
     * Set the code a charge.
     *
     * @param string $codeACharge The code a charge.
     */
    public function setCodeACharge($codeACharge) {
        $this->codeACharge = $codeACharge;
        return $this;
    }
}
