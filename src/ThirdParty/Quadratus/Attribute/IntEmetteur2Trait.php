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
 * Emetteur2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmetteur2Trait {

    /**
     * Emetteur2.
     *
     * @var int
     */
    private $emetteur2;

    /**
     * Get the emetteur2.
     *
     * @return int Returns the emetteur2.
     */
    public function getEmetteur2() {
        return $this->emetteur2;
    }

    /**
     * Set the emetteur2.
     *
     * @param int $emetteur2 The emetteur2.
     */
    public function setEmetteur2($emetteur2) {
        $this->emetteur2 = $emetteur2;
        return $this;
    }
}
