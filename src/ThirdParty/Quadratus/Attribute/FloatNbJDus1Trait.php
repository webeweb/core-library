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
 * Nb j dus1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJDus1Trait {

    /**
     * Nb j dus1.
     *
     * @var float
     */
    private $nbJDus1;

    /**
     * Get the nb j dus1.
     *
     * @return float Returns the nb j dus1.
     */
    public function getNbJDus1() {
        return $this->nbJDus1;
    }

    /**
     * Set the nb j dus1.
     *
     * @param float $nbJDus1 The nb j dus1.
     */
    public function setNbJDus1($nbJDus1) {
        $this->nbJDus1 = $nbJDus1;
        return $this;
    }
}
