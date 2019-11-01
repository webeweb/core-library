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
 * Module agr actif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolModuleAgrActifTrait {

    /**
     * Module agr actif.
     *
     * @var bool
     */
    private $moduleAgrActif;

    /**
     * Get the module agr actif.
     *
     * @return bool Returns the module agr actif.
     */
    public function getModuleAgrActif() {
        return $this->moduleAgrActif;
    }

    /**
     * Set the module agr actif.
     *
     * @param bool $moduleAgrActif The module agr actif.
     */
    public function setModuleAgrActif($moduleAgrActif) {
        $this->moduleAgrActif = $moduleAgrActif;
        return $this;
    }
}
