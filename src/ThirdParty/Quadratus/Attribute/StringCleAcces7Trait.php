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
 * Cle acces7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces7Trait {

    /**
     * Cle acces7.
     *
     * @var string
     */
    private $cleAcces7;

    /**
     * Get the cle acces7.
     *
     * @return string Returns the cle acces7.
     */
    public function getCleAcces7() {
        return $this->cleAcces7;
    }

    /**
     * Set the cle acces7.
     *
     * @param string $cleAcces7 The cle acces7.
     */
    public function setCleAcces7($cleAcces7) {
        $this->cleAcces7 = $cleAcces7;
        return $this;
    }
}
