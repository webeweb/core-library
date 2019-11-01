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
 * Nb j pris1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJPris1Trait {

    /**
     * Nb j pris1.
     *
     * @var float
     */
    private $nbJPris1;

    /**
     * Get the nb j pris1.
     *
     * @return float Returns the nb j pris1.
     */
    public function getNbJPris1() {
        return $this->nbJPris1;
    }

    /**
     * Set the nb j pris1.
     *
     * @param float $nbJPris1 The nb j pris1.
     */
    public function setNbJPris1($nbJPris1) {
        $this->nbJPris1 = $nbJPris1;
        return $this;
    }
}
