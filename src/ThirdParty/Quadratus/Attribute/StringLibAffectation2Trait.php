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
 * Lib affectation2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectation2Trait {

    /**
     * Lib affectation2.
     *
     * @var string
     */
    private $libAffectation2;

    /**
     * Get the lib affectation2.
     *
     * @return string Returns the lib affectation2.
     */
    public function getLibAffectation2() {
        return $this->libAffectation2;
    }

    /**
     * Set the lib affectation2.
     *
     * @param string $libAffectation2 The lib affectation2.
     */
    public function setLibAffectation2($libAffectation2) {
        $this->libAffectation2 = $libAffectation2;
        return $this;
    }
}
