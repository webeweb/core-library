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
 * Lib affectation frn2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn2Trait {

    /**
     * Lib affectation frn2.
     *
     * @var string
     */
    private $libAffectationFrn2;

    /**
     * Get the lib affectation frn2.
     *
     * @return string Returns the lib affectation frn2.
     */
    public function getLibAffectationFrn2() {
        return $this->libAffectationFrn2;
    }

    /**
     * Set the lib affectation frn2.
     *
     * @param string $libAffectationFrn2 The lib affectation frn2.
     */
    public function setLibAffectationFrn2($libAffectationFrn2) {
        $this->libAffectationFrn2 = $libAffectationFrn2;
        return $this;
    }
}
