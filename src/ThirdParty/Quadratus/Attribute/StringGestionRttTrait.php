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
 * Gestion rtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGestionRttTrait {

    /**
     * Gestion rtt.
     *
     * @var string
     */
    private $gestionRtt;

    /**
     * Get the gestion rtt.
     *
     * @return string Returns the gestion rtt.
     */
    public function getGestionRtt() {
        return $this->gestionRtt;
    }

    /**
     * Set the gestion rtt.
     *
     * @param string $gestionRtt The gestion rtt.
     */
    public function setGestionRtt($gestionRtt) {
        $this->gestionRtt = $gestionRtt;
        return $this;
    }
}
