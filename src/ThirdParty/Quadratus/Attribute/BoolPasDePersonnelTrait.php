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
 * Pas de personnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasDePersonnelTrait {

    /**
     * Pas de personnel.
     *
     * @var bool
     */
    private $pasDePersonnel;

    /**
     * Get the pas de personnel.
     *
     * @return bool Returns the pas de personnel.
     */
    public function getPasDePersonnel() {
        return $this->pasDePersonnel;
    }

    /**
     * Set the pas de personnel.
     *
     * @param bool $pasDePersonnel The pas de personnel.
     */
    public function setPasDePersonnel($pasDePersonnel) {
        $this->pasDePersonnel = $pasDePersonnel;
        return $this;
    }
}
