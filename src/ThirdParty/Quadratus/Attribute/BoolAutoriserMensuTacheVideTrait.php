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
 * Autoriser mensu tache vide trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoriserMensuTacheVideTrait {

    /**
     * Autoriser mensu tache vide.
     *
     * @var bool
     */
    private $autoriserMensuTacheVide;

    /**
     * Get the autoriser mensu tache vide.
     *
     * @return bool Returns the autoriser mensu tache vide.
     */
    public function getAutoriserMensuTacheVide() {
        return $this->autoriserMensuTacheVide;
    }

    /**
     * Set the autoriser mensu tache vide.
     *
     * @param bool $autoriserMensuTacheVide The autoriser mensu tache vide.
     */
    public function setAutoriserMensuTacheVide($autoriserMensuTacheVide) {
        $this->autoriserMensuTacheVide = $autoriserMensuTacheVide;
        return $this;
    }
}
