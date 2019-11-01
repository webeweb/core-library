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
 * Code chantier rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeChantierRemplTrait {

    /**
     * Code chantier rempl.
     *
     * @var string
     */
    private $codeChantierRempl;

    /**
     * Get the code chantier rempl.
     *
     * @return string Returns the code chantier rempl.
     */
    public function getCodeChantierRempl() {
        return $this->codeChantierRempl;
    }

    /**
     * Set the code chantier rempl.
     *
     * @param string $codeChantierRempl The code chantier rempl.
     */
    public function setCodeChantierRempl($codeChantierRempl) {
        $this->codeChantierRempl = $codeChantierRempl;
        return $this;
    }
}
