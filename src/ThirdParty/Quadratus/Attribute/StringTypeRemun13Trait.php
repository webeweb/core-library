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
 * Type remun13 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun13Trait {

    /**
     * Type remun13.
     *
     * @var string
     */
    private $typeRemun13;

    /**
     * Get the type remun13.
     *
     * @return string Returns the type remun13.
     */
    public function getTypeRemun13() {
        return $this->typeRemun13;
    }

    /**
     * Set the type remun13.
     *
     * @param string $typeRemun13 The type remun13.
     */
    public function setTypeRemun13($typeRemun13) {
        $this->typeRemun13 = $typeRemun13;
        return $this;
    }
}
