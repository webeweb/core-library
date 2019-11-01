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
 * Cle acces8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces8Trait {

    /**
     * Cle acces8.
     *
     * @var string
     */
    private $cleAcces8;

    /**
     * Get the cle acces8.
     *
     * @return string Returns the cle acces8.
     */
    public function getCleAcces8() {
        return $this->cleAcces8;
    }

    /**
     * Set the cle acces8.
     *
     * @param string $cleAcces8 The cle acces8.
     */
    public function setCleAcces8($cleAcces8) {
        $this->cleAcces8 = $cleAcces8;
        return $this;
    }
}
