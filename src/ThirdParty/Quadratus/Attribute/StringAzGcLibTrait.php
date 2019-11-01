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
 * Az gc lib trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAzGcLibTrait {

    /**
     * Az gc lib.
     *
     * @var string
     */
    private $azGcLib;

    /**
     * Get the az gc lib.
     *
     * @return string Returns the az gc lib.
     */
    public function getAzGcLib() {
        return $this->azGcLib;
    }

    /**
     * Set the az gc lib.
     *
     * @param string $azGcLib The az gc lib.
     */
    public function setAzGcLib($azGcLib) {
        $this->azGcLib = $azGcLib;
        return $this;
    }
}
