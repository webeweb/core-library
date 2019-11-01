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
 * Lib variable1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibVariable1Trait {

    /**
     * Lib variable1.
     *
     * @var string
     */
    private $libVariable1;

    /**
     * Get the lib variable1.
     *
     * @return string Returns the lib variable1.
     */
    public function getLibVariable1() {
        return $this->libVariable1;
    }

    /**
     * Set the lib variable1.
     *
     * @param string $libVariable1 The lib variable1.
     */
    public function setLibVariable1($libVariable1) {
        $this->libVariable1 = $libVariable1;
        return $this;
    }
}
