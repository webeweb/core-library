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
 * Diff lettrage code libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDiffLettrageCodeLibelleTrait {

    /**
     * Diff lettrage code libelle.
     *
     * @var string
     */
    private $diffLettrageCodeLibelle;

    /**
     * Get the diff lettrage code libelle.
     *
     * @return string Returns the diff lettrage code libelle.
     */
    public function getDiffLettrageCodeLibelle() {
        return $this->diffLettrageCodeLibelle;
    }

    /**
     * Set the diff lettrage code libelle.
     *
     * @param string $diffLettrageCodeLibelle The diff lettrage code libelle.
     */
    public function setDiffLettrageCodeLibelle($diffLettrageCodeLibelle) {
        $this->diffLettrageCodeLibelle = $diffLettrageCodeLibelle;
        return $this;
    }
}
