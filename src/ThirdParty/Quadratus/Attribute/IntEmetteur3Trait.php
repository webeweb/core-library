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
 * Emetteur3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEmetteur3Trait {

    /**
     * Emetteur3.
     *
     * @var int
     */
    private $emetteur3;

    /**
     * Get the emetteur3.
     *
     * @return int Returns the emetteur3.
     */
    public function getEmetteur3() {
        return $this->emetteur3;
    }

    /**
     * Set the emetteur3.
     *
     * @param int $emetteur3 The emetteur3.
     */
    public function setEmetteur3($emetteur3) {
        $this->emetteur3 = $emetteur3;
        return $this;
    }
}
