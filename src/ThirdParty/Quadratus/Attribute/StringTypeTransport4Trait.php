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
 * Type transport4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransport4Trait {

    /**
     * Type transport4.
     *
     * @var string
     */
    private $typeTransport4;

    /**
     * Get the type transport4.
     *
     * @return string Returns the type transport4.
     */
    public function getTypeTransport4() {
        return $this->typeTransport4;
    }

    /**
     * Set the type transport4.
     *
     * @param string $typeTransport4 The type transport4.
     */
    public function setTypeTransport4($typeTransport4) {
        $this->typeTransport4 = $typeTransport4;
        return $this;
    }
}
