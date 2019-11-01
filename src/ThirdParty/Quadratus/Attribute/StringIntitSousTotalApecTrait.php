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
 * Intit sous total apec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitSousTotalApecTrait {

    /**
     * Intit sous total apec.
     *
     * @var string
     */
    private $intitSousTotalApec;

    /**
     * Get the intit sous total apec.
     *
     * @return string Returns the intit sous total apec.
     */
    public function getIntitSousTotalApec() {
        return $this->intitSousTotalApec;
    }

    /**
     * Set the intit sous total apec.
     *
     * @param string $intitSousTotalApec The intit sous total apec.
     */
    public function setIntitSousTotalApec($intitSousTotalApec) {
        $this->intitSousTotalApec = $intitSousTotalApec;
        return $this;
    }
}
