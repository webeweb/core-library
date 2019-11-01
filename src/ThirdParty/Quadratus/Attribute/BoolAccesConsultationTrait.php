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
 * Acces consultation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesConsultationTrait {

    /**
     * Acces consultation.
     *
     * @var bool
     */
    private $accesConsultation;

    /**
     * Get the acces consultation.
     *
     * @return bool Returns the acces consultation.
     */
    public function getAccesConsultation() {
        return $this->accesConsultation;
    }

    /**
     * Set the acces consultation.
     *
     * @param bool $accesConsultation The acces consultation.
     */
    public function setAccesConsultation($accesConsultation) {
        $this->accesConsultation = $accesConsultation;
        return $this;
    }
}
