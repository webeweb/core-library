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
 * Type autre remun32 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAutreRemun32Trait {

    /**
     * Type autre remun32.
     *
     * @var string
     */
    private $typeAutreRemun32;

    /**
     * Get the type autre remun32.
     *
     * @return string Returns the type autre remun32.
     */
    public function getTypeAutreRemun32() {
        return $this->typeAutreRemun32;
    }

    /**
     * Set the type autre remun32.
     *
     * @param string $typeAutreRemun32 The type autre remun32.
     */
    public function setTypeAutreRemun32($typeAutreRemun32) {
        $this->typeAutreRemun32 = $typeAutreRemun32;
        return $this;
    }
}
