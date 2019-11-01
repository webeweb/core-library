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
 * Az ez lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEzLibTrait {

    /**
     * Az ez lib.
     *
     * @var string
     */
    private $azEzLib;

    /**
     * Get the az ez lib.
     *
     * @return string Returns the az ez lib.
     */
    public function getAzEzLib() {
        return $this->azEzLib;
    }

    /**
     * Set the az ez lib.
     *
     * @param string $azEzLib The az ez lib.
     */
    public function setAzEzLib($azEzLib) {
        $this->azEzLib = $azEzLib;
        return $this;
    }
}
