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
 * Requete11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete11Trait {

    /**
     * Requete11.
     *
     * @var string
     */
    private $requete11;

    /**
     * Get the requete11.
     *
     * @return string Returns the requete11.
     */
    public function getRequete11() {
        return $this->requete11;
    }

    /**
     * Set the requete11.
     *
     * @param string $requete11 The requete11.
     */
    public function setRequete11($requete11) {
        $this->requete11 = $requete11;
        return $this;
    }
}
