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
 * X fer cli c trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliCTrait {

    /**
     * X fer cli c.
     *
     * @var string
     */
    private $xFerCliC;

    /**
     * Get the x fer cli c.
     *
     * @return string Returns the x fer cli c.
     */
    public function getXFerCliC() {
        return $this->xFerCliC;
    }

    /**
     * Set the x fer cli c.
     *
     * @param string $xFerCliC The x fer cli c.
     */
    public function setXFerCliC($xFerCliC) {
        $this->xFerCliC = $xFerCliC;
        return $this;
    }
}
