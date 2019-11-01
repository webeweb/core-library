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
 * Fs fiscal coll arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsFiscalCollArchTrait {

    /**
     * Fs fiscal coll arch.
     *
     * @var string
     */
    private $fsFiscalCollArch;

    /**
     * Get the fs fiscal coll arch.
     *
     * @return string Returns the fs fiscal coll arch.
     */
    public function getFsFiscalCollArch() {
        return $this->fsFiscalCollArch;
    }

    /**
     * Set the fs fiscal coll arch.
     *
     * @param string $fsFiscalCollArch The fs fiscal coll arch.
     */
    public function setFsFiscalCollArch($fsFiscalCollArch) {
        $this->fsFiscalCollArch = $fsFiscalCollArch;
        return $this;
    }
}
