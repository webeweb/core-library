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
 * Code barre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeBarreTrait {

    /**
     * Code barre.
     *
     * @var string
     */
    private $codeBarre;

    /**
     * Get the code barre.
     *
     * @return string Returns the code barre.
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Set the code barre.
     *
     * @param string $codeBarre The code barre.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }
}
