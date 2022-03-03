<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Component;

use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;

/**
 * Abstract navigation node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Component
 * @abstract
 */
abstract class AbstractNavigationNode implements NavigationInterface, AlphabeticalTreeNodeInterface {

    /**
     * Active ?
     *
     * @var bool|null
     */
    private $active;

    /**
     * Enable ?
     *
     * @var bool|null
     */
    private $enable;

    /**
     * Icon.
     *
     * @var string|null
     */
    private $icon;

    /**
     * Id.
     *
     * @var string|null
     */
    private $id;

    /**
     * Index.
     *
     * @var array
     */
    private $index;

    /**
     * Label.
     *
     * @var string|null
     */
    private $label;

    /**
     * Matcher.
     *
     * @var string|null
     */
    private $matcher;

    /**
     * Navigation nodes.
     *
     * @var AbstractNavigationNode[]
     */
    private $nodes;

    /**
     * Parent.
     *
     * @var AbstractNavigationNode|null
     */
    private $parent;

    /**
     * Target.
     *
     * @var string|null
     */
    private $target;

    /**
     * URI.
     *
     * @var string|null
     */
    private $uri;

    /**
     * Visible ?
     *
     * @var bool|null
     */
    private $visible;

    /**
     * Constructor.
     *
     * @param string $label The label.
     * @param string|null $icon The icon.
     * @param string|null $uri The URI.
     * @param string|null $matcher The matcher.
     */
    protected function __construct(string $label, string $icon = null, string $uri = null, ?string $matcher = self::NAVIGATION_MATCHER_URL) {
        $this->setActive(false);
        $this->setEnable(false);
        $this->setIcon($icon);
        $this->setId(uniqid("nav"));
        $this->setIndex([]);
        $this->setLabel($label);
        $this->setMatcher($matcher);
        $this->setNodes([]);
        $this->setParent(null);
        $this->setTarget(null);
        $this->setUri($uri);
        $this->setVisible(true);
    }

    /**
     * Add a navigation node.
     *
     * @param AbstractNavigationNode $node The navigation node.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function addNode(AbstractNavigationNode $node): AbstractNavigationNode {
        $this->index[$node->getId()] = $this->size();
        $this->nodes[]               = $node->setParent($this);
        return $this;
    }

    /**
     * Clear the navigation nodes.
     *
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function clearNodes(): AbstractNavigationNode {
        foreach ($this->getNodes() as $node) {
            $this->removeNode($node);
        }
        return $this;
    }

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * {@inheritDoc}
     */
    public function getAlphabeticalTreeNodeLabel(): string {
        return $this->getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getAlphabeticalTreeNodeParent(): ?AlphabeticalTreeNodeInterface {
        return $this->getParent();
    }

    /**
     * Get the enable.
     *
     * @return bool|null Returns the enable.
     */
    public function getEnable(): ?bool {
        return $this->enable;
    }

    /**
     * Get the first navigation node.
     *
     * @return AbstractNavigationNode|null Returns the first navigation node in case of success, null otherwise.
     */
    public function getFirstNode(): ?AbstractNavigationNode {
        return $this->getNodeAt(0);
    }

    /**
     * Get the icon.
     *
     * @return string|null Returns the icon.
     */
    public function getIcon(): ?string {
        return $this->icon;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Get the last navigation node.
     *
     * @return AbstractNavigationNode|null Returns the last navigation node in case of success, null otherwise.
     */
    public function getLastNode(): ?AbstractNavigationNode {
        return $this->getNodeAt($this->size() - 1);
    }

    /**
     * Get the matcher.
     *
     * @return string|null Returns the matcher.
     */
    public function getMatcher(): ?string {
        return $this->matcher;
    }

    /**
     * Get a navigation node at.
     *
     * @param int $position The position.
     * @return AbstractNavigationNode|null Returns the navigation node in case of success, null otherwise.
     */
    public function getNodeAt(int $position): ?AbstractNavigationNode {

        if ($position < 0 || $this->size() <= $position) {
            return null;
        }

        return $this->getNodes()[$position];
    }

    /**
     * Get a navigation node by id.
     *
     * @param string $id The id.
     * @param bool $recursively Recursively ?
     * @return AbstractNavigationNode|null Returns the navigation node in case of success, null otherwise.
     */
    public function getNodeById(string $id, bool $recursively = false): ?AbstractNavigationNode {

        if (true === array_key_exists($id, $this->index)) {
            return $this->getNodeAt($this->index[$id]);
        }

        if (false === $recursively) {
            return null;
        }

        foreach ($this->getNodes() as $current) {

            $found = $current->getNodeById($id, true);
            if (null !== $found) {
                return $found;
            }
        }

        return null;
    }

    /**
     * Get the navigation nodes.
     *
     * @return AbstractNavigationNode[] Returns the navigation nodes.
     */
    public function getNodes(): array {
        return $this->nodes;
    }

    /**
     * Get the parent.
     *
     * @return AbstractNavigationNode|null Returns the parent.
     */
    public function getParent(): ?AbstractNavigationNode {
        return $this->parent;
    }

    /**
     * Get the target.
     *
     * @return string|null Returns the target.
     */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Get the URI.
     *
     * @return string|null Returns the URI.
     */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * Get the visible.
     *
     * @return bool|null Returns the visible.
     */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Determines if this node is displayable.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function isDisplayable(): bool {

        if (true === $this->getEnable() && $this->getVisible()) {
            return true;
        }

        foreach ($this->getNodes() as $current) {

            if (true === $current->isDisplayable()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Remove a navigation node.
     *
     * @param AbstractNavigationNode $node The navigation node.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function removeNode(AbstractNavigationNode $node): AbstractNavigationNode {

        if (false === array_key_exists($node->getId(), $this->index)) {
            return $this;
        }

        unset($this->nodes[$this->index[$node->getId()]]);
        unset($this->index[$node->setParent(null)->getId()]);

        return $this;
    }

    /**
     * Set the active.
     *
     * @param bool|null $active Active ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setActive(?bool $active): AbstractNavigationNode {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the enable.
     *
     * @param bool|null $enable Enable ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setEnable(?bool $enable): AbstractNavigationNode {
        $this->enable = $enable;
        return $this;
    }

    /**
     * Set the icon.
     *
     * @param string|null $icon The icon.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setIcon(?string $icon): AbstractNavigationNode {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setId(?string $id): AbstractNavigationNode {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param array $index The index.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setIndex(array $index): AbstractNavigationNode {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setLabel(?string $label): AbstractNavigationNode {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the mather.
     *
     * @param string|null $matcher The matcher.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setMatcher(?string $matcher): AbstractNavigationNode {
        $this->matcher = $matcher;
        return $this;
    }

    /**
     * Set the navigation nodes.
     *
     * @param AbstractNavigationNode[] $nodes The navigation nodes.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setNodes(array $nodes): AbstractNavigationNode {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param AbstractNavigationNode|null $parent The parent.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setParent(?AbstractNavigationNode $parent): AbstractNavigationNode {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the target.
     *
     * @param string|null $target The target.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setTarget(?string $target): AbstractNavigationNode {
        $this->target = $target;
        return $this;
    }

    /**
     * Set the URI.
     *
     * @param string|null $uri The URI.
     * @return AbstractNavigationNode Returns this navigation node.
     */
    public function setUri(?string $uri): AbstractNavigationNode {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible Visible ?
     * @return AbstractNavigationNode Returns this navigation node.
     */
    protected function setVisible(?bool $visible): AbstractNavigationNode {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Size.
     *
     * @return int Returns the size.
     */
    public function size(): int {
        return count($this->getNodes());
    }
}
