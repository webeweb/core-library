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
 * Maj pamp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajPampTrait {

    /**
     * Maj pamp.
     *
     * @var bool
     */
    private $majPamp;

    /**
     * Get the maj pamp.
     *
     * @return bool Returns the maj pamp.
     */
    public function getMajPamp() {
        return $this->majPamp;
    }

    /**
     * Set the maj pamp.
     *
     * @param bool $majPamp The maj pamp.
     */
    public function setMajPamp($majPamp) {
        $this->majPamp = $majPamp;
        return $this;
    }
}
