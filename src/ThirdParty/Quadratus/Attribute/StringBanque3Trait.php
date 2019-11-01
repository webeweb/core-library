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
 * Banque3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBanque3Trait {

    /**
     * Banque3.
     *
     * @var string
     */
    private $banque3;

    /**
     * Get the banque3.
     *
     * @return string Returns the banque3.
     */
    public function getBanque3() {
        return $this->banque3;
    }

    /**
     * Set the banque3.
     *
     * @param string $banque3 The banque3.
     */
    public function setBanque3($banque3) {
        $this->banque3 = $banque3;
        return $this;
    }
}
