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
 * Az50 lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAz50LibTrait {

    /**
     * Az50 lib.
     *
     * @var string
     */
    private $az50Lib;

    /**
     * Get the az50 lib.
     *
     * @return string Returns the az50 lib.
     */
    public function getAz50Lib() {
        return $this->az50Lib;
    }

    /**
     * Set the az50 lib.
     *
     * @param string $az50Lib The az50 lib.
     */
    public function setAz50Lib($az50Lib) {
        $this->az50Lib = $az50Lib;
        return $this;
    }
}
