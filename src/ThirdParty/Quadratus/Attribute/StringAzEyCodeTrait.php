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
 * Az ey code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEyCodeTrait {

    /**
     * Az ey code.
     *
     * @var string
     */
    private $azEyCode;

    /**
     * Get the az ey code.
     *
     * @return string Returns the az ey code.
     */
    public function getAzEyCode() {
        return $this->azEyCode;
    }

    /**
     * Set the az ey code.
     *
     * @param string $azEyCode The az ey code.
     */
    public function setAzEyCode($azEyCode) {
        $this->azEyCode = $azEyCode;
        return $this;
    }
}
