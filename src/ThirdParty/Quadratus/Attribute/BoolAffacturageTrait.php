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
 * Affacturage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAffacturageTrait {

    /**
     * Affacturage.
     *
     * @var bool
     */
    private $affacturage;

    /**
     * Get the affacturage.
     *
     * @return bool Returns the affacturage.
     */
    public function getAffacturage() {
        return $this->affacturage;
    }

    /**
     * Set the affacturage.
     *
     * @param bool $affacturage The affacturage.
     */
    public function setAffacturage($affacturage) {
        $this->affacturage = $affacturage;
        return $this;
    }
}
