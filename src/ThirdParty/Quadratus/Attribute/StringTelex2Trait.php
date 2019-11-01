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
 * Telex2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelex2Trait {

    /**
     * Telex2.
     *
     * @var string
     */
    private $telex2;

    /**
     * Get the telex2.
     *
     * @return string Returns the telex2.
     */
    public function getTelex2() {
        return $this->telex2;
    }

    /**
     * Set the telex2.
     *
     * @param string $telex2 The telex2.
     */
    public function setTelex2($telex2) {
        $this->telex2 = $telex2;
        return $this;
    }
}
