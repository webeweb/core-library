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
 * Numero adhesion btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroAdhesionBtpTrait {

    /**
     * Numero adhesion btp.
     *
     * @var string
     */
    private $numeroAdhesionBtp;

    /**
     * Get the numero adhesion btp.
     *
     * @return string Returns the numero adhesion btp.
     */
    public function getNumeroAdhesionBtp() {
        return $this->numeroAdhesionBtp;
    }

    /**
     * Set the numero adhesion btp.
     *
     * @param string $numeroAdhesionBtp The numero adhesion btp.
     */
    public function setNumeroAdhesionBtp($numeroAdhesionBtp) {
        $this->numeroAdhesionBtp = $numeroAdhesionBtp;
        return $this;
    }
}
