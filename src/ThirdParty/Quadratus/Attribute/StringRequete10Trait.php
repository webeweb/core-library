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
 * Requete10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete10Trait {

    /**
     * Requete10.
     *
     * @var string
     */
    private $requete10;

    /**
     * Get the requete10.
     *
     * @return string Returns the requete10.
     */
    public function getRequete10() {
        return $this->requete10;
    }

    /**
     * Set the requete10.
     *
     * @param string $requete10 The requete10.
     */
    public function setRequete10($requete10) {
        $this->requete10 = $requete10;
        return $this;
    }
}
