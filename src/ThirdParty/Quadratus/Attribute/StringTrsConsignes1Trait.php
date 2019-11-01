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
 * Trs consignes1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsConsignes1Trait {

    /**
     * Trs consignes1.
     *
     * @var string
     */
    private $trsConsignes1;

    /**
     * Get the trs consignes1.
     *
     * @return string Returns the trs consignes1.
     */
    public function getTrsConsignes1() {
        return $this->trsConsignes1;
    }

    /**
     * Set the trs consignes1.
     *
     * @param string $trsConsignes1 The trs consignes1.
     */
    public function setTrsConsignes1($trsConsignes1) {
        $this->trsConsignes1 = $trsConsignes1;
        return $this;
    }
}
