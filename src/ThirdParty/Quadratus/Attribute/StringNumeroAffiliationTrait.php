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
 * Numero affiliation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroAffiliationTrait {

    /**
     * Numero affiliation.
     *
     * @var string
     */
    private $numeroAffiliation;

    /**
     * Get the numero affiliation.
     *
     * @return string Returns the numero affiliation.
     */
    public function getNumeroAffiliation() {
        return $this->numeroAffiliation;
    }

    /**
     * Set the numero affiliation.
     *
     * @param string $numeroAffiliation The numero affiliation.
     */
    public function setNumeroAffiliation($numeroAffiliation) {
        $this->numeroAffiliation = $numeroAffiliation;
        return $this;
    }
}
