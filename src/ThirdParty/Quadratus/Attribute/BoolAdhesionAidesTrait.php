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
 * Adhesion aides trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdhesionAidesTrait {

    /**
     * Adhesion aides.
     *
     * @var bool
     */
    private $adhesionAides;

    /**
     * Get the adhesion aides.
     *
     * @return bool Returns the adhesion aides.
     */
    public function getAdhesionAides() {
        return $this->adhesionAides;
    }

    /**
     * Set the adhesion aides.
     *
     * @param bool $adhesionAides The adhesion aides.
     */
    public function setAdhesionAides($adhesionAides) {
        $this->adhesionAides = $adhesionAides;
        return $this;
    }
}
