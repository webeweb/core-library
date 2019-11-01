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
 * Code tache type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTacheTypeTrait {

    /**
     * Code tache type.
     *
     * @var string
     */
    private $codeTacheType;

    /**
     * Get the code tache type.
     *
     * @return string Returns the code tache type.
     */
    public function getCodeTacheType() {
        return $this->codeTacheType;
    }

    /**
     * Set the code tache type.
     *
     * @param string $codeTacheType The code tache type.
     */
    public function setCodeTacheType($codeTacheType) {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }
}
