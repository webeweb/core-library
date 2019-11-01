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
 * Code autre couverture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAutreCouvertureTrait {

    /**
     * Code autre couverture.
     *
     * @var string
     */
    private $codeAutreCouverture;

    /**
     * Get the code autre couverture.
     *
     * @return string Returns the code autre couverture.
     */
    public function getCodeAutreCouverture() {
        return $this->codeAutreCouverture;
    }

    /**
     * Set the code autre couverture.
     *
     * @param string $codeAutreCouverture The code autre couverture.
     */
    public function setCodeAutreCouverture($codeAutreCouverture) {
        $this->codeAutreCouverture = $codeAutreCouverture;
        return $this;
    }
}
