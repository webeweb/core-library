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
 * Fait tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitTpTrait {

    /**
     * Fait tp.
     *
     * @var string
     */
    private $faitTp;

    /**
     * Get the fait tp.
     *
     * @return string Returns the fait tp.
     */
    public function getFaitTp() {
        return $this->faitTp;
    }

    /**
     * Set the fait tp.
     *
     * @param string $faitTp The fait tp.
     */
    public function setFaitTp($faitTp) {
        $this->faitTp = $faitTp;
        return $this;
    }
}
