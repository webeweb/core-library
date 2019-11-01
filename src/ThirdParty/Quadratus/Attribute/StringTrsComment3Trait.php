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
 * Trs comment3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment3Trait {

    /**
     * Trs comment3.
     *
     * @var string
     */
    private $trsComment3;

    /**
     * Get the trs comment3.
     *
     * @return string Returns the trs comment3.
     */
    public function getTrsComment3() {
        return $this->trsComment3;
    }

    /**
     * Set the trs comment3.
     *
     * @param string $trsComment3 The trs comment3.
     */
    public function setTrsComment3($trsComment3) {
        $this->trsComment3 = $trsComment3;
        return $this;
    }
}
