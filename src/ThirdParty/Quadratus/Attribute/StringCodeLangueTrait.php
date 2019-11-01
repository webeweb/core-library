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
 * Code langue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLangueTrait {

    /**
     * Code langue.
     *
     * @var string
     */
    private $codeLangue;

    /**
     * Get the code langue.
     *
     * @return string Returns the code langue.
     */
    public function getCodeLangue() {
        return $this->codeLangue;
    }

    /**
     * Set the code langue.
     *
     * @param string $codeLangue The code langue.
     */
    public function setCodeLangue($codeLangue) {
        $this->codeLangue = $codeLangue;
        return $this;
    }
}
