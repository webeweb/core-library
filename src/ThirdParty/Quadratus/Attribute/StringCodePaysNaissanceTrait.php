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
 * Code pays naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysNaissanceTrait {

    /**
     * Code pays naissance.
     *
     * @var string
     */
    private $codePaysNaissance;

    /**
     * Get the code pays naissance.
     *
     * @return string Returns the code pays naissance.
     */
    public function getCodePaysNaissance() {
        return $this->codePaysNaissance;
    }

    /**
     * Set the code pays naissance.
     *
     * @param string $codePaysNaissance The code pays naissance.
     */
    public function setCodePaysNaissance($codePaysNaissance) {
        $this->codePaysNaissance = $codePaysNaissance;
        return $this;
    }
}
