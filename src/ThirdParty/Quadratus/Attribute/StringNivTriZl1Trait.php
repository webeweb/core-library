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
 * Niv tri zl1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriZl1Trait {

    /**
     * Niv tri zl1.
     *
     * @var string
     */
    private $nivTriZl1;

    /**
     * Get the niv tri zl1.
     *
     * @return string Returns the niv tri zl1.
     */
    public function getNivTriZl1() {
        return $this->nivTriZl1;
    }

    /**
     * Set the niv tri zl1.
     *
     * @param string $nivTriZl1 The niv tri zl1.
     */
    public function setNivTriZl1($nivTriZl1) {
        $this->nivTriZl1 = $nivTriZl1;
        return $this;
    }
}
