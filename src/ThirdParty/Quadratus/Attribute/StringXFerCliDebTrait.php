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
 * X fer cli deb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliDebTrait {

    /**
     * X fer cli deb.
     *
     * @var string
     */
    private $xFerCliDeb;

    /**
     * Get the x fer cli deb.
     *
     * @return string Returns the x fer cli deb.
     */
    public function getXFerCliDeb() {
        return $this->xFerCliDeb;
    }

    /**
     * Set the x fer cli deb.
     *
     * @param string $xFerCliDeb The x fer cli deb.
     */
    public function setXFerCliDeb($xFerCliDeb) {
        $this->xFerCliDeb = $xFerCliDeb;
        return $this;
    }
}
