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
 * Tds61 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds61Trait {

    /**
     * Tds61.
     *
     * @var string
     */
    private $tds61;

    /**
     * Get the tds61.
     *
     * @return string Returns the tds61.
     */
    public function getTds61() {
        return $this->tds61;
    }

    /**
     * Set the tds61.
     *
     * @param string $tds61 The tds61.
     */
    public function setTds61($tds61) {
        $this->tds61 = $tds61;
        return $this;
    }
}
