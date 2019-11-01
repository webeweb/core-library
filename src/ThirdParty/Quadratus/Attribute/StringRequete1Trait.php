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
 * Requete1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete1Trait {

    /**
     * Requete1.
     *
     * @var string
     */
    private $requete1;

    /**
     * Get the requete1.
     *
     * @return string Returns the requete1.
     */
    public function getRequete1() {
        return $this->requete1;
    }

    /**
     * Set the requete1.
     *
     * @param string $requete1 The requete1.
     */
    public function setRequete1($requete1) {
        $this->requete1 = $requete1;
        return $this;
    }
}
