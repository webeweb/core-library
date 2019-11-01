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
 * Num critere couleur bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCritereCouleurBtTrait {

    /**
     * Num critere couleur bt.
     *
     * @var string
     */
    private $numCritereCouleurBt;

    /**
     * Get the num critere couleur bt.
     *
     * @return string Returns the num critere couleur bt.
     */
    public function getNumCritereCouleurBt() {
        return $this->numCritereCouleurBt;
    }

    /**
     * Set the num critere couleur bt.
     *
     * @param string $numCritereCouleurBt The num critere couleur bt.
     */
    public function setNumCritereCouleurBt($numCritereCouleurBt) {
        $this->numCritereCouleurBt = $numCritereCouleurBt;
        return $this;
    }
}
