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
 * Trs comment4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment4Trait {

    /**
     * Trs comment4.
     *
     * @var string
     */
    private $trsComment4;

    /**
     * Get the trs comment4.
     *
     * @return string Returns the trs comment4.
     */
    public function getTrsComment4() {
        return $this->trsComment4;
    }

    /**
     * Set the trs comment4.
     *
     * @param string $trsComment4 The trs comment4.
     */
    public function setTrsComment4($trsComment4) {
        $this->trsComment4 = $trsComment4;
        return $this;
    }
}
