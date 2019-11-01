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
 * Type transfert immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransfertImmoTrait {

    /**
     * Type transfert immo.
     *
     * @var string
     */
    private $typeTransfertImmo;

    /**
     * Get the type transfert immo.
     *
     * @return string Returns the type transfert immo.
     */
    public function getTypeTransfertImmo() {
        return $this->typeTransfertImmo;
    }

    /**
     * Set the type transfert immo.
     *
     * @param string $typeTransfertImmo The type transfert immo.
     */
    public function setTypeTransfertImmo($typeTransfertImmo) {
        $this->typeTransfertImmo = $typeTransfertImmo;
        return $this;
    }
}
