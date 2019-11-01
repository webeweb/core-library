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
 * Num critere bt lst2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtLst2Trait {

    /**
     * Num critere bt lst2.
     *
     * @var string
     */
    private $numCritereBtLst2;

    /**
     * Get the num critere bt lst2.
     *
     * @return string Returns the num critere bt lst2.
     */
    public function getNumCritereBtLst2() {
        return $this->numCritereBtLst2;
    }

    /**
     * Set the num critere bt lst2.
     *
     * @param string $numCritereBtLst2 The num critere bt lst2.
     */
    public function setNumCritereBtLst2($numCritereBtLst2) {
        $this->numCritereBtLst2 = $numCritereBtLst2;
        return $this;
    }
}
