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
 * Trs comment8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment8Trait {

    /**
     * Trs comment8.
     *
     * @var string
     */
    private $trsComment8;

    /**
     * Get the trs comment8.
     *
     * @return string Returns the trs comment8.
     */
    public function getTrsComment8() {
        return $this->trsComment8;
    }

    /**
     * Set the trs comment8.
     *
     * @param string $trsComment8 The trs comment8.
     */
    public function setTrsComment8($trsComment8) {
        $this->trsComment8 = $trsComment8;
        return $this;
    }
}
