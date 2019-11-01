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
 * Tds sup1200 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTdsSup1200Trait {

    /**
     * Tds sup1200.
     *
     * @var string
     */
    private $tdsSup1200;

    /**
     * Get the tds sup1200.
     *
     * @return string Returns the tds sup1200.
     */
    public function getTdsSup1200() {
        return $this->tdsSup1200;
    }

    /**
     * Set the tds sup1200.
     *
     * @param string $tdsSup1200 The tds sup1200.
     */
    public function setTdsSup1200($tdsSup1200) {
        $this->tdsSup1200 = $tdsSup1200;
        return $this;
    }
}
