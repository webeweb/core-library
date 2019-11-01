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
 * Trs consignes2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsConsignes2Trait {

    /**
     * Trs consignes2.
     *
     * @var string
     */
    private $trsConsignes2;

    /**
     * Get the trs consignes2.
     *
     * @return string Returns the trs consignes2.
     */
    public function getTrsConsignes2() {
        return $this->trsConsignes2;
    }

    /**
     * Set the trs consignes2.
     *
     * @param string $trsConsignes2 The trs consignes2.
     */
    public function setTrsConsignes2($trsConsignes2) {
        $this->trsConsignes2 = $trsConsignes2;
        return $this;
    }
}
