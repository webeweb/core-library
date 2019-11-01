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
 * Nb ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHtTrait {

    /**
     * Nb ht.
     *
     * @var float
     */
    private $nbHt;

    /**
     * Get the nb ht.
     *
     * @return float Returns the nb ht.
     */
    public function getNbHt() {
        return $this->nbHt;
    }

    /**
     * Set the nb ht.
     *
     * @param float $nbHt The nb ht.
     */
    public function setNbHt($nbHt) {
        $this->nbHt = $nbHt;
        return $this;
    }
}
