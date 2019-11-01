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
 * Emetteur1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmetteur1Trait {

    /**
     * Emetteur1.
     *
     * @var int
     */
    private $emetteur1;

    /**
     * Get the emetteur1.
     *
     * @return int Returns the emetteur1.
     */
    public function getEmetteur1() {
        return $this->emetteur1;
    }

    /**
     * Set the emetteur1.
     *
     * @param int $emetteur1 The emetteur1.
     */
    public function setEmetteur1($emetteur1) {
        $this->emetteur1 = $emetteur1;
        return $this;
    }
}
