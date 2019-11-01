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
 * Intit sous total agff agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntitSousTotalAgffAgircTrait {

    /**
     * Intit sous total agff agirc.
     *
     * @var string
     */
    private $intitSousTotalAgffAgirc;

    /**
     * Get the intit sous total agff agirc.
     *
     * @return string Returns the intit sous total agff agirc.
     */
    public function getIntitSousTotalAgffAgirc() {
        return $this->intitSousTotalAgffAgirc;
    }

    /**
     * Set the intit sous total agff agirc.
     *
     * @param string $intitSousTotalAgffAgirc The intit sous total agff agirc.
     */
    public function setIntitSousTotalAgffAgirc($intitSousTotalAgffAgirc) {
        $this->intitSousTotalAgffAgirc = $intitSousTotalAgffAgirc;
        return $this;
    }
}
