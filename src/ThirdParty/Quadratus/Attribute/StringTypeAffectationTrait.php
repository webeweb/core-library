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
 * Type affectation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAffectationTrait {

    /**
     * Type affectation.
     *
     * @var string
     */
    private $typeAffectation;

    /**
     * Get the type affectation.
     *
     * @return string Returns the type affectation.
     */
    public function getTypeAffectation() {
        return $this->typeAffectation;
    }

    /**
     * Set the type affectation.
     *
     * @param string $typeAffectation The type affectation.
     */
    public function setTypeAffectation($typeAffectation) {
        $this->typeAffectation = $typeAffectation;
        return $this;
    }
}
