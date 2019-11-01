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
 * Rof is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofIsTrait {

    /**
     * Rof is.
     *
     * @var string
     */
    private $rofIs;

    /**
     * Get the rof is.
     *
     * @return string Returns the rof is.
     */
    public function getRofIs() {
        return $this->rofIs;
    }

    /**
     * Set the rof is.
     *
     * @param string $rofIs The rof is.
     */
    public function setRofIs($rofIs) {
        $this->rofIs = $rofIs;
        return $this;
    }
}
