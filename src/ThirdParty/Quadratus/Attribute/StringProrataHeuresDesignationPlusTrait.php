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
 * Prorata heures designation plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProrataHeuresDesignationPlusTrait {

    /**
     * Prorata heures designation plus.
     *
     * @var string
     */
    private $prorataHeuresDesignationPlus;

    /**
     * Get the prorata heures designation plus.
     *
     * @return string Returns the prorata heures designation plus.
     */
    public function getProrataHeuresDesignationPlus() {
        return $this->prorataHeuresDesignationPlus;
    }

    /**
     * Set the prorata heures designation plus.
     *
     * @param string $prorataHeuresDesignationPlus The prorata heures designation plus.
     */
    public function setProrataHeuresDesignationPlus($prorataHeuresDesignationPlus) {
        $this->prorataHeuresDesignationPlus = $prorataHeuresDesignationPlus;
        return $this;
    }
}
