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
 * Prevoyance comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrevoyanceCompTrait {

    /**
     * Prevoyance comp.
     *
     * @var string
     */
    private $prevoyanceComp;

    /**
     * Get the prevoyance comp.
     *
     * @return string Returns the prevoyance comp.
     */
    public function getPrevoyanceComp() {
        return $this->prevoyanceComp;
    }

    /**
     * Set the prevoyance comp.
     *
     * @param string $prevoyanceComp The prevoyance comp.
     */
    public function setPrevoyanceComp($prevoyanceComp) {
        $this->prevoyanceComp = $prevoyanceComp;
        return $this;
    }
}
