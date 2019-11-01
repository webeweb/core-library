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
 * Banque2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBanque2Trait {

    /**
     * Banque2.
     *
     * @var string
     */
    private $banque2;

    /**
     * Get the banque2.
     *
     * @return string Returns the banque2.
     */
    public function getBanque2() {
        return $this->banque2;
    }

    /**
     * Set the banque2.
     *
     * @param string $banque2 The banque2.
     */
    public function setBanque2($banque2) {
        $this->banque2 = $banque2;
        return $this;
    }
}
