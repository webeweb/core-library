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
 * Type transport3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransport3Trait {

    /**
     * Type transport3.
     *
     * @var string
     */
    private $typeTransport3;

    /**
     * Get the type transport3.
     *
     * @return string Returns the type transport3.
     */
    public function getTypeTransport3() {
        return $this->typeTransport3;
    }

    /**
     * Set the type transport3.
     *
     * @param string $typeTransport3 The type transport3.
     */
    public function setTypeTransport3($typeTransport3) {
        $this->typeTransport3 = $typeTransport3;
        return $this;
    }
}
