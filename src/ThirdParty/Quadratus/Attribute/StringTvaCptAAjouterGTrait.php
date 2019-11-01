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
 * Tva cpt a ajouter g trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAAjouterGTrait {

    /**
     * Tva cpt a ajouter g.
     *
     * @var string
     */
    private $tvaCptAAjouterG;

    /**
     * Get the tva cpt a ajouter g.
     *
     * @return string Returns the tva cpt a ajouter g.
     */
    public function getTvaCptAAjouterG() {
        return $this->tvaCptAAjouterG;
    }

    /**
     * Set the tva cpt a ajouter g.
     *
     * @param string $tvaCptAAjouterG The tva cpt a ajouter g.
     */
    public function setTvaCptAAjouterG($tvaCptAAjouterG) {
        $this->tvaCptAAjouterG = $tvaCptAAjouterG;
        return $this;
    }
}
