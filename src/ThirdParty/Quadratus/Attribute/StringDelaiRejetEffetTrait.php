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
 * Delai rejet effet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDelaiRejetEffetTrait {

    /**
     * Delai rejet effet.
     *
     * @var string
     */
    private $delaiRejetEffet;

    /**
     * Get the delai rejet effet.
     *
     * @return string Returns the delai rejet effet.
     */
    public function getDelaiRejetEffet() {
        return $this->delaiRejetEffet;
    }

    /**
     * Set the delai rejet effet.
     *
     * @param string $delaiRejetEffet The delai rejet effet.
     */
    public function setDelaiRejetEffet($delaiRejetEffet) {
        $this->delaiRejetEffet = $delaiRejetEffet;
        return $this;
    }
}
