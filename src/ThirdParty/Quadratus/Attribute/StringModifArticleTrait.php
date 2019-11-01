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
 * Modif article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifArticleTrait {

    /**
     * Modif article.
     *
     * @var string
     */
    private $modifArticle;

    /**
     * Get the modif article.
     *
     * @return string Returns the modif article.
     */
    public function getModifArticle() {
        return $this->modifArticle;
    }

    /**
     * Set the modif article.
     *
     * @param string $modifArticle The modif article.
     */
    public function setModifArticle($modifArticle) {
        $this->modifArticle = $modifArticle;
        return $this;
    }
}
