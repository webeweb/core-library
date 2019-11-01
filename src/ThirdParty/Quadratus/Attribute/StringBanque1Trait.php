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
 * Banque1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBanque1Trait {

    /**
     * Banque1.
     *
     * @var string
     */
    private $banque1;

    /**
     * Get the banque1.
     *
     * @return string Returns the banque1.
     */
    public function getBanque1() {
        return $this->banque1;
    }

    /**
     * Set the banque1.
     *
     * @param string $banque1 The banque1.
     */
    public function setBanque1($banque1) {
        $this->banque1 = $banque1;
        return $this;
    }
}
