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
 * Tva cpt a ajouter trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAAjouterTrait {

    /**
     * Tva cpt a ajouter.
     *
     * @var string
     */
    private $tvaCptAAjouter;

    /**
     * Get the tva cpt a ajouter.
     *
     * @return string Returns the tva cpt a ajouter.
     */
    public function getTvaCptAAjouter() {
        return $this->tvaCptAAjouter;
    }

    /**
     * Set the tva cpt a ajouter.
     *
     * @param string $tvaCptAAjouter The tva cpt a ajouter.
     */
    public function setTvaCptAAjouter($tvaCptAAjouter) {
        $this->tvaCptAAjouter = $tvaCptAAjouter;
        return $this;
    }
}
