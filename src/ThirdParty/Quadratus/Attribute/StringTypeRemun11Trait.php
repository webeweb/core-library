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
 * Type remun11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemun11Trait {

    /**
     * Type remun11.
     *
     * @var string
     */
    private $typeRemun11;

    /**
     * Get the type remun11.
     *
     * @return string Returns the type remun11.
     */
    public function getTypeRemun11() {
        return $this->typeRemun11;
    }

    /**
     * Set the type remun11.
     *
     * @param string $typeRemun11 The type remun11.
     */
    public function setTypeRemun11($typeRemun11) {
        $this->typeRemun11 = $typeRemun11;
        return $this;
    }
}
