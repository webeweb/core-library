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
 * Lib affectation frn4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn4Trait {

    /**
     * Lib affectation frn4.
     *
     * @var string
     */
    private $libAffectationFrn4;

    /**
     * Get the lib affectation frn4.
     *
     * @return string Returns the lib affectation frn4.
     */
    public function getLibAffectationFrn4() {
        return $this->libAffectationFrn4;
    }

    /**
     * Set the lib affectation frn4.
     *
     * @param string $libAffectationFrn4 The lib affectation frn4.
     */
    public function setLibAffectationFrn4($libAffectationFrn4) {
        $this->libAffectationFrn4 = $libAffectationFrn4;
        return $this;
    }
}
