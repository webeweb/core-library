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
 * Lib affectation3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectation3Trait {

    /**
     * Lib affectation3.
     *
     * @var string
     */
    private $libAffectation3;

    /**
     * Get the lib affectation3.
     *
     * @return string Returns the lib affectation3.
     */
    public function getLibAffectation3() {
        return $this->libAffectation3;
    }

    /**
     * Set the lib affectation3.
     *
     * @param string $libAffectation3 The lib affectation3.
     */
    public function setLibAffectation3($libAffectation3) {
        $this->libAffectation3 = $libAffectation3;
        return $this;
    }
}
