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
 * Type transport2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransport2Trait {

    /**
     * Type transport2.
     *
     * @var string
     */
    private $typeTransport2;

    /**
     * Get the type transport2.
     *
     * @return string Returns the type transport2.
     */
    public function getTypeTransport2() {
        return $this->typeTransport2;
    }

    /**
     * Set the type transport2.
     *
     * @param string $typeTransport2 The type transport2.
     */
    public function setTypeTransport2($typeTransport2) {
        $this->typeTransport2 = $typeTransport2;
        return $this;
    }
}
