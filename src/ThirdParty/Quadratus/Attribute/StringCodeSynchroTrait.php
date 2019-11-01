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
 * Code synchro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSynchroTrait {

    /**
     * Code synchro.
     *
     * @var string
     */
    private $codeSynchro;

    /**
     * Get the code synchro.
     *
     * @return string Returns the code synchro.
     */
    public function getCodeSynchro() {
        return $this->codeSynchro;
    }

    /**
     * Set the code synchro.
     *
     * @param string $codeSynchro The code synchro.
     */
    public function setCodeSynchro($codeSynchro) {
        $this->codeSynchro = $codeSynchro;
        return $this;
    }
}
