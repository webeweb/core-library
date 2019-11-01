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
 * X fer pre fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerPreFactTrait {

    /**
     * X fer pre fact.
     *
     * @var bool
     */
    private $xFerPreFact;

    /**
     * Get the x fer pre fact.
     *
     * @return bool Returns the x fer pre fact.
     */
    public function getXFerPreFact() {
        return $this->xFerPreFact;
    }

    /**
     * Set the x fer pre fact.
     *
     * @param bool $xFerPreFact The x fer pre fact.
     */
    public function setXFerPreFact($xFerPreFact) {
        $this->xFerPreFact = $xFerPreFact;
        return $this;
    }
}
