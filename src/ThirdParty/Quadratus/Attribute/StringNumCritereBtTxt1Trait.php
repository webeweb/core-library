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
 * Num critere bt txt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtTxt1Trait {

    /**
     * Num critere bt txt1.
     *
     * @var string
     */
    private $numCritereBtTxt1;

    /**
     * Get the num critere bt txt1.
     *
     * @return string Returns the num critere bt txt1.
     */
    public function getNumCritereBtTxt1() {
        return $this->numCritereBtTxt1;
    }

    /**
     * Set the num critere bt txt1.
     *
     * @param string $numCritereBtTxt1 The num critere bt txt1.
     */
    public function setNumCritereBtTxt1($numCritereBtTxt1) {
        $this->numCritereBtTxt1 = $numCritereBtTxt1;
        return $this;
    }
}
