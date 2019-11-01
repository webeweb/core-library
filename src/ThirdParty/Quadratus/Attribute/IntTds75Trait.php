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
 * Tds75 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTds75Trait {

    /**
     * Tds75.
     *
     * @var int
     */
    private $tds75;

    /**
     * Get the tds75.
     *
     * @return int Returns the tds75.
     */
    public function getTds75() {
        return $this->tds75;
    }

    /**
     * Set the tds75.
     *
     * @param int $tds75 The tds75.
     */
    public function setTds75($tds75) {
        $this->tds75 = $tds75;
        return $this;
    }
}
