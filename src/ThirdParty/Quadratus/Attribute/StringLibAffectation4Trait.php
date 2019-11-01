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
 * Lib affectation4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectation4Trait {

    /**
     * Lib affectation4.
     *
     * @var string
     */
    private $libAffectation4;

    /**
     * Get the lib affectation4.
     *
     * @return string Returns the lib affectation4.
     */
    public function getLibAffectation4() {
        return $this->libAffectation4;
    }

    /**
     * Set the lib affectation4.
     *
     * @param string $libAffectation4 The lib affectation4.
     */
    public function setLibAffectation4($libAffectation4) {
        $this->libAffectation4 = $libAffectation4;
        return $this;
    }
}
