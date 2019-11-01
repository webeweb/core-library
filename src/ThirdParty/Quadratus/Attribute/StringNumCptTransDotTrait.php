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
 * Num cpt trans dot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptTransDotTrait {

    /**
     * Num cpt trans dot.
     *
     * @var string
     */
    private $numCptTransDot;

    /**
     * Get the num cpt trans dot.
     *
     * @return string Returns the num cpt trans dot.
     */
    public function getNumCptTransDot() {
        return $this->numCptTransDot;
    }

    /**
     * Set the num cpt trans dot.
     *
     * @param string $numCptTransDot The num cpt trans dot.
     */
    public function setNumCptTransDot($numCptTransDot) {
        $this->numCptTransDot = $numCptTransDot;
        return $this;
    }
}
