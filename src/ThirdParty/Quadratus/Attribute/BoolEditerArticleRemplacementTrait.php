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
 * Editer article remplacement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditerArticleRemplacementTrait {

    /**
     * Editer article remplacement.
     *
     * @var bool
     */
    private $editerArticleRemplacement;

    /**
     * Get the editer article remplacement.
     *
     * @return bool Returns the editer article remplacement.
     */
    public function getEditerArticleRemplacement() {
        return $this->editerArticleRemplacement;
    }

    /**
     * Set the editer article remplacement.
     *
     * @param bool $editerArticleRemplacement The editer article remplacement.
     */
    public function setEditerArticleRemplacement($editerArticleRemplacement) {
        $this->editerArticleRemplacement = $editerArticleRemplacement;
        return $this;
    }
}
