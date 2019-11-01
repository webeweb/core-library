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
 * Revis voir solde ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRevisVoirSoldeExTrait {

    /**
     * Revis voir solde ex.
     *
     * @var bool
     */
    private $revisVoirSoldeEx;

    /**
     * Get the revis voir solde ex.
     *
     * @return bool Returns the revis voir solde ex.
     */
    public function getRevisVoirSoldeEx() {
        return $this->revisVoirSoldeEx;
    }

    /**
     * Set the revis voir solde ex.
     *
     * @param bool $revisVoirSoldeEx The revis voir solde ex.
     */
    public function setRevisVoirSoldeEx($revisVoirSoldeEx) {
        $this->revisVoirSoldeEx = $revisVoirSoldeEx;
        return $this;
    }
}
