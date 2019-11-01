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
 * Cle acces10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces10Trait {

    /**
     * Cle acces10.
     *
     * @var string
     */
    private $cleAcces10;

    /**
     * Get the cle acces10.
     *
     * @return string Returns the cle acces10.
     */
    public function getCleAcces10() {
        return $this->cleAcces10;
    }

    /**
     * Set the cle acces10.
     *
     * @param string $cleAcces10 The cle acces10.
     */
    public function setCleAcces10($cleAcces10) {
        $this->cleAcces10 = $cleAcces10;
        return $this;
    }
}
