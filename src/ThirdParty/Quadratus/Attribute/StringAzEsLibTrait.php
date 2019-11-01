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
 * Az es lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEsLibTrait {

    /**
     * Az es lib.
     *
     * @var string
     */
    private $azEsLib;

    /**
     * Get the az es lib.
     *
     * @return string Returns the az es lib.
     */
    public function getAzEsLib() {
        return $this->azEsLib;
    }

    /**
     * Set the az es lib.
     *
     * @param string $azEsLib The az es lib.
     */
    public function setAzEsLib($azEsLib) {
        $this->azEsLib = $azEsLib;
        return $this;
    }
}
