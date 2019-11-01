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
 * Requete4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete4Trait {

    /**
     * Requete4.
     *
     * @var string
     */
    private $requete4;

    /**
     * Get the requete4.
     *
     * @return string Returns the requete4.
     */
    public function getRequete4() {
        return $this->requete4;
    }

    /**
     * Set the requete4.
     *
     * @param string $requete4 The requete4.
     */
    public function setRequete4($requete4) {
        $this->requete4 = $requete4;
        return $this;
    }
}
