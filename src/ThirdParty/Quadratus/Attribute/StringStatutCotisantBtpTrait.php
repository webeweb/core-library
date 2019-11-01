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
 * Statut cotisant btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringStatutCotisantBtpTrait {

    /**
     * Statut cotisant btp.
     *
     * @var string
     */
    private $statutCotisantBtp;

    /**
     * Get the statut cotisant btp.
     *
     * @return string Returns the statut cotisant btp.
     */
    public function getStatutCotisantBtp() {
        return $this->statutCotisantBtp;
    }

    /**
     * Set the statut cotisant btp.
     *
     * @param string $statutCotisantBtp The statut cotisant btp.
     */
    public function setStatutCotisantBtp($statutCotisantBtp) {
        $this->statutCotisantBtp = $statutCotisantBtp;
        return $this;
    }
}
