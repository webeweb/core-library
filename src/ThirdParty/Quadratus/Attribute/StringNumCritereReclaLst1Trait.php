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
 * Num critere recla lst1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereReclaLst1Trait {

    /**
     * Num critere recla lst1.
     *
     * @var string
     */
    private $numCritereReclaLst1;

    /**
     * Get the num critere recla lst1.
     *
     * @return string Returns the num critere recla lst1.
     */
    public function getNumCritereReclaLst1() {
        return $this->numCritereReclaLst1;
    }

    /**
     * Set the num critere recla lst1.
     *
     * @param string $numCritereReclaLst1 The num critere recla lst1.
     */
    public function setNumCritereReclaLst1($numCritereReclaLst1) {
        $this->numCritereReclaLst1 = $numCritereReclaLst1;
        return $this;
    }
}
