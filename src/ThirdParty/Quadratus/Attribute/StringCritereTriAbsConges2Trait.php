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
 * Critere tri abs conges2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereTriAbsConges2Trait {

    /**
     * Critere tri abs conges2.
     *
     * @var string
     */
    private $critereTriAbsConges2;

    /**
     * Get the critere tri abs conges2.
     *
     * @return string Returns the critere tri abs conges2.
     */
    public function getCritereTriAbsConges2() {
        return $this->critereTriAbsConges2;
    }

    /**
     * Set the critere tri abs conges2.
     *
     * @param string $critereTriAbsConges2 The critere tri abs conges2.
     */
    public function setCritereTriAbsConges2($critereTriAbsConges2) {
        $this->critereTriAbsConges2 = $critereTriAbsConges2;
        return $this;
    }
}
