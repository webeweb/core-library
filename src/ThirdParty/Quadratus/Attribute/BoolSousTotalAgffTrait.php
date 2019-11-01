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
 * Sous total agff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSousTotalAgffTrait {

    /**
     * Sous total agff.
     *
     * @var bool
     */
    private $sousTotalAgff;

    /**
     * Get the sous total agff.
     *
     * @return bool Returns the sous total agff.
     */
    public function getSousTotalAgff() {
        return $this->sousTotalAgff;
    }

    /**
     * Set the sous total agff.
     *
     * @param bool $sousTotalAgff The sous total agff.
     */
    public function setSousTotalAgff($sousTotalAgff) {
        $this->sousTotalAgff = $sousTotalAgff;
        return $this;
    }
}
