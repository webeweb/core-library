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
 * Ordre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntOrdreTrait {

    /**
     * Ordre.
     *
     * @var int
     */
    private $ordre;

    /**
     * Get the ordre.
     *
     * @return int Returns the ordre.
     */
    public function getOrdre() {
        return $this->ordre;
    }

    /**
     * Set the ordre.
     *
     * @param int $ordre The ordre.
     */
    public function setOrdre($ordre) {
        $this->ordre = $ordre;
        return $this;
    }
}
