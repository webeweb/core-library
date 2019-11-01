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
 * Lib variable3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibVariable3Trait {

    /**
     * Lib variable3.
     *
     * @var string
     */
    private $libVariable3;

    /**
     * Get the lib variable3.
     *
     * @return string Returns the lib variable3.
     */
    public function getLibVariable3() {
        return $this->libVariable3;
    }

    /**
     * Set the lib variable3.
     *
     * @param string $libVariable3 The lib variable3.
     */
    public function setLibVariable3($libVariable3) {
        $this->libVariable3 = $libVariable3;
        return $this;
    }
}
