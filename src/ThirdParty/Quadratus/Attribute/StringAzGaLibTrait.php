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
 * Az ga lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzGaLibTrait {

    /**
     * Az ga lib.
     *
     * @var string
     */
    private $azGaLib;

    /**
     * Get the az ga lib.
     *
     * @return string Returns the az ga lib.
     */
    public function getAzGaLib() {
        return $this->azGaLib;
    }

    /**
     * Set the az ga lib.
     *
     * @param string $azGaLib The az ga lib.
     */
    public function setAzGaLib($azGaLib) {
        $this->azGaLib = $azGaLib;
        return $this;
    }
}
