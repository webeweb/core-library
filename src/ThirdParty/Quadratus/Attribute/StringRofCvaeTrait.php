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
 * Rof cvae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofCvaeTrait {

    /**
     * Rof cvae.
     *
     * @var string
     */
    private $rofCvae;

    /**
     * Get the rof cvae.
     *
     * @return string Returns the rof cvae.
     */
    public function getRofCvae() {
        return $this->rofCvae;
    }

    /**
     * Set the rof cvae.
     *
     * @param string $rofCvae The rof cvae.
     */
    public function setRofCvae($rofCvae) {
        $this->rofCvae = $rofCvae;
        return $this;
    }
}
