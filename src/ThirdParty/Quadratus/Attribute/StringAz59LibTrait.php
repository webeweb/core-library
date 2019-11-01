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
 * Az59 lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAz59LibTrait {

    /**
     * Az59 lib.
     *
     * @var string
     */
    private $az59Lib;

    /**
     * Get the az59 lib.
     *
     * @return string Returns the az59 lib.
     */
    public function getAz59Lib() {
        return $this->az59Lib;
    }

    /**
     * Set the az59 lib.
     *
     * @param string $az59Lib The az59 lib.
     */
    public function setAz59Lib($az59Lib) {
        $this->az59Lib = $az59Lib;
        return $this;
    }
}
