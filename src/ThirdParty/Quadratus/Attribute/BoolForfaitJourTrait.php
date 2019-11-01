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
 * Forfait jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolForfaitJourTrait {

    /**
     * Forfait jour.
     *
     * @var bool
     */
    private $forfaitJour;

    /**
     * Get the forfait jour.
     *
     * @return bool Returns the forfait jour.
     */
    public function getForfaitJour() {
        return $this->forfaitJour;
    }

    /**
     * Set the forfait jour.
     *
     * @param bool $forfaitJour The forfait jour.
     */
    public function setForfaitJour($forfaitJour) {
        $this->forfaitJour = $forfaitJour;
        return $this;
    }
}
