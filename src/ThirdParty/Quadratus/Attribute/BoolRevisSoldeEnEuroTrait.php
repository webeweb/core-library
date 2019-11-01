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
 * Revis solde en euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRevisSoldeEnEuroTrait {

    /**
     * Revis solde en euro.
     *
     * @var bool
     */
    private $revisSoldeEnEuro;

    /**
     * Get the revis solde en euro.
     *
     * @return bool Returns the revis solde en euro.
     */
    public function getRevisSoldeEnEuro() {
        return $this->revisSoldeEnEuro;
    }

    /**
     * Set the revis solde en euro.
     *
     * @param bool $revisSoldeEnEuro The revis solde en euro.
     */
    public function setRevisSoldeEnEuro($revisSoldeEnEuro) {
        $this->revisSoldeEnEuro = $revisSoldeEnEuro;
        return $this;
    }
}
