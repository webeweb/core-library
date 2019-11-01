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
 * Code tache bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTacheBtTrait {

    /**
     * Code tache bt.
     *
     * @var string
     */
    private $codeTacheBt;

    /**
     * Get the code tache bt.
     *
     * @return string Returns the code tache bt.
     */
    public function getCodeTacheBt() {
        return $this->codeTacheBt;
    }

    /**
     * Set the code tache bt.
     *
     * @param string $codeTacheBt The code tache bt.
     */
    public function setCodeTacheBt($codeTacheBt) {
        $this->codeTacheBt = $codeTacheBt;
        return $this;
    }
}
