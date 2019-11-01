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
 * Cle acces3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces3Trait {

    /**
     * Cle acces3.
     *
     * @var string
     */
    private $cleAcces3;

    /**
     * Get the cle acces3.
     *
     * @return string Returns the cle acces3.
     */
    public function getCleAcces3() {
        return $this->cleAcces3;
    }

    /**
     * Set the cle acces3.
     *
     * @param string $cleAcces3 The cle acces3.
     */
    public function setCleAcces3($cleAcces3) {
        $this->cleAcces3 = $cleAcces3;
        return $this;
    }
}
