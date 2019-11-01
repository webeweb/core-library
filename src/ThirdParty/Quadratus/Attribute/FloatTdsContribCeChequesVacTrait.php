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
 * Tds contrib ce cheques vac trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsContribCeChequesVacTrait {

    /**
     * Tds contrib ce cheques vac.
     *
     * @var float
     */
    private $tdsContribCeChequesVac;

    /**
     * Get the tds contrib ce cheques vac.
     *
     * @return float Returns the tds contrib ce cheques vac.
     */
    public function getTdsContribCeChequesVac() {
        return $this->tdsContribCeChequesVac;
    }

    /**
     * Set the tds contrib ce cheques vac.
     *
     * @param float $tdsContribCeChequesVac The tds contrib ce cheques vac.
     */
    public function setTdsContribCeChequesVac($tdsContribCeChequesVac) {
        $this->tdsContribCeChequesVac = $tdsContribCeChequesVac;
        return $this;
    }
}
