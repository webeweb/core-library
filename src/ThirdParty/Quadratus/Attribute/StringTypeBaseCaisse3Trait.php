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
 * Type base caisse3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBaseCaisse3Trait {

    /**
     * Type base caisse3.
     *
     * @var string
     */
    private $typeBaseCaisse3;

    /**
     * Get the type base caisse3.
     *
     * @return string Returns the type base caisse3.
     */
    public function getTypeBaseCaisse3() {
        return $this->typeBaseCaisse3;
    }

    /**
     * Set the type base caisse3.
     *
     * @param string $typeBaseCaisse3 The type base caisse3.
     */
    public function setTypeBaseCaisse3($typeBaseCaisse3) {
        $this->typeBaseCaisse3 = $typeBaseCaisse3;
        return $this;
    }
}
