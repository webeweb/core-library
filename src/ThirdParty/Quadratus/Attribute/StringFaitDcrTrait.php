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
 * Fait dcr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitDcrTrait {

    /**
     * Fait dcr.
     *
     * @var string
     */
    private $faitDcr;

    /**
     * Get the fait dcr.
     *
     * @return string Returns the fait dcr.
     */
    public function getFaitDcr() {
        return $this->faitDcr;
    }

    /**
     * Set the fait dcr.
     *
     * @param string $faitDcr The fait dcr.
     */
    public function setFaitDcr($faitDcr) {
        $this->faitDcr = $faitDcr;
        return $this;
    }
}
