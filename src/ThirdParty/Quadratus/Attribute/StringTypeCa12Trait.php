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
 * Type ca12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCa12Trait {

    /**
     * Type ca12.
     *
     * @var string
     */
    private $typeCa12;

    /**
     * Get the type ca12.
     *
     * @return string Returns the type ca12.
     */
    public function getTypeCa12() {
        return $this->typeCa12;
    }

    /**
     * Set the type ca12.
     *
     * @param string $typeCa12 The type ca12.
     */
    public function setTypeCa12($typeCa12) {
        $this->typeCa12 = $typeCa12;
        return $this;
    }
}
