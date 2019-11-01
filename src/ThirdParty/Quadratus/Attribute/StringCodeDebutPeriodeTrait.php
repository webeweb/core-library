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
 * Code debut periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDebutPeriodeTrait {

    /**
     * Code debut periode.
     *
     * @var string
     */
    private $codeDebutPeriode;

    /**
     * Get the code debut periode.
     *
     * @return string Returns the code debut periode.
     */
    public function getCodeDebutPeriode() {
        return $this->codeDebutPeriode;
    }

    /**
     * Set the code debut periode.
     *
     * @param string $codeDebutPeriode The code debut periode.
     */
    public function setCodeDebutPeriode($codeDebutPeriode) {
        $this->codeDebutPeriode = $codeDebutPeriode;
        return $this;
    }
}
