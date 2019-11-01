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
 * Trs comment2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment2Trait {

    /**
     * Trs comment2.
     *
     * @var string
     */
    private $trsComment2;

    /**
     * Get the trs comment2.
     *
     * @return string Returns the trs comment2.
     */
    public function getTrsComment2() {
        return $this->trsComment2;
    }

    /**
     * Set the trs comment2.
     *
     * @param string $trsComment2 The trs comment2.
     */
    public function setTrsComment2($trsComment2) {
        $this->trsComment2 = $trsComment2;
        return $this;
    }
}
