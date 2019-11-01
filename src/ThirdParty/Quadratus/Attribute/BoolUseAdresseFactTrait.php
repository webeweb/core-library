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
 * Use adresse fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUseAdresseFactTrait {

    /**
     * Use adresse fact.
     *
     * @var bool
     */
    private $useAdresseFact;

    /**
     * Get the use adresse fact.
     *
     * @return bool Returns the use adresse fact.
     */
    public function getUseAdresseFact() {
        return $this->useAdresseFact;
    }

    /**
     * Set the use adresse fact.
     *
     * @param bool $useAdresseFact The use adresse fact.
     */
    public function setUseAdresseFact($useAdresseFact) {
        $this->useAdresseFact = $useAdresseFact;
        return $this;
    }
}
