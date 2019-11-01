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
 * Lib affectation frn7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectationFrn7Trait {

    /**
     * Lib affectation frn7.
     *
     * @var string
     */
    private $libAffectationFrn7;

    /**
     * Get the lib affectation frn7.
     *
     * @return string Returns the lib affectation frn7.
     */
    public function getLibAffectationFrn7() {
        return $this->libAffectationFrn7;
    }

    /**
     * Set the lib affectation frn7.
     *
     * @param string $libAffectationFrn7 The lib affectation frn7.
     */
    public function setLibAffectationFrn7($libAffectationFrn7) {
        $this->libAffectationFrn7 = $libAffectationFrn7;
        return $this;
    }
}
