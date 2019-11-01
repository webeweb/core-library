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
 * Retraite arrco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteArrcoTrait {

    /**
     * Retraite arrco.
     *
     * @var string
     */
    private $retraiteArrco;

    /**
     * Get the retraite arrco.
     *
     * @return string Returns the retraite arrco.
     */
    public function getRetraiteArrco() {
        return $this->retraiteArrco;
    }

    /**
     * Set the retraite arrco.
     *
     * @param string $retraiteArrco The retraite arrco.
     */
    public function setRetraiteArrco($retraiteArrco) {
        $this->retraiteArrco = $retraiteArrco;
        return $this;
    }
}
