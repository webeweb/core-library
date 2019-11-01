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
 * Req demandeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReqDemandeurTrait {

    /**
     * Req demandeur.
     *
     * @var string
     */
    private $reqDemandeur;

    /**
     * Get the req demandeur.
     *
     * @return string Returns the req demandeur.
     */
    public function getReqDemandeur() {
        return $this->reqDemandeur;
    }

    /**
     * Set the req demandeur.
     *
     * @param string $reqDemandeur The req demandeur.
     */
    public function setReqDemandeur($reqDemandeur) {
        $this->reqDemandeur = $reqDemandeur;
        return $this;
    }
}
