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
 * Mois ouverture auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMoisOuvertureAutoTrait {

    /**
     * Mois ouverture auto.
     *
     * @var int
     */
    private $moisOuvertureAuto;

    /**
     * Get the mois ouverture auto.
     *
     * @return int Returns the mois ouverture auto.
     */
    public function getMoisOuvertureAuto() {
        return $this->moisOuvertureAuto;
    }

    /**
     * Set the mois ouverture auto.
     *
     * @param int $moisOuvertureAuto The mois ouverture auto.
     */
    public function setMoisOuvertureAuto($moisOuvertureAuto) {
        $this->moisOuvertureAuto = $moisOuvertureAuto;
        return $this;
    }
}
