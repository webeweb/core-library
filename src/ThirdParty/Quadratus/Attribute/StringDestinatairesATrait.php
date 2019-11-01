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
 * Destinataires a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDestinatairesATrait {

    /**
     * Destinataires a.
     *
     * @var string
     */
    private $destinatairesA;

    /**
     * Get the destinataires a.
     *
     * @return string Returns the destinataires a.
     */
    public function getDestinatairesA() {
        return $this->destinatairesA;
    }

    /**
     * Set the destinataires a.
     *
     * @param string $destinatairesA The destinataires a.
     */
    public function setDestinatairesA($destinatairesA) {
        $this->destinatairesA = $destinatairesA;
        return $this;
    }
}
