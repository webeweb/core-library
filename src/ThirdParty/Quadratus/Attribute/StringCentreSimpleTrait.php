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
 * Centre simple trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCentreSimpleTrait {

    /**
     * Centre simple.
     *
     * @var string
     */
    private $centreSimple;

    /**
     * Get the centre simple.
     *
     * @return string Returns the centre simple.
     */
    public function getCentreSimple() {
        return $this->centreSimple;
    }

    /**
     * Set the centre simple.
     *
     * @param string $centreSimple The centre simple.
     */
    public function setCentreSimple($centreSimple) {
        $this->centreSimple = $centreSimple;
        return $this;
    }
}
