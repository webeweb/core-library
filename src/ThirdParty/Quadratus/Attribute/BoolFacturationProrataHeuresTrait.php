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
 * Facturation prorata heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFacturationProrataHeuresTrait {

    /**
     * Facturation prorata heures.
     *
     * @var bool
     */
    private $facturationProrataHeures;

    /**
     * Get the facturation prorata heures.
     *
     * @return bool Returns the facturation prorata heures.
     */
    public function getFacturationProrataHeures() {
        return $this->facturationProrataHeures;
    }

    /**
     * Set the facturation prorata heures.
     *
     * @param bool $facturationProrataHeures The facturation prorata heures.
     */
    public function setFacturationProrataHeures($facturationProrataHeures) {
        $this->facturationProrataHeures = $facturationProrataHeures;
        return $this;
    }
}
