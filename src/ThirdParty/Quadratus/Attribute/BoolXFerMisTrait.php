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
 * X fer mis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMisTrait {

    /**
     * X fer mis.
     *
     * @var bool
     */
    private $xFerMis;

    /**
     * Get the x fer mis.
     *
     * @return bool Returns the x fer mis.
     */
    public function getXFerMis() {
        return $this->xFerMis;
    }

    /**
     * Set the x fer mis.
     *
     * @param bool $xFerMis The x fer mis.
     */
    public function setXFerMis($xFerMis) {
        $this->xFerMis = $xFerMis;
        return $this;
    }
}
