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
 * Code reg charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegChargeTrait {

    /**
     * Code reg charge.
     *
     * @var string
     */
    private $codeRegCharge;

    /**
     * Get the code reg charge.
     *
     * @return string Returns the code reg charge.
     */
    public function getCodeRegCharge() {
        return $this->codeRegCharge;
    }

    /**
     * Set the code reg charge.
     *
     * @param string $codeRegCharge The code reg charge.
     */
    public function setCodeRegCharge($codeRegCharge) {
        $this->codeRegCharge = $codeRegCharge;
        return $this;
    }
}
