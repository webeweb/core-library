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
 * Nb h base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHBaseTrait {

    /**
     * Nb h base.
     *
     * @var float
     */
    private $nbHBase;

    /**
     * Get the nb h base.
     *
     * @return float Returns the nb h base.
     */
    public function getNbHBase() {
        return $this->nbHBase;
    }

    /**
     * Set the nb h base.
     *
     * @param float $nbHBase The nb h base.
     */
    public function setNbHBase($nbHBase) {
        $this->nbHBase = $nbHBase;
        return $this;
    }
}
