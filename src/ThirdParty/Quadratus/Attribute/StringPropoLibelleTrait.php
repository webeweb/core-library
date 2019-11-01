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
 * Propo libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPropoLibelleTrait {

    /**
     * Propo libelle.
     *
     * @var string
     */
    private $propoLibelle;

    /**
     * Get the propo libelle.
     *
     * @return string Returns the propo libelle.
     */
    public function getPropoLibelle() {
        return $this->propoLibelle;
    }

    /**
     * Set the propo libelle.
     *
     * @param string $propoLibelle The propo libelle.
     */
    public function setPropoLibelle($propoLibelle) {
        $this->propoLibelle = $propoLibelle;
        return $this;
    }
}
