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
 * Etbl code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblCodePostalTrait {

    /**
     * Etbl code postal.
     *
     * @var string
     */
    private $etblCodePostal;

    /**
     * Get the etbl code postal.
     *
     * @return string Returns the etbl code postal.
     */
    public function getEtblCodePostal() {
        return $this->etblCodePostal;
    }

    /**
     * Set the etbl code postal.
     *
     * @param string $etblCodePostal The etbl code postal.
     */
    public function setEtblCodePostal($etblCodePostal) {
        $this->etblCodePostal = $etblCodePostal;
        return $this;
    }
}
