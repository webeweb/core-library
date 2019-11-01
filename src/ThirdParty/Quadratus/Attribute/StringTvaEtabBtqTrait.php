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
 * Tva etab btq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaEtabBtqTrait {

    /**
     * Tva etab btq.
     *
     * @var string
     */
    private $tvaEtabBtq;

    /**
     * Get the tva etab btq.
     *
     * @return string Returns the tva etab btq.
     */
    public function getTvaEtabBtq() {
        return $this->tvaEtabBtq;
    }

    /**
     * Set the tva etab btq.
     *
     * @param string $tvaEtabBtq The tva etab btq.
     */
    public function setTvaEtabBtq($tvaEtabBtq) {
        $this->tvaEtabBtq = $tvaEtabBtq;
        return $this;
    }
}
