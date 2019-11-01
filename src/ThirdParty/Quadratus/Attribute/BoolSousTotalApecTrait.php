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
 * Sous total apec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSousTotalApecTrait {

    /**
     * Sous total apec.
     *
     * @var bool
     */
    private $sousTotalApec;

    /**
     * Get the sous total apec.
     *
     * @return bool Returns the sous total apec.
     */
    public function getSousTotalApec() {
        return $this->sousTotalApec;
    }

    /**
     * Set the sous total apec.
     *
     * @param bool $sousTotalApec The sous total apec.
     */
    public function setSousTotalApec($sousTotalApec) {
        $this->sousTotalApec = $sousTotalApec;
        return $this;
    }
}
