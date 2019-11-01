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
 * X fer cli e trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliETrait {

    /**
     * X fer cli e.
     *
     * @var string
     */
    private $xFerCliE;

    /**
     * Get the x fer cli e.
     *
     * @return string Returns the x fer cli e.
     */
    public function getXFerCliE() {
        return $this->xFerCliE;
    }

    /**
     * Set the x fer cli e.
     *
     * @param string $xFerCliE The x fer cli e.
     */
    public function setXFerCliE($xFerCliE) {
        $this->xFerCliE = $xFerCliE;
        return $this;
    }
}
