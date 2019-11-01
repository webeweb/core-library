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
 * Code article droit fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticleDroitFixeTrait {

    /**
     * Code article droit fixe.
     *
     * @var string
     */
    private $codeArticleDroitFixe;

    /**
     * Get the code article droit fixe.
     *
     * @return string Returns the code article droit fixe.
     */
    public function getCodeArticleDroitFixe() {
        return $this->codeArticleDroitFixe;
    }

    /**
     * Set the code article droit fixe.
     *
     * @param string $codeArticleDroitFixe The code article droit fixe.
     */
    public function setCodeArticleDroitFixe($codeArticleDroitFixe) {
        $this->codeArticleDroitFixe = $codeArticleDroitFixe;
        return $this;
    }
}
