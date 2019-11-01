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
 * F gsur ac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFGsurAcTrait {

    /**
     * F gsur ac.
     *
     * @var bool
     */
    private $fGsurAc;

    /**
     * Get the f gsur ac.
     *
     * @return bool Returns the f gsur ac.
     */
    public function getFGsurAc() {
        return $this->fGsurAc;
    }

    /**
     * Set the f gsur ac.
     *
     * @param bool $fGsurAc The f gsur ac.
     */
    public function setFGsurAc($fGsurAc) {
        $this->fGsurAc = $fGsurAc;
        return $this;
    }
}
