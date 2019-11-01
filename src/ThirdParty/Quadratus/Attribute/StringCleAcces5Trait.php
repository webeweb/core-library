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
 * Cle acces5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces5Trait {

    /**
     * Cle acces5.
     *
     * @var string
     */
    private $cleAcces5;

    /**
     * Get the cle acces5.
     *
     * @return string Returns the cle acces5.
     */
    public function getCleAcces5() {
        return $this->cleAcces5;
    }

    /**
     * Set the cle acces5.
     *
     * @param string $cleAcces5 The cle acces5.
     */
    public function setCleAcces5($cleAcces5) {
        $this->cleAcces5 = $cleAcces5;
        return $this;
    }
}
