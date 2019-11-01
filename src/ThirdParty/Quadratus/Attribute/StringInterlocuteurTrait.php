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
 * Interlocuteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInterlocuteurTrait {

    /**
     * Interlocuteur.
     *
     * @var string
     */
    private $interlocuteur;

    /**
     * Get the interlocuteur.
     *
     * @return string Returns the interlocuteur.
     */
    public function getInterlocuteur() {
        return $this->interlocuteur;
    }

    /**
     * Set the interlocuteur.
     *
     * @param string $interlocuteur The interlocuteur.
     */
    public function setInterlocuteur($interlocuteur) {
        $this->interlocuteur = $interlocuteur;
        return $this;
    }
}
