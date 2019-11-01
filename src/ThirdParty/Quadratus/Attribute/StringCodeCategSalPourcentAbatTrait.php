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
 * Code categ sal pourcent abat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCategSalPourcentAbatTrait {

    /**
     * Code categ sal pourcent abat.
     *
     * @var string
     */
    private $codeCategSalPourcentAbat;

    /**
     * Get the code categ sal pourcent abat.
     *
     * @return string Returns the code categ sal pourcent abat.
     */
    public function getCodeCategSalPourcentAbat() {
        return $this->codeCategSalPourcentAbat;
    }

    /**
     * Set the code categ sal pourcent abat.
     *
     * @param string $codeCategSalPourcentAbat The code categ sal pourcent abat.
     */
    public function setCodeCategSalPourcentAbat($codeCategSalPourcentAbat) {
        $this->codeCategSalPourcentAbat = $codeCategSalPourcentAbat;
        return $this;
    }
}
