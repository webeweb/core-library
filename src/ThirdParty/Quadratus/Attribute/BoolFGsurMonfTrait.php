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
 * F gsur monf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFGsurMonfTrait {

    /**
     * F gsur monf.
     *
     * @var bool
     */
    private $fGsurMonf;

    /**
     * Get the f gsur monf.
     *
     * @return bool Returns the f gsur monf.
     */
    public function getFGsurMonf() {
        return $this->fGsurMonf;
    }

    /**
     * Set the f gsur monf.
     *
     * @param bool $fGsurMonf The f gsur monf.
     */
    public function setFGsurMonf($fGsurMonf) {
        $this->fGsurMonf = $fGsurMonf;
        return $this;
    }
}
