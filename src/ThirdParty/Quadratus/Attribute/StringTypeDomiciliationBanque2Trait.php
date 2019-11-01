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
 * Type domiciliation banque2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDomiciliationBanque2Trait {

    /**
     * Type domiciliation banque2.
     *
     * @var string
     */
    private $typeDomiciliationBanque2;

    /**
     * Get the type domiciliation banque2.
     *
     * @return string Returns the type domiciliation banque2.
     */
    public function getTypeDomiciliationBanque2() {
        return $this->typeDomiciliationBanque2;
    }

    /**
     * Set the type domiciliation banque2.
     *
     * @param string $typeDomiciliationBanque2 The type domiciliation banque2.
     */
    public function setTypeDomiciliationBanque2($typeDomiciliationBanque2) {
        $this->typeDomiciliationBanque2 = $typeDomiciliationBanque2;
        return $this;
    }
}
