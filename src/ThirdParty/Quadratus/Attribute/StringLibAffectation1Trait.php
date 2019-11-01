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
 * Lib affectation1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectation1Trait {

    /**
     * Lib affectation1.
     *
     * @var string
     */
    private $libAffectation1;

    /**
     * Get the lib affectation1.
     *
     * @return string Returns the lib affectation1.
     */
    public function getLibAffectation1() {
        return $this->libAffectation1;
    }

    /**
     * Set the lib affectation1.
     *
     * @param string $libAffectation1 The lib affectation1.
     */
    public function setLibAffectation1($libAffectation1) {
        $this->libAffectation1 = $libAffectation1;
        return $this;
    }
}
