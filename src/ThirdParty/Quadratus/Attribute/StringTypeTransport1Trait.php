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
 * Type transport1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransport1Trait {

    /**
     * Type transport1.
     *
     * @var string
     */
    private $typeTransport1;

    /**
     * Get the type transport1.
     *
     * @return string Returns the type transport1.
     */
    public function getTypeTransport1() {
        return $this->typeTransport1;
    }

    /**
     * Set the type transport1.
     *
     * @param string $typeTransport1 The type transport1.
     */
    public function setTypeTransport1($typeTransport1) {
        $this->typeTransport1 = $typeTransport1;
        return $this;
    }
}
