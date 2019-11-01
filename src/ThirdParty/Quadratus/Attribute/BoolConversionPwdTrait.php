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
 * Conversion pwd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolConversionPwdTrait {

    /**
     * Conversion pwd.
     *
     * @var bool
     */
    private $conversionPwd;

    /**
     * Get the conversion pwd.
     *
     * @return bool Returns the conversion pwd.
     */
    public function getConversionPwd() {
        return $this->conversionPwd;
    }

    /**
     * Set the conversion pwd.
     *
     * @param bool $conversionPwd The conversion pwd.
     */
    public function setConversionPwd($conversionPwd) {
        $this->conversionPwd = $conversionPwd;
        return $this;
    }
}
