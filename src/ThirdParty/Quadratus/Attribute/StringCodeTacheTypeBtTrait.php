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
 * Code tache type bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTacheTypeBtTrait {

    /**
     * Code tache type bt.
     *
     * @var string
     */
    private $codeTacheTypeBt;

    /**
     * Get the code tache type bt.
     *
     * @return string Returns the code tache type bt.
     */
    public function getCodeTacheTypeBt() {
        return $this->codeTacheTypeBt;
    }

    /**
     * Set the code tache type bt.
     *
     * @param string $codeTacheTypeBt The code tache type bt.
     */
    public function setCodeTacheTypeBt($codeTacheTypeBt) {
        $this->codeTacheTypeBt = $codeTacheTypeBt;
        return $this;
    }
}
