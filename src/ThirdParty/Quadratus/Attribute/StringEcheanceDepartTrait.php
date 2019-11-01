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
 * Echeance depart trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEcheanceDepartTrait {

    /**
     * Echeance depart.
     *
     * @var string
     */
    private $echeanceDepart;

    /**
     * Get the echeance depart.
     *
     * @return string Returns the echeance depart.
     */
    public function getEcheanceDepart() {
        return $this->echeanceDepart;
    }

    /**
     * Set the echeance depart.
     *
     * @param string $echeanceDepart The echeance depart.
     */
    public function setEcheanceDepart($echeanceDepart) {
        $this->echeanceDepart = $echeanceDepart;
        return $this;
    }
}
