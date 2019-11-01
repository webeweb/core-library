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
 * Requete6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete6Trait {

    /**
     * Requete6.
     *
     * @var string
     */
    private $requete6;

    /**
     * Get the requete6.
     *
     * @return string Returns the requete6.
     */
    public function getRequete6() {
        return $this->requete6;
    }

    /**
     * Set the requete6.
     *
     * @param string $requete6 The requete6.
     */
    public function setRequete6($requete6) {
        $this->requete6 = $requete6;
        return $this;
    }
}
