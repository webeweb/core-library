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
 * Lib affectation frn5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn5Trait {

    /**
     * Lib affectation frn5.
     *
     * @var string
     */
    private $libAffectationFrn5;

    /**
     * Get the lib affectation frn5.
     *
     * @return string Returns the lib affectation frn5.
     */
    public function getLibAffectationFrn5() {
        return $this->libAffectationFrn5;
    }

    /**
     * Set the lib affectation frn5.
     *
     * @param string $libAffectationFrn5 The lib affectation frn5.
     */
    public function setLibAffectationFrn5($libAffectationFrn5) {
        $this->libAffectationFrn5 = $libAffectationFrn5;
        return $this;
    }
}
