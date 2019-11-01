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
 * X fer cli fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliFinTrait {

    /**
     * X fer cli fin.
     *
     * @var string
     */
    private $xFerCliFin;

    /**
     * Get the x fer cli fin.
     *
     * @return string Returns the x fer cli fin.
     */
    public function getXFerCliFin() {
        return $this->xFerCliFin;
    }

    /**
     * Set the x fer cli fin.
     *
     * @param string $xFerCliFin The x fer cli fin.
     */
    public function setXFerCliFin($xFerCliFin) {
        $this->xFerCliFin = $xFerCliFin;
        return $this;
    }
}
