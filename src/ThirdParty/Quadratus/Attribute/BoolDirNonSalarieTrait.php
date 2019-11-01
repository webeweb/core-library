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
 * Dir non salarie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDirNonSalarieTrait {

    /**
     * Dir non salarie.
     *
     * @var bool
     */
    private $dirNonSalarie;

    /**
     * Get the dir non salarie.
     *
     * @return bool Returns the dir non salarie.
     */
    public function getDirNonSalarie() {
        return $this->dirNonSalarie;
    }

    /**
     * Set the dir non salarie.
     *
     * @param bool $dirNonSalarie The dir non salarie.
     */
    public function setDirNonSalarie($dirNonSalarie) {
        $this->dirNonSalarie = $dirNonSalarie;
        return $this;
    }
}
