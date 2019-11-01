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
 * Az ex lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzExLibTrait {

    /**
     * Az ex lib.
     *
     * @var string
     */
    private $azExLib;

    /**
     * Get the az ex lib.
     *
     * @return string Returns the az ex lib.
     */
    public function getAzExLib() {
        return $this->azExLib;
    }

    /**
     * Set the az ex lib.
     *
     * @param string $azExLib The az ex lib.
     */
    public function setAzExLib($azExLib) {
        $this->azExLib = $azExLib;
        return $this;
    }
}
