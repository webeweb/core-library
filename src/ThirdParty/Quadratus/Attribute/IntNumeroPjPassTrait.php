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
 * Numero pj pass trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroPjPassTrait {

    /**
     * Numero pj pass.
     *
     * @var int
     */
    private $numeroPjPass;

    /**
     * Get the numero pj pass.
     *
     * @return int Returns the numero pj pass.
     */
    public function getNumeroPjPass() {
        return $this->numeroPjPass;
    }

    /**
     * Set the numero pj pass.
     *
     * @param int $numeroPjPass The numero pj pass.
     */
    public function setNumeroPjPass($numeroPjPass) {
        $this->numeroPjPass = $numeroPjPass;
        return $this;
    }
}
