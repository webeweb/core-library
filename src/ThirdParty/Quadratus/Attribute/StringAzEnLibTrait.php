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
 * Az en lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEnLibTrait {

    /**
     * Az en lib.
     *
     * @var string
     */
    private $azEnLib;

    /**
     * Get the az en lib.
     *
     * @return string Returns the az en lib.
     */
    public function getAzEnLib() {
        return $this->azEnLib;
    }

    /**
     * Set the az en lib.
     *
     * @param string $azEnLib The az en lib.
     */
    public function setAzEnLib($azEnLib) {
        $this->azEnLib = $azEnLib;
        return $this;
    }
}
