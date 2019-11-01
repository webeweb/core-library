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
 * Viseur num attest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringViseurNumAttestTrait {

    /**
     * Viseur num attest.
     *
     * @var string
     */
    private $viseurNumAttest;

    /**
     * Get the viseur num attest.
     *
     * @return string Returns the viseur num attest.
     */
    public function getViseurNumAttest() {
        return $this->viseurNumAttest;
    }

    /**
     * Set the viseur num attest.
     *
     * @param string $viseurNumAttest The viseur num attest.
     */
    public function setViseurNumAttest($viseurNumAttest) {
        $this->viseurNumAttest = $viseurNumAttest;
        return $this;
    }
}
