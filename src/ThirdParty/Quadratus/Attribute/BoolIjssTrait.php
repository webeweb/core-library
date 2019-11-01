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
 * Ijss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIjssTrait {

    /**
     * Ijss.
     *
     * @var bool
     */
    private $ijss;

    /**
     * Get the ijss.
     *
     * @return bool Returns the ijss.
     */
    public function getIjss() {
        return $this->ijss;
    }

    /**
     * Set the ijss.
     *
     * @param bool $ijss The ijss.
     */
    public function setIjss($ijss) {
        $this->ijss = $ijss;
        return $this;
    }
}
