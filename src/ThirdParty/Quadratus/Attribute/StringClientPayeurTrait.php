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
 * Client payeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClientPayeurTrait {

    /**
     * Client payeur.
     *
     * @var string
     */
    private $clientPayeur;

    /**
     * Get the client payeur.
     *
     * @return string Returns the client payeur.
     */
    public function getClientPayeur() {
        return $this->clientPayeur;
    }

    /**
     * Set the client payeur.
     *
     * @param string $clientPayeur The client payeur.
     */
    public function setClientPayeur($clientPayeur) {
        $this->clientPayeur = $clientPayeur;
        return $this;
    }
}
