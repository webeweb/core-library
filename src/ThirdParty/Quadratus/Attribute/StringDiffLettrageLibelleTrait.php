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
 * Diff lettrage libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDiffLettrageLibelleTrait {

    /**
     * Diff lettrage libelle.
     *
     * @var string
     */
    private $diffLettrageLibelle;

    /**
     * Get the diff lettrage libelle.
     *
     * @return string Returns the diff lettrage libelle.
     */
    public function getDiffLettrageLibelle() {
        return $this->diffLettrageLibelle;
    }

    /**
     * Set the diff lettrage libelle.
     *
     * @param string $diffLettrageLibelle The diff lettrage libelle.
     */
    public function setDiffLettrageLibelle($diffLettrageLibelle) {
        $this->diffLettrageLibelle = $diffLettrageLibelle;
        return $this;
    }
}
