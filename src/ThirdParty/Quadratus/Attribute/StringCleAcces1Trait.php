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
 * Cle acces1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAcces1Trait {

    /**
     * Cle acces1.
     *
     * @var string
     */
    private $cleAcces1;

    /**
     * Get the cle acces1.
     *
     * @return string Returns the cle acces1.
     */
    public function getCleAcces1() {
        return $this->cleAcces1;
    }

    /**
     * Set the cle acces1.
     *
     * @param string $cleAcces1 The cle acces1.
     */
    public function setCleAcces1($cleAcces1) {
        $this->cleAcces1 = $cleAcces1;
        return $this;
    }
}
