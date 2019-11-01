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
 * Type transport5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransport5Trait {

    /**
     * Type transport5.
     *
     * @var string
     */
    private $typeTransport5;

    /**
     * Get the type transport5.
     *
     * @return string Returns the type transport5.
     */
    public function getTypeTransport5() {
        return $this->typeTransport5;
    }

    /**
     * Set the type transport5.
     *
     * @param string $typeTransport5 The type transport5.
     */
    public function setTypeTransport5($typeTransport5) {
        $this->typeTransport5 = $typeTransport5;
        return $this;
    }
}
