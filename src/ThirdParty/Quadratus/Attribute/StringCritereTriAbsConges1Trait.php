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
 * Critere tri abs conges1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereTriAbsConges1Trait {

    /**
     * Critere tri abs conges1.
     *
     * @var string
     */
    private $critereTriAbsConges1;

    /**
     * Get the critere tri abs conges1.
     *
     * @return string Returns the critere tri abs conges1.
     */
    public function getCritereTriAbsConges1() {
        return $this->critereTriAbsConges1;
    }

    /**
     * Set the critere tri abs conges1.
     *
     * @param string $critereTriAbsConges1 The critere tri abs conges1.
     */
    public function setCritereTriAbsConges1($critereTriAbsConges1) {
        $this->critereTriAbsConges1 = $critereTriAbsConges1;
        return $this;
    }
}
