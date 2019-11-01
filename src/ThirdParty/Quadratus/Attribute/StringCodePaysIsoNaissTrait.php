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
 * Code pays iso naiss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysIsoNaissTrait {

    /**
     * Code pays iso naiss.
     *
     * @var string
     */
    private $codePaysIsoNaiss;

    /**
     * Get the code pays iso naiss.
     *
     * @return string Returns the code pays iso naiss.
     */
    public function getCodePaysIsoNaiss() {
        return $this->codePaysIsoNaiss;
    }

    /**
     * Set the code pays iso naiss.
     *
     * @param string $codePaysIsoNaiss The code pays iso naiss.
     */
    public function setCodePaysIsoNaiss($codePaysIsoNaiss) {
        $this->codePaysIsoNaiss = $codePaysIsoNaiss;
        return $this;
    }
}
