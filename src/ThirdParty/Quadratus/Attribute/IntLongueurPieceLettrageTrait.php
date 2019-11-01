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
 * Longueur piece lettrage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLongueurPieceLettrageTrait {

    /**
     * Longueur piece lettrage.
     *
     * @var int
     */
    private $longueurPieceLettrage;

    /**
     * Get the longueur piece lettrage.
     *
     * @return int Returns the longueur piece lettrage.
     */
    public function getLongueurPieceLettrage() {
        return $this->longueurPieceLettrage;
    }

    /**
     * Set the longueur piece lettrage.
     *
     * @param int $longueurPieceLettrage The longueur piece lettrage.
     */
    public function setLongueurPieceLettrage($longueurPieceLettrage) {
        $this->longueurPieceLettrage = $longueurPieceLettrage;
        return $this;
    }
}
