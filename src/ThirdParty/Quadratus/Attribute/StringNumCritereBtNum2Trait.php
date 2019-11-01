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
 * Num critere bt num2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtNum2Trait {

    /**
     * Num critere bt num2.
     *
     * @var string
     */
    private $numCritereBtNum2;

    /**
     * Get the num critere bt num2.
     *
     * @return string Returns the num critere bt num2.
     */
    public function getNumCritereBtNum2() {
        return $this->numCritereBtNum2;
    }

    /**
     * Set the num critere bt num2.
     *
     * @param string $numCritereBtNum2 The num critere bt num2.
     */
    public function setNumCritereBtNum2($numCritereBtNum2) {
        $this->numCritereBtNum2 = $numCritereBtNum2;
        return $this;
    }
}
