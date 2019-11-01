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
 * Tds139 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds139Trait {

    /**
     * Tds139.
     *
     * @var string
     */
    private $tds139;

    /**
     * Get the tds139.
     *
     * @return string Returns the tds139.
     */
    public function getTds139() {
        return $this->tds139;
    }

    /**
     * Set the tds139.
     *
     * @param string $tds139 The tds139.
     */
    public function setTds139($tds139) {
        $this->tds139 = $tds139;
        return $this;
    }
}
