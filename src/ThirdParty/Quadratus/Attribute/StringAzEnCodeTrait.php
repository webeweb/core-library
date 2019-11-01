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
 * Az en code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEnCodeTrait {

    /**
     * Az en code.
     *
     * @var string
     */
    private $azEnCode;

    /**
     * Get the az en code.
     *
     * @return string Returns the az en code.
     */
    public function getAzEnCode() {
        return $this->azEnCode;
    }

    /**
     * Set the az en code.
     *
     * @param string $azEnCode The az en code.
     */
    public function setAzEnCode($azEnCode) {
        $this->azEnCode = $azEnCode;
        return $this;
    }
}
