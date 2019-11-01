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
 * Petit decalage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPetitDecalageTrait {

    /**
     * Petit decalage.
     *
     * @var bool
     */
    private $petitDecalage;

    /**
     * Get the petit decalage.
     *
     * @return bool Returns the petit decalage.
     */
    public function getPetitDecalage() {
        return $this->petitDecalage;
    }

    /**
     * Set the petit decalage.
     *
     * @param bool $petitDecalage The petit decalage.
     */
    public function setPetitDecalage($petitDecalage) {
        $this->petitDecalage = $petitDecalage;
        return $this;
    }
}
