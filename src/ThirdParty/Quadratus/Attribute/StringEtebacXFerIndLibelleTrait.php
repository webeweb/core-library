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
 * Etebac x fer ind libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtebacXFerIndLibelleTrait {

    /**
     * Etebac x fer ind libelle.
     *
     * @var string
     */
    private $etebacXFerIndLibelle;

    /**
     * Get the etebac x fer ind libelle.
     *
     * @return string Returns the etebac x fer ind libelle.
     */
    public function getEtebacXFerIndLibelle() {
        return $this->etebacXFerIndLibelle;
    }

    /**
     * Set the etebac x fer ind libelle.
     *
     * @param string $etebacXFerIndLibelle The etebac x fer ind libelle.
     */
    public function setEtebacXFerIndLibelle($etebacXFerIndLibelle) {
        $this->etebacXFerIndLibelle = $etebacXFerIndLibelle;
        return $this;
    }
}
