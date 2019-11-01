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
 * Remplacant abs jf pas auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRemplacantAbsJfPasAutoTrait {

    /**
     * Remplacant abs jf pas auto.
     *
     * @var bool
     */
    private $remplacantAbsJfPasAuto;

    /**
     * Get the remplacant abs jf pas auto.
     *
     * @return bool Returns the remplacant abs jf pas auto.
     */
    public function getRemplacantAbsJfPasAuto() {
        return $this->remplacantAbsJfPasAuto;
    }

    /**
     * Set the remplacant abs jf pas auto.
     *
     * @param bool $remplacantAbsJfPasAuto The remplacant abs jf pas auto.
     */
    public function setRemplacantAbsJfPasAuto($remplacantAbsJfPasAuto) {
        $this->remplacantAbsJfPasAuto = $remplacantAbsJfPasAuto;
        return $this;
    }
}
