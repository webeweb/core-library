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
 * Exclure cice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureCiceTrait {

    /**
     * Exclure cice.
     *
     * @var bool
     */
    private $exclureCice;

    /**
     * Get the exclure cice.
     *
     * @return bool Returns the exclure cice.
     */
    public function getExclureCice() {
        return $this->exclureCice;
    }

    /**
     * Set the exclure cice.
     *
     * @param bool $exclureCice The exclure cice.
     */
    public function setExclureCice($exclureCice) {
        $this->exclureCice = $exclureCice;
        return $this;
    }
}
