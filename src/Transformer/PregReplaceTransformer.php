<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Transformer;

use WBW\Library\Core\Transformer\API\TransformerInterface;

/**
 * preg_replace transformer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Transformer
 */
class PregReplaceTransformer implements TransformerInterface {

    /**
     * Pattern.
     *
     * @var string
     */
    private $pattern;

    /**
     * Replacement.
     *
     * @var string
     */
    private $replacement;

    /**
     * Constructor.
     *
     * @param string $pattern The pattern.
     * @param string $replacement The replacement.
     */
    public function __construct($pattern, $replacement) {
        $this->setPattern($pattern);
        $this->setReplacement($replacement);
    }

    /**
     * Get the pattern.
     *
     * @return string Returns the pattern.
     */
    public function getPattern() {
        return $this->pattern;
    }

    /**
     * Get the replacement.
     *
     * @return string Returns the replacement.
     */
    public function getReplacement() {
        return $this->replacement;
    }

    /**
     * Set the pattern.
     *
     * @param string $pattern The pattern.
     * @return TransformerInterface Returns this preg_replace transformer.
     */
    public function setPattern($pattern) {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * Set the replacement.
     *
     * @param string $replacement The replacement.
     * @return TransformerInterface Returns this preg_replace transformer.
     */
    public function setReplacement($replacement) {
        $this->replacement = $replacement;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($value) {
        if (null === $value || false === is_string($value)) {
            return null;
        }
        return preg_replace($this->getPattern(), $this->getReplacement(), $value);
    }
}
