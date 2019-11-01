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
 * Lib affectation frn1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn1Trait {

    /**
     * Lib affectation frn1.
     *
     * @var string
     */
    private $libAffectationFrn1;

    /**
     * Get the lib affectation frn1.
     *
     * @return string Returns the lib affectation frn1.
     */
    public function getLibAffectationFrn1() {
        return $this->libAffectationFrn1;
    }

    /**
     * Set the lib affectation frn1.
     *
     * @param string $libAffectationFrn1 The lib affectation frn1.
     */
    public function setLibAffectationFrn1($libAffectationFrn1) {
        $this->libAffectationFrn1 = $libAffectationFrn1;
        return $this;
    }
}
