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
 * Num critere bt num1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtNum1Trait {

    /**
     * Num critere bt num1.
     *
     * @var string
     */
    private $numCritereBtNum1;

    /**
     * Get the num critere bt num1.
     *
     * @return string Returns the num critere bt num1.
     */
    public function getNumCritereBtNum1() {
        return $this->numCritereBtNum1;
    }

    /**
     * Set the num critere bt num1.
     *
     * @param string $numCritereBtNum1 The num critere bt num1.
     */
    public function setNumCritereBtNum1($numCritereBtNum1) {
        $this->numCritereBtNum1 = $numCritereBtNum1;
        return $this;
    }
}
