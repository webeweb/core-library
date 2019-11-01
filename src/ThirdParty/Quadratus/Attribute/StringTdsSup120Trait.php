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
 * Tds sup120 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTdsSup120Trait {

    /**
     * Tds sup120.
     *
     * @var string
     */
    private $tdsSup120;

    /**
     * Get the tds sup120.
     *
     * @return string Returns the tds sup120.
     */
    public function getTdsSup120() {
        return $this->tdsSup120;
    }

    /**
     * Set the tds sup120.
     *
     * @param string $tdsSup120 The tds sup120.
     */
    public function setTdsSup120($tdsSup120) {
        $this->tdsSup120 = $tdsSup120;
        return $this;
    }
}
