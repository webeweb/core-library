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
 * Mois cloture dif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisClotureDifTrait {

    /**
     * Mois cloture dif.
     *
     * @var string
     */
    private $moisClotureDif;

    /**
     * Get the mois cloture dif.
     *
     * @return string Returns the mois cloture dif.
     */
    public function getMoisClotureDif() {
        return $this->moisClotureDif;
    }

    /**
     * Set the mois cloture dif.
     *
     * @param string $moisClotureDif The mois cloture dif.
     */
    public function setMoisClotureDif($moisClotureDif) {
        $this->moisClotureDif = $moisClotureDif;
        return $this;
    }
}
