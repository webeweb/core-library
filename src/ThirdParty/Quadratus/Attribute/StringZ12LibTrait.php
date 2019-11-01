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
 * Z12 lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZ12LibTrait {

    /**
     * Z12 lib.
     *
     * @var string
     */
    private $z12Lib;

    /**
     * Get the z12 lib.
     *
     * @return string Returns the z12 lib.
     */
    public function getZ12Lib() {
        return $this->z12Lib;
    }

    /**
     * Set the z12 lib.
     *
     * @param string $z12Lib The z12 lib.
     */
    public function setZ12Lib($z12Lib) {
        $this->z12Lib = $z12Lib;
        return $this;
    }
}
