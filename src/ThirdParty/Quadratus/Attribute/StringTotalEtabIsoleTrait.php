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
 * Total etab isole trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTotalEtabIsoleTrait {

    /**
     * Total etab isole.
     *
     * @var string
     */
    private $totalEtabIsole;

    /**
     * Get the total etab isole.
     *
     * @return string Returns the total etab isole.
     */
    public function getTotalEtabIsole() {
        return $this->totalEtabIsole;
    }

    /**
     * Set the total etab isole.
     *
     * @param string $totalEtabIsole The total etab isole.
     */
    public function setTotalEtabIsole($totalEtabIsole) {
        $this->totalEtabIsole = $totalEtabIsole;
        return $this;
    }
}
