<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Scraping\Cleaner;

/**
 * preg_replace scraping cleaner.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Scraping\Cleaner
 */
class PregReplaceScrapingCleaner {

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
     * {@inheritdoc}
     */
    public function clean($value) {
        if (null === $value || false === is_string($value)) {
            return null;
        }
        return preg_replace($this->getPattern(), $this->getReplacement(), $value);
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
     * @return SrapingPregReplaceCleaner Returns this preg_replace cleaner.
     */
    protected function setPattern($pattern) {
        $this->pattern = $pattern;
        return $this;
    }

    /**
     * Set the replacement.
     *
     * @param string $replacement The replacement.
     * @return SrapingPregReplaceCleaner Returns this preg_replace cleaner.
     */
    protected function setReplacement($replacement) {
        $this->replacement = $replacement;
        return $this;
    }
}
