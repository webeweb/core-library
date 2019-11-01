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
 * Qws chemin logo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQwsCheminLogoTrait {

    /**
     * Qws chemin logo.
     *
     * @var string
     */
    private $qwsCheminLogo;

    /**
     * Get the qws chemin logo.
     *
     * @return string Returns the qws chemin logo.
     */
    public function getQwsCheminLogo() {
        return $this->qwsCheminLogo;
    }

    /**
     * Set the qws chemin logo.
     *
     * @param string $qwsCheminLogo The qws chemin logo.
     */
    public function setQwsCheminLogo($qwsCheminLogo) {
        $this->qwsCheminLogo = $qwsCheminLogo;
        return $this;
    }
}
