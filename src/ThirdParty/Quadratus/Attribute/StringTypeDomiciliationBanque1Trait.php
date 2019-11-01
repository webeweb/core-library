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
 * Type domiciliation banque1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDomiciliationBanque1Trait {

    /**
     * Type domiciliation banque1.
     *
     * @var string
     */
    private $typeDomiciliationBanque1;

    /**
     * Get the type domiciliation banque1.
     *
     * @return string Returns the type domiciliation banque1.
     */
    public function getTypeDomiciliationBanque1() {
        return $this->typeDomiciliationBanque1;
    }

    /**
     * Set the type domiciliation banque1.
     *
     * @param string $typeDomiciliationBanque1 The type domiciliation banque1.
     */
    public function setTypeDomiciliationBanque1($typeDomiciliationBanque1) {
        $this->typeDomiciliationBanque1 = $typeDomiciliationBanque1;
        return $this;
    }
}
