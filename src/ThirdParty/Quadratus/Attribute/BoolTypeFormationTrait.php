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
 * Type formation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeFormationTrait {

    /**
     * Type formation.
     *
     * @var bool
     */
    private $typeFormation;

    /**
     * Get the type formation.
     *
     * @return bool Returns the type formation.
     */
    public function getTypeFormation() {
        return $this->typeFormation;
    }

    /**
     * Set the type formation.
     *
     * @param bool $typeFormation The type formation.
     */
    public function setTypeFormation($typeFormation) {
        $this->typeFormation = $typeFormation;
        return $this;
    }
}
