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
 * Code charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeChargeTrait {

    /**
     * Code charge.
     *
     * @var string
     */
    private $codeCharge;

    /**
     * Get the code charge.
     *
     * @return string Returns the code charge.
     */
    public function getCodeCharge() {
        return $this->codeCharge;
    }

    /**
     * Set the code charge.
     *
     * @param string $codeCharge The code charge.
     */
    public function setCodeCharge($codeCharge) {
        $this->codeCharge = $codeCharge;
        return $this;
    }
}
