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
 * Siren trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSirenTrait {

    /**
     * Siren.
     *
     * @var string
     */
    private $siren;

    /**
     * Get the siren.
     *
     * @return string Returns the siren.
     */
    public function getSiren() {
        return $this->siren;
    }

    /**
     * Set the siren.
     *
     * @param string $siren The siren.
     */
    public function setSiren($siren) {
        $this->siren = $siren;
        return $this;
    }
}
