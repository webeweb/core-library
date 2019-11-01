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
 * Etab confidentialite qp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtabConfidentialiteQpTrait {

    /**
     * Etab confidentialite qp.
     *
     * @var string
     */
    private $etabConfidentialiteQp;

    /**
     * Get the etab confidentialite qp.
     *
     * @return string Returns the etab confidentialite qp.
     */
    public function getEtabConfidentialiteQp() {
        return $this->etabConfidentialiteQp;
    }

    /**
     * Set the etab confidentialite qp.
     *
     * @param string $etabConfidentialiteQp The etab confidentialite qp.
     */
    public function setEtabConfidentialiteQp($etabConfidentialiteQp) {
        $this->etabConfidentialiteQp = $etabConfidentialiteQp;
        return $this;
    }
}
