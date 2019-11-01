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
 * Niv tri zl3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriZl3Trait {

    /**
     * Niv tri zl3.
     *
     * @var string
     */
    private $nivTriZl3;

    /**
     * Get the niv tri zl3.
     *
     * @return string Returns the niv tri zl3.
     */
    public function getNivTriZl3() {
        return $this->nivTriZl3;
    }

    /**
     * Set the niv tri zl3.
     *
     * @param string $nivTriZl3 The niv tri zl3.
     */
    public function setNivTriZl3($nivTriZl3) {
        $this->nivTriZl3 = $nivTriZl3;
        return $this;
    }
}
