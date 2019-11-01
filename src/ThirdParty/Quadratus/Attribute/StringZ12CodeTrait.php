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
 * Z12 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringZ12CodeTrait {

    /**
     * Z12 code.
     *
     * @var string
     */
    private $z12Code;

    /**
     * Get the z12 code.
     *
     * @return string Returns the z12 code.
     */
    public function getZ12Code() {
        return $this->z12Code;
    }

    /**
     * Set the z12 code.
     *
     * @param string $z12Code The z12 code.
     */
    public function setZ12Code($z12Code) {
        $this->z12Code = $z12Code;
        return $this;
    }
}
