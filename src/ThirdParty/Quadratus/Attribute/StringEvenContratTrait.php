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
 * Even contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEvenContratTrait {

    /**
     * Even contrat.
     *
     * @var string
     */
    private $evenContrat;

    /**
     * Get the even contrat.
     *
     * @return string Returns the even contrat.
     */
    public function getEvenContrat() {
        return $this->evenContrat;
    }

    /**
     * Set the even contrat.
     *
     * @param string $evenContrat The even contrat.
     */
    public function setEvenContrat($evenContrat) {
        $this->evenContrat = $evenContrat;
        return $this;
    }
}
