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
 * Requete7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRequete7Trait {

    /**
     * Requete7.
     *
     * @var string
     */
    private $requete7;

    /**
     * Get the requete7.
     *
     * @return string Returns the requete7.
     */
    public function getRequete7() {
        return $this->requete7;
    }

    /**
     * Set the requete7.
     *
     * @param string $requete7 The requete7.
     */
    public function setRequete7($requete7) {
        $this->requete7 = $requete7;
        return $this;
    }
}
