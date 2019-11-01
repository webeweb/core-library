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
 * Cle acces6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces6Trait {

    /**
     * Cle acces6.
     *
     * @var string
     */
    private $cleAcces6;

    /**
     * Get the cle acces6.
     *
     * @return string Returns the cle acces6.
     */
    public function getCleAcces6() {
        return $this->cleAcces6;
    }

    /**
     * Set the cle acces6.
     *
     * @param string $cleAcces6 The cle acces6.
     */
    public function setCleAcces6($cleAcces6) {
        $this->cleAcces6 = $cleAcces6;
        return $this;
    }
}
