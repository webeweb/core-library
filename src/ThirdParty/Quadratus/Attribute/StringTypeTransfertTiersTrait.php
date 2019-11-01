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
 * Type transfert tiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTransfertTiersTrait {

    /**
     * Type transfert tiers.
     *
     * @var string
     */
    private $typeTransfertTiers;

    /**
     * Get the type transfert tiers.
     *
     * @return string Returns the type transfert tiers.
     */
    public function getTypeTransfertTiers() {
        return $this->typeTransfertTiers;
    }

    /**
     * Set the type transfert tiers.
     *
     * @param string $typeTransfertTiers The type transfert tiers.
     */
    public function setTypeTransfertTiers($typeTransfertTiers) {
        $this->typeTransfertTiers = $typeTransfertTiers;
        return $this;
    }
}
