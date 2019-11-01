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
 * Cle acces4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces4Trait {

    /**
     * Cle acces4.
     *
     * @var string
     */
    private $cleAcces4;

    /**
     * Get the cle acces4.
     *
     * @return string Returns the cle acces4.
     */
    public function getCleAcces4() {
        return $this->cleAcces4;
    }

    /**
     * Set the cle acces4.
     *
     * @param string $cleAcces4 The cle acces4.
     */
    public function setCleAcces4($cleAcces4) {
        $this->cleAcces4 = $cleAcces4;
        return $this;
    }
}
