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
 * Num critere recla lst2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereReclaLst2Trait {

    /**
     * Num critere recla lst2.
     *
     * @var string
     */
    private $numCritereReclaLst2;

    /**
     * Get the num critere recla lst2.
     *
     * @return string Returns the num critere recla lst2.
     */
    public function getNumCritereReclaLst2() {
        return $this->numCritereReclaLst2;
    }

    /**
     * Set the num critere recla lst2.
     *
     * @param string $numCritereReclaLst2 The num critere recla lst2.
     */
    public function setNumCritereReclaLst2($numCritereReclaLst2) {
        $this->numCritereReclaLst2 = $numCritereReclaLst2;
        return $this;
    }
}
