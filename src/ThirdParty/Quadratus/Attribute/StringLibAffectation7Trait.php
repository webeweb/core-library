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
 * Lib affectation7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibAffectation7Trait {

    /**
     * Lib affectation7.
     *
     * @var string
     */
    private $libAffectation7;

    /**
     * Get the lib affectation7.
     *
     * @return string Returns the lib affectation7.
     */
    public function getLibAffectation7() {
        return $this->libAffectation7;
    }

    /**
     * Set the lib affectation7.
     *
     * @param string $libAffectation7 The lib affectation7.
     */
    public function setLibAffectation7($libAffectation7) {
        $this->libAffectation7 = $libAffectation7;
        return $this;
    }
}
