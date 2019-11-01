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
 * Critere tri abs conges3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCritereTriAbsConges3Trait {

    /**
     * Critere tri abs conges3.
     *
     * @var string
     */
    private $critereTriAbsConges3;

    /**
     * Get the critere tri abs conges3.
     *
     * @return string Returns the critere tri abs conges3.
     */
    public function getCritereTriAbsConges3() {
        return $this->critereTriAbsConges3;
    }

    /**
     * Set the critere tri abs conges3.
     *
     * @param string $critereTriAbsConges3 The critere tri abs conges3.
     */
    public function setCritereTriAbsConges3($critereTriAbsConges3) {
        $this->critereTriAbsConges3 = $critereTriAbsConges3;
        return $this;
    }
}
