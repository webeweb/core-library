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
 * X fer cpta src trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCptaSrcTrait {

    /**
     * X fer cpta src.
     *
     * @var string
     */
    private $xFerCptaSrc;

    /**
     * Get the x fer cpta src.
     *
     * @return string Returns the x fer cpta src.
     */
    public function getXFerCptaSrc() {
        return $this->xFerCptaSrc;
    }

    /**
     * Set the x fer cpta src.
     *
     * @param string $xFerCptaSrc The x fer cpta src.
     */
    public function setXFerCptaSrc($xFerCptaSrc) {
        $this->xFerCptaSrc = $xFerCptaSrc;
        return $this;
    }
}
