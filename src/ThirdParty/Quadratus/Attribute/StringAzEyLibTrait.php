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
 * Az ey lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzEyLibTrait {

    /**
     * Az ey lib.
     *
     * @var string
     */
    private $azEyLib;

    /**
     * Get the az ey lib.
     *
     * @return string Returns the az ey lib.
     */
    public function getAzEyLib() {
        return $this->azEyLib;
    }

    /**
     * Set the az ey lib.
     *
     * @param string $azEyLib The az ey lib.
     */
    public function setAzEyLib($azEyLib) {
        $this->azEyLib = $azEyLib;
        return $this;
    }
}
