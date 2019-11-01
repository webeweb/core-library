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
 * X fer impots directs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerImpotsDirectsTrait {

    /**
     * X fer impots directs.
     *
     * @var bool
     */
    private $xFerImpotsDirects;

    /**
     * Get the x fer impots directs.
     *
     * @return bool Returns the x fer impots directs.
     */
    public function getXFerImpotsDirects() {
        return $this->xFerImpotsDirects;
    }

    /**
     * Set the x fer impots directs.
     *
     * @param bool $xFerImpotsDirects The x fer impots directs.
     */
    public function setXFerImpotsDirects($xFerImpotsDirects) {
        $this->xFerImpotsDirects = $xFerImpotsDirects;
        return $this;
    }
}
