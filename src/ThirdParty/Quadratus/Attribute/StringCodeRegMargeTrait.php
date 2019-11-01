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
 * Code reg marge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegMargeTrait {

    /**
     * Code reg marge.
     *
     * @var string
     */
    private $codeRegMarge;

    /**
     * Get the code reg marge.
     *
     * @return string Returns the code reg marge.
     */
    public function getCodeRegMarge() {
        return $this->codeRegMarge;
    }

    /**
     * Set the code reg marge.
     *
     * @param string $codeRegMarge The code reg marge.
     */
    public function setCodeRegMarge($codeRegMarge) {
        $this->codeRegMarge = $codeRegMarge;
        return $this;
    }
}
