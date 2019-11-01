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
 * X fer cr ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCrDucsTrait {

    /**
     * X fer cr ducs.
     *
     * @var bool
     */
    private $xFerCrDucs;

    /**
     * Get the x fer cr ducs.
     *
     * @return bool Returns the x fer cr ducs.
     */
    public function getXFerCrDucs() {
        return $this->xFerCrDucs;
    }

    /**
     * Set the x fer cr ducs.
     *
     * @param bool $xFerCrDucs The x fer cr ducs.
     */
    public function setXFerCrDucs($xFerCrDucs) {
        $this->xFerCrDucs = $xFerCrDucs;
        return $this;
    }
}
