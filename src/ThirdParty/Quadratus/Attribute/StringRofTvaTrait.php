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
 * Rof tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofTvaTrait {

    /**
     * Rof tva.
     *
     * @var string
     */
    private $rofTva;

    /**
     * Get the rof tva.
     *
     * @return string Returns the rof tva.
     */
    public function getRofTva() {
        return $this->rofTva;
    }

    /**
     * Set the rof tva.
     *
     * @param string $rofTva The rof tva.
     */
    public function setRofTva($rofTva) {
        $this->rofTva = $rofTva;
        return $this;
    }
}
