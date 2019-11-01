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
 * Code article frais fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticleFraisFixeTrait {

    /**
     * Code article frais fixe.
     *
     * @var string
     */
    private $codeArticleFraisFixe;

    /**
     * Get the code article frais fixe.
     *
     * @return string Returns the code article frais fixe.
     */
    public function getCodeArticleFraisFixe() {
        return $this->codeArticleFraisFixe;
    }

    /**
     * Set the code article frais fixe.
     *
     * @param string $codeArticleFraisFixe The code article frais fixe.
     */
    public function setCodeArticleFraisFixe($codeArticleFraisFixe) {
        $this->codeArticleFraisFixe = $codeArticleFraisFixe;
        return $this;
    }
}
