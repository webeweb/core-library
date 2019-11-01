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
 * Type base caisse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBaseCaisse2Trait {

    /**
     * Type base caisse2.
     *
     * @var string
     */
    private $typeBaseCaisse2;

    /**
     * Get the type base caisse2.
     *
     * @return string Returns the type base caisse2.
     */
    public function getTypeBaseCaisse2() {
        return $this->typeBaseCaisse2;
    }

    /**
     * Set the type base caisse2.
     *
     * @param string $typeBaseCaisse2 The type base caisse2.
     */
    public function setTypeBaseCaisse2($typeBaseCaisse2) {
        $this->typeBaseCaisse2 = $typeBaseCaisse2;
        return $this;
    }
}
