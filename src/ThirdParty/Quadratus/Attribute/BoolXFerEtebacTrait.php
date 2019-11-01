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
 * X fer etebac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerEtebacTrait {

    /**
     * X fer etebac.
     *
     * @var bool
     */
    private $xFerEtebac;

    /**
     * Get the x fer etebac.
     *
     * @return bool Returns the x fer etebac.
     */
    public function getXFerEtebac() {
        return $this->xFerEtebac;
    }

    /**
     * Set the x fer etebac.
     *
     * @param bool $xFerEtebac The x fer etebac.
     */
    public function setXFerEtebac($xFerEtebac) {
        $this->xFerEtebac = $xFerEtebac;
        return $this;
    }
}
