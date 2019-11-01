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
 * Az38 lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAz38LibTrait {

    /**
     * Az38 lib.
     *
     * @var string
     */
    private $az38Lib;

    /**
     * Get the az38 lib.
     *
     * @return string Returns the az38 lib.
     */
    public function getAz38Lib() {
        return $this->az38Lib;
    }

    /**
     * Set the az38 lib.
     *
     * @param string $az38Lib The az38 lib.
     */
    public function setAz38Lib($az38Lib) {
        $this->az38Lib = $az38Lib;
        return $this;
    }
}
