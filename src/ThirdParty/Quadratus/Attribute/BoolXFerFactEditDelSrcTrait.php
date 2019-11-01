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
 * X fer fact edit del src trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerFactEditDelSrcTrait {

    /**
     * X fer fact edit del src.
     *
     * @var bool
     */
    private $xFerFactEditDelSrc;

    /**
     * Get the x fer fact edit del src.
     *
     * @return bool Returns the x fer fact edit del src.
     */
    public function getXFerFactEditDelSrc() {
        return $this->xFerFactEditDelSrc;
    }

    /**
     * Set the x fer fact edit del src.
     *
     * @param bool $xFerFactEditDelSrc The x fer fact edit del src.
     */
    public function setXFerFactEditDelSrc($xFerFactEditDelSrc) {
        $this->xFerFactEditDelSrc = $xFerFactEditDelSrc;
        return $this;
    }
}
