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
 * Code chantier ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeChantierLigneTrait {

    /**
     * Code chantier ligne.
     *
     * @var string
     */
    private $codeChantierLigne;

    /**
     * Get the code chantier ligne.
     *
     * @return string Returns the code chantier ligne.
     */
    public function getCodeChantierLigne() {
        return $this->codeChantierLigne;
    }

    /**
     * Set the code chantier ligne.
     *
     * @param string $codeChantierLigne The code chantier ligne.
     */
    public function setCodeChantierLigne($codeChantierLigne) {
        $this->codeChantierLigne = $codeChantierLigne;
        return $this;
    }
}
