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
 * Trs comment5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment5Trait {

    /**
     * Trs comment5.
     *
     * @var string
     */
    private $trsComment5;

    /**
     * Get the trs comment5.
     *
     * @return string Returns the trs comment5.
     */
    public function getTrsComment5() {
        return $this->trsComment5;
    }

    /**
     * Set the trs comment5.
     *
     * @param string $trsComment5 The trs comment5.
     */
    public function setTrsComment5($trsComment5) {
        $this->trsComment5 = $trsComment5;
        return $this;
    }
}
