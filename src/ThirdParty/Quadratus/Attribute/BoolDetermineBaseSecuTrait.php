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
 * Determine base secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetermineBaseSecuTrait {

    /**
     * Determine base secu.
     *
     * @var bool
     */
    private $determineBaseSecu;

    /**
     * Get the determine base secu.
     *
     * @return bool Returns the determine base secu.
     */
    public function getDetermineBaseSecu() {
        return $this->determineBaseSecu;
    }

    /**
     * Set the determine base secu.
     *
     * @param bool $determineBaseSecu The determine base secu.
     */
    public function setDetermineBaseSecu($determineBaseSecu) {
        $this->determineBaseSecu = $determineBaseSecu;
        return $this;
    }
}
