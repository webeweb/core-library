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
 * Transporteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTransporteurTrait {

    /**
     * Transporteur.
     *
     * @var string
     */
    private $transporteur;

    /**
     * Get the transporteur.
     *
     * @return string Returns the transporteur.
     */
    public function getTransporteur() {
        return $this->transporteur;
    }

    /**
     * Set the transporteur.
     *
     * @param string $transporteur The transporteur.
     */
    public function setTransporteur($transporteur) {
        $this->transporteur = $transporteur;
        return $this;
    }
}
