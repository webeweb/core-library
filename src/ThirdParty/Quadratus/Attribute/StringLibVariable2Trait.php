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
 * Lib variable2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibVariable2Trait {

    /**
     * Lib variable2.
     *
     * @var string
     */
    private $libVariable2;

    /**
     * Get the lib variable2.
     *
     * @return string Returns the lib variable2.
     */
    public function getLibVariable2() {
        return $this->libVariable2;
    }

    /**
     * Set the lib variable2.
     *
     * @param string $libVariable2 The lib variable2.
     */
    public function setLibVariable2($libVariable2) {
        $this->libVariable2 = $libVariable2;
        return $this;
    }
}
