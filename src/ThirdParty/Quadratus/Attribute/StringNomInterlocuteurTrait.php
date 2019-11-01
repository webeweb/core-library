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
 * Nom interlocuteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomInterlocuteurTrait {

    /**
     * Nom interlocuteur.
     *
     * @var string
     */
    private $nomInterlocuteur;

    /**
     * Get the nom interlocuteur.
     *
     * @return string Returns the nom interlocuteur.
     */
    public function getNomInterlocuteur() {
        return $this->nomInterlocuteur;
    }

    /**
     * Set the nom interlocuteur.
     *
     * @param string $nomInterlocuteur The nom interlocuteur.
     */
    public function setNomInterlocuteur($nomInterlocuteur) {
        $this->nomInterlocuteur = $nomInterlocuteur;
        return $this;
    }
}
