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
 * Mois cotisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntMoisCotisationTrait {

    /**
     * Mois cotisation.
     *
     * @var int
     */
    private $moisCotisation;

    /**
     * Get the mois cotisation.
     *
     * @return int Returns the mois cotisation.
     */
    public function getMoisCotisation() {
        return $this->moisCotisation;
    }

    /**
     * Set the mois cotisation.
     *
     * @param int $moisCotisation The mois cotisation.
     */
    public function setMoisCotisation($moisCotisation) {
        $this->moisCotisation = $moisCotisation;
        return $this;
    }
}
