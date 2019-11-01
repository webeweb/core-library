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
 * Num critere bt lst1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtLst1Trait {

    /**
     * Num critere bt lst1.
     *
     * @var string
     */
    private $numCritereBtLst1;

    /**
     * Get the num critere bt lst1.
     *
     * @return string Returns the num critere bt lst1.
     */
    public function getNumCritereBtLst1() {
        return $this->numCritereBtLst1;
    }

    /**
     * Set the num critere bt lst1.
     *
     * @param string $numCritereBtLst1 The num critere bt lst1.
     */
    public function setNumCritereBtLst1($numCritereBtLst1) {
        $this->numCritereBtLst1 = $numCritereBtLst1;
        return $this;
    }
}
