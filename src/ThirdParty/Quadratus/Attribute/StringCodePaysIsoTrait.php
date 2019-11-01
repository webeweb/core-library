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
 * Code pays iso trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysIsoTrait {

    /**
     * Code pays iso.
     *
     * @var string
     */
    private $codePaysIso;

    /**
     * Get the code pays iso.
     *
     * @return string Returns the code pays iso.
     */
    public function getCodePaysIso() {
        return $this->codePaysIso;
    }

    /**
     * Set the code pays iso.
     *
     * @param string $codePaysIso The code pays iso.
     */
    public function setCodePaysIso($codePaysIso) {
        $this->codePaysIso = $codePaysIso;
        return $this;
    }
}
