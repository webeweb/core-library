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
 * X fer fact non edit del src trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerFactNonEditDelSrcTrait {

    /**
     * X fer fact non edit del src.
     *
     * @var bool
     */
    private $xFerFactNonEditDelSrc;

    /**
     * Get the x fer fact non edit del src.
     *
     * @return bool Returns the x fer fact non edit del src.
     */
    public function getXFerFactNonEditDelSrc() {
        return $this->xFerFactNonEditDelSrc;
    }

    /**
     * Set the x fer fact non edit del src.
     *
     * @param bool $xFerFactNonEditDelSrc The x fer fact non edit del src.
     */
    public function setXFerFactNonEditDelSrc($xFerFactNonEditDelSrc) {
        $this->xFerFactNonEditDelSrc = $xFerFactNonEditDelSrc;
        return $this;
    }
}
