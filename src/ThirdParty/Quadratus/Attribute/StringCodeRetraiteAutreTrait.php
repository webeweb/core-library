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
 * Code retraite autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRetraiteAutreTrait {

    /**
     * Code retraite autre.
     *
     * @var string
     */
    private $codeRetraiteAutre;

    /**
     * Get the code retraite autre.
     *
     * @return string Returns the code retraite autre.
     */
    public function getCodeRetraiteAutre() {
        return $this->codeRetraiteAutre;
    }

    /**
     * Set the code retraite autre.
     *
     * @param string $codeRetraiteAutre The code retraite autre.
     */
    public function setCodeRetraiteAutre($codeRetraiteAutre) {
        $this->codeRetraiteAutre = $codeRetraiteAutre;
        return $this;
    }
}
