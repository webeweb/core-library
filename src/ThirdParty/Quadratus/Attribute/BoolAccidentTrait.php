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
 * Accident trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccidentTrait {

    /**
     * Accident.
     *
     * @var bool
     */
    private $accident;

    /**
     * Get the accident.
     *
     * @return bool Returns the accident.
     */
    public function getAccident() {
        return $this->accident;
    }

    /**
     * Set the accident.
     *
     * @param bool $accident The accident.
     */
    public function setAccident($accident) {
        $this->accident = $accident;
        return $this;
    }
}
