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
 * Facturation cotisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFacturationCotisationTrait {

    /**
     * Facturation cotisation.
     *
     * @var bool
     */
    private $facturationCotisation;

    /**
     * Get the facturation cotisation.
     *
     * @return bool Returns the facturation cotisation.
     */
    public function getFacturationCotisation() {
        return $this->facturationCotisation;
    }

    /**
     * Set the facturation cotisation.
     *
     * @param bool $facturationCotisation The facturation cotisation.
     */
    public function setFacturationCotisation($facturationCotisation) {
        $this->facturationCotisation = $facturationCotisation;
        return $this;
    }
}
