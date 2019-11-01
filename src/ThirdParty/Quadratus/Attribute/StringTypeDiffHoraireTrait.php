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
 * Type diff horaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDiffHoraireTrait {

    /**
     * Type diff horaire.
     *
     * @var string
     */
    private $typeDiffHoraire;

    /**
     * Get the type diff horaire.
     *
     * @return string Returns the type diff horaire.
     */
    public function getTypeDiffHoraire() {
        return $this->typeDiffHoraire;
    }

    /**
     * Set the type diff horaire.
     *
     * @param string $typeDiffHoraire The type diff horaire.
     */
    public function setTypeDiffHoraire($typeDiffHoraire) {
        $this->typeDiffHoraire = $typeDiffHoraire;
        return $this;
    }
}
