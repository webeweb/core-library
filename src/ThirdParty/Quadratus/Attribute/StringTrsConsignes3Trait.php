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
 * Trs consignes3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsConsignes3Trait {

    /**
     * Trs consignes3.
     *
     * @var string
     */
    private $trsConsignes3;

    /**
     * Get the trs consignes3.
     *
     * @return string Returns the trs consignes3.
     */
    public function getTrsConsignes3() {
        return $this->trsConsignes3;
    }

    /**
     * Set the trs consignes3.
     *
     * @param string $trsConsignes3 The trs consignes3.
     */
    public function setTrsConsignes3($trsConsignes3) {
        $this->trsConsignes3 = $trsConsignes3;
        return $this;
    }
}
