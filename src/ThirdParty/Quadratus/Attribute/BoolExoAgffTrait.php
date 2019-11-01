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
 * Exo agff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoAgffTrait {

    /**
     * Exo agff.
     *
     * @var bool
     */
    private $exoAgff;

    /**
     * Get the exo agff.
     *
     * @return bool Returns the exo agff.
     */
    public function getExoAgff() {
        return $this->exoAgff;
    }

    /**
     * Set the exo agff.
     *
     * @param bool $exoAgff The exo agff.
     */
    public function setExoAgff($exoAgff) {
        $this->exoAgff = $exoAgff;
        return $this;
    }
}
