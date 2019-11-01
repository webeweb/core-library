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
 * Lib affectation frn6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn6Trait {

    /**
     * Lib affectation frn6.
     *
     * @var string
     */
    private $libAffectationFrn6;

    /**
     * Get the lib affectation frn6.
     *
     * @return string Returns the lib affectation frn6.
     */
    public function getLibAffectationFrn6() {
        return $this->libAffectationFrn6;
    }

    /**
     * Set the lib affectation frn6.
     *
     * @param string $libAffectationFrn6 The lib affectation frn6.
     */
    public function setLibAffectationFrn6($libAffectationFrn6) {
        $this->libAffectationFrn6 = $libAffectationFrn6;
        return $this;
    }
}
