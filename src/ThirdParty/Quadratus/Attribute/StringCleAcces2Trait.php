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
 * Cle acces2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces2Trait {

    /**
     * Cle acces2.
     *
     * @var string
     */
    private $cleAcces2;

    /**
     * Get the cle acces2.
     *
     * @return string Returns the cle acces2.
     */
    public function getCleAcces2() {
        return $this->cleAcces2;
    }

    /**
     * Set the cle acces2.
     *
     * @param string $cleAcces2 The cle acces2.
     */
    public function setCleAcces2($cleAcces2) {
        $this->cleAcces2 = $cleAcces2;
        return $this;
    }
}
