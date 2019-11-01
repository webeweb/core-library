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
 * Marge sal insp prorata ca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMargeSalInspProrataCaTrait {

    /**
     * Marge sal insp prorata ca.
     *
     * @var bool
     */
    private $margeSalInspProrataCa;

    /**
     * Get the marge sal insp prorata ca.
     *
     * @return bool Returns the marge sal insp prorata ca.
     */
    public function getMargeSalInspProrataCa() {
        return $this->margeSalInspProrataCa;
    }

    /**
     * Set the marge sal insp prorata ca.
     *
     * @param bool $margeSalInspProrataCa The marge sal insp prorata ca.
     */
    public function setMargeSalInspProrataCa($margeSalInspProrataCa) {
        $this->margeSalInspProrataCa = $margeSalInspProrataCa;
        return $this;
    }
}
