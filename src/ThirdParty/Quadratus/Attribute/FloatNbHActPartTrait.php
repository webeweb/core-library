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
 * Nb h act part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHActPartTrait {

    /**
     * Nb h act part.
     *
     * @var float
     */
    private $nbHActPart;

    /**
     * Get the nb h act part.
     *
     * @return float Returns the nb h act part.
     */
    public function getNbHActPart() {
        return $this->nbHActPart;
    }

    /**
     * Set the nb h act part.
     *
     * @param float $nbHActPart The nb h act part.
     */
    public function setNbHActPart($nbHActPart) {
        $this->nbHActPart = $nbHActPart;
        return $this;
    }
}
