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
 * X fer q infos det trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerQInfosDetTrait {

    /**
     * X fer q infos det.
     *
     * @var string
     */
    private $xFerQInfosDet;

    /**
     * Get the x fer q infos det.
     *
     * @return string Returns the x fer q infos det.
     */
    public function getXFerQInfosDet() {
        return $this->xFerQInfosDet;
    }

    /**
     * Set the x fer q infos det.
     *
     * @param string $xFerQInfosDet The x fer q infos det.
     */
    public function setXFerQInfosDet($xFerQInfosDet) {
        $this->xFerQInfosDet = $xFerQInfosDet;
        return $this;
    }
}
