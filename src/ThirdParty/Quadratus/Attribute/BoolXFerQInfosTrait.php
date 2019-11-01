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
 * X fer q infos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerQInfosTrait {

    /**
     * X fer q infos.
     *
     * @var bool
     */
    private $xFerQInfos;

    /**
     * Get the x fer q infos.
     *
     * @return bool Returns the x fer q infos.
     */
    public function getXFerQInfos() {
        return $this->xFerQInfos;
    }

    /**
     * Set the x fer q infos.
     *
     * @param bool $xFerQInfos The x fer q infos.
     */
    public function setXFerQInfos($xFerQInfos) {
        $this->xFerQInfos = $xFerQInfos;
        return $this;
    }
}
