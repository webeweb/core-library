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
 * Lib affectation5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectation5Trait {

    /**
     * Lib affectation5.
     *
     * @var string
     */
    private $libAffectation5;

    /**
     * Get the lib affectation5.
     *
     * @return string Returns the lib affectation5.
     */
    public function getLibAffectation5() {
        return $this->libAffectation5;
    }

    /**
     * Set the lib affectation5.
     *
     * @param string $libAffectation5 The lib affectation5.
     */
    public function setLibAffectation5($libAffectation5) {
        $this->libAffectation5 = $libAffectation5;
        return $this;
    }
}
