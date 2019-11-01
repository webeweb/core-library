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
 * Num interlocuteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumInterlocuteurTrait {

    /**
     * Num interlocuteur.
     *
     * @var int
     */
    private $numInterlocuteur;

    /**
     * Get the num interlocuteur.
     *
     * @return int Returns the num interlocuteur.
     */
    public function getNumInterlocuteur() {
        return $this->numInterlocuteur;
    }

    /**
     * Set the num interlocuteur.
     *
     * @param int $numInterlocuteur The num interlocuteur.
     */
    public function setNumInterlocuteur($numInterlocuteur) {
        $this->numInterlocuteur = $numInterlocuteur;
        return $this;
    }
}
