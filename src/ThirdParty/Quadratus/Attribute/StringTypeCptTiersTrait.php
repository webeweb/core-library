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
 * Type cpt tiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCptTiersTrait {

    /**
     * Type cpt tiers.
     *
     * @var string
     */
    private $typeCptTiers;

    /**
     * Get the type cpt tiers.
     *
     * @return string Returns the type cpt tiers.
     */
    public function getTypeCptTiers() {
        return $this->typeCptTiers;
    }

    /**
     * Set the type cpt tiers.
     *
     * @param string $typeCptTiers The type cpt tiers.
     */
    public function setTypeCptTiers($typeCptTiers) {
        $this->typeCptTiers = $typeCptTiers;
        return $this;
    }
}
