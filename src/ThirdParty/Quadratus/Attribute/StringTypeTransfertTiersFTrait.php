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
 * Type transfert tiers f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransfertTiersFTrait {

    /**
     * Type transfert tiers f.
     *
     * @var string
     */
    private $typeTransfertTiersF;

    /**
     * Get the type transfert tiers f.
     *
     * @return string Returns the type transfert tiers f.
     */
    public function getTypeTransfertTiersF() {
        return $this->typeTransfertTiersF;
    }

    /**
     * Set the type transfert tiers f.
     *
     * @param string $typeTransfertTiersF The type transfert tiers f.
     */
    public function setTypeTransfertTiersF($typeTransfertTiersF) {
        $this->typeTransfertTiersF = $typeTransfertTiersF;
        return $this;
    }
}
