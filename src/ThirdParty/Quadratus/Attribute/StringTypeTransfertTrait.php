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
 * Type transfert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransfertTrait {

    /**
     * Type transfert.
     *
     * @var string
     */
    private $typeTransfert;

    /**
     * Get the type transfert.
     *
     * @return string Returns the type transfert.
     */
    public function getTypeTransfert() {
        return $this->typeTransfert;
    }

    /**
     * Set the type transfert.
     *
     * @param string $typeTransfert The type transfert.
     */
    public function setTypeTransfert($typeTransfert) {
        $this->typeTransfert = $typeTransfert;
        return $this;
    }
}
