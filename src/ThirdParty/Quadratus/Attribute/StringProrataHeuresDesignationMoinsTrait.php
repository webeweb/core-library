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
 * Prorata heures designation moins trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProrataHeuresDesignationMoinsTrait {

    /**
     * Prorata heures designation moins.
     *
     * @var string
     */
    private $prorataHeuresDesignationMoins;

    /**
     * Get the prorata heures designation moins.
     *
     * @return string Returns the prorata heures designation moins.
     */
    public function getProrataHeuresDesignationMoins() {
        return $this->prorataHeuresDesignationMoins;
    }

    /**
     * Set the prorata heures designation moins.
     *
     * @param string $prorataHeuresDesignationMoins The prorata heures designation moins.
     */
    public function setProrataHeuresDesignationMoins($prorataHeuresDesignationMoins) {
        $this->prorataHeuresDesignationMoins = $prorataHeuresDesignationMoins;
        return $this;
    }
}
