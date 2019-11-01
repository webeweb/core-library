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
 * Agff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAgffTrait {

    /**
     * Agff.
     *
     * @var bool
     */
    private $agff;

    /**
     * Get the agff.
     *
     * @return bool Returns the agff.
     */
    public function getAgff() {
        return $this->agff;
    }

    /**
     * Set the agff.
     *
     * @param bool $agff The agff.
     */
    public function setAgff($agff) {
        $this->agff = $agff;
        return $this;
    }
}
