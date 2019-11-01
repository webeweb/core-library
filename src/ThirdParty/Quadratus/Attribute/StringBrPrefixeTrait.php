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
 * Br prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBrPrefixeTrait {

    /**
     * Br prefixe.
     *
     * @var string
     */
    private $brPrefixe;

    /**
     * Get the br prefixe.
     *
     * @return string Returns the br prefixe.
     */
    public function getBrPrefixe() {
        return $this->brPrefixe;
    }

    /**
     * Set the br prefixe.
     *
     * @param string $brPrefixe The br prefixe.
     */
    public function setBrPrefixe($brPrefixe) {
        $this->brPrefixe = $brPrefixe;
        return $this;
    }
}
