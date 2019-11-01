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
 * Trs comment1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment1Trait {

    /**
     * Trs comment1.
     *
     * @var string
     */
    private $trsComment1;

    /**
     * Get the trs comment1.
     *
     * @return string Returns the trs comment1.
     */
    public function getTrsComment1() {
        return $this->trsComment1;
    }

    /**
     * Set the trs comment1.
     *
     * @param string $trsComment1 The trs comment1.
     */
    public function setTrsComment1($trsComment1) {
        $this->trsComment1 = $trsComment1;
        return $this;
    }
}
