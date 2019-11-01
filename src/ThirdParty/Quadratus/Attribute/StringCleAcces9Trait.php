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
 * Cle acces9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces9Trait {

    /**
     * Cle acces9.
     *
     * @var string
     */
    private $cleAcces9;

    /**
     * Get the cle acces9.
     *
     * @return string Returns the cle acces9.
     */
    public function getCleAcces9() {
        return $this->cleAcces9;
    }

    /**
     * Set the cle acces9.
     *
     * @param string $cleAcces9 The cle acces9.
     */
    public function setCleAcces9($cleAcces9) {
        $this->cleAcces9 = $cleAcces9;
        return $this;
    }
}
