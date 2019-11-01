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
 * Trs comment9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsComment9Trait {

    /**
     * Trs comment9.
     *
     * @var string
     */
    private $trsComment9;

    /**
     * Get the trs comment9.
     *
     * @return string Returns the trs comment9.
     */
    public function getTrsComment9() {
        return $this->trsComment9;
    }

    /**
     * Set the trs comment9.
     *
     * @param string $trsComment9 The trs comment9.
     */
    public function setTrsComment9($trsComment9) {
        $this->trsComment9 = $trsComment9;
        return $this;
    }
}
