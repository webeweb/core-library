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
 * Que premiere annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQuePremiereAnneeTrait {

    /**
     * Que premiere annee.
     *
     * @var bool
     */
    private $quePremiereAnnee;

    /**
     * Get the que premiere annee.
     *
     * @return bool Returns the que premiere annee.
     */
    public function getQuePremiereAnnee() {
        return $this->quePremiereAnnee;
    }

    /**
     * Set the que premiere annee.
     *
     * @param bool $quePremiereAnnee The que premiere annee.
     */
    public function setQuePremiereAnnee($quePremiereAnnee) {
        $this->quePremiereAnnee = $quePremiereAnnee;
        return $this;
    }
}
