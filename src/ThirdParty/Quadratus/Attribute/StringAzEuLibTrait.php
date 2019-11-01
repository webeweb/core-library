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
 * Az eu lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEuLibTrait {

    /**
     * Az eu lib.
     *
     * @var string
     */
    private $azEuLib;

    /**
     * Get the az eu lib.
     *
     * @return string Returns the az eu lib.
     */
    public function getAzEuLib() {
        return $this->azEuLib;
    }

    /**
     * Set the az eu lib.
     *
     * @param string $azEuLib The az eu lib.
     */
    public function setAzEuLib($azEuLib) {
        $this->azEuLib = $azEuLib;
        return $this;
    }
}
