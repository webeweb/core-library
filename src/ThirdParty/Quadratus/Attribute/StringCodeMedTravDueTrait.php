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
 * Code med trav due trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMedTravDueTrait {

    /**
     * Code med trav due.
     *
     * @var string
     */
    private $codeMedTravDue;

    /**
     * Get the code med trav due.
     *
     * @return string Returns the code med trav due.
     */
    public function getCodeMedTravDue() {
        return $this->codeMedTravDue;
    }

    /**
     * Set the code med trav due.
     *
     * @param string $codeMedTravDue The code med trav due.
     */
    public function setCodeMedTravDue($codeMedTravDue) {
        $this->codeMedTravDue = $codeMedTravDue;
        return $this;
    }
}
