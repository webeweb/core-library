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
 * Type base caisse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBaseCaisse1Trait {

    /**
     * Type base caisse1.
     *
     * @var string
     */
    private $typeBaseCaisse1;

    /**
     * Get the type base caisse1.
     *
     * @return string Returns the type base caisse1.
     */
    public function getTypeBaseCaisse1() {
        return $this->typeBaseCaisse1;
    }

    /**
     * Set the type base caisse1.
     *
     * @param string $typeBaseCaisse1 The type base caisse1.
     */
    public function setTypeBaseCaisse1($typeBaseCaisse1) {
        $this->typeBaseCaisse1 = $typeBaseCaisse1;
        return $this;
    }
}
