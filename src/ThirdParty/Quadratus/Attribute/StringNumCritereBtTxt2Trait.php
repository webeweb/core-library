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
 * Num critere bt txt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereBtTxt2Trait {

    /**
     * Num critere bt txt2.
     *
     * @var string
     */
    private $numCritereBtTxt2;

    /**
     * Get the num critere bt txt2.
     *
     * @return string Returns the num critere bt txt2.
     */
    public function getNumCritereBtTxt2() {
        return $this->numCritereBtTxt2;
    }

    /**
     * Set the num critere bt txt2.
     *
     * @param string $numCritereBtTxt2 The num critere bt txt2.
     */
    public function setNumCritereBtTxt2($numCritereBtTxt2) {
        $this->numCritereBtTxt2 = $numCritereBtTxt2;
        return $this;
    }
}
