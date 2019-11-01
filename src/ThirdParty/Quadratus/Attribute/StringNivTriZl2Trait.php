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
 * Niv tri zl2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriZl2Trait {

    /**
     * Niv tri zl2.
     *
     * @var string
     */
    private $nivTriZl2;

    /**
     * Get the niv tri zl2.
     *
     * @return string Returns the niv tri zl2.
     */
    public function getNivTriZl2() {
        return $this->nivTriZl2;
    }

    /**
     * Set the niv tri zl2.
     *
     * @param string $nivTriZl2 The niv tri zl2.
     */
    public function setNivTriZl2($nivTriZl2) {
        $this->nivTriZl2 = $nivTriZl2;
        return $this;
    }
}
