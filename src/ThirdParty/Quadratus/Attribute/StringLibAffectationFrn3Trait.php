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
 * Lib affectation frn3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn3Trait {

    /**
     * Lib affectation frn3.
     *
     * @var string
     */
    private $libAffectationFrn3;

    /**
     * Get the lib affectation frn3.
     *
     * @return string Returns the lib affectation frn3.
     */
    public function getLibAffectationFrn3() {
        return $this->libAffectationFrn3;
    }

    /**
     * Set the lib affectation frn3.
     *
     * @param string $libAffectationFrn3 The lib affectation frn3.
     */
    public function setLibAffectationFrn3($libAffectationFrn3) {
        $this->libAffectationFrn3 = $libAffectationFrn3;
        return $this;
    }
}
